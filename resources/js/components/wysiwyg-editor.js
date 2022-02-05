import Code from "../services/code";
import DrawIO from "../services/drawio";
import Clipboard from "../services/clipboard";

/**
 * Handle pasting images from clipboard.
 * @param {ClipboardEvent} event
 * @param {WysiwygEditor} wysiwygComponent
 * @param editor
 */
function editorPaste(event, editor, wysiwygComponent) {
    const clipboard = new Clipboard(event.clipboardData || event.dataTransfer);

    // Don't handle the event ourselves if no items exist of contains table-looking data
    if (!clipboard.hasItems() || clipboard.containsTabularData()) {
        return;
    }

    const images = clipboard.getImages();
    for (const imageFile of images) {

        const id = "image-" + Math.random().toString(16).slice(2);
        const loadingImage = window.baseUrl('/loading.gif');
        event.preventDefault();

        setTimeout(() => {
            editor.insertContent(`<p><img src="${loadingImage}" id="${id}"></p>`);

            uploadImageFile(imageFile, wysiwygComponent).then(resp => {
                const safeName = resp.name.replace(/"/g, '');
                const newImageHtml = `<img src="${resp.thumbs.display}" alt="${safeName}" />`;

                const newEl = editor.dom.create('a', {
                    target: '_blank',
                    href: resp.url,
                }, newImageHtml);

                editor.dom.replace(newEl, id);
            }).catch(err => {
                editor.dom.remove(id);
                window.$events.emit('error', wysiwygComponent.imageUploadErrorText);
                console.log(err);
            });
        }, 10);
    }
}

/**
 * Upload an image file to the server
 * @param {File} file
 * @param {WysiwygEditor} wysiwygComponent
 */
async function uploadImageFile(file, wysiwygComponent) {
    if (file === null || file.type.indexOf('image') !== 0) {
        throw new Error(`Not an image file`);
    }

    let ext = 'png';
    if (file.name) {
        let fileNameMatches = file.name.match(/\.(.+)$/);
        if (fileNameMatches.length > 1) ext = fileNameMatches[1];
    }

    const remoteFilename = "image-" + Date.now() + "." + ext;
    const formData = new FormData();
    formData.append('file', file, remoteFilename);
    formData.append('uploaded_to', wysiwygComponent.pageId);

    const resp = await window.$http.post(window.baseUrl('/images/gallery'), formData);
    return resp.data;
}

function registerEditorShortcuts(editor) {
    // Headers
    for (let i = 1; i < 5; i++) {
        editor.shortcuts.add('meta+' + i, '', ['FormatBlock', false, 'h' + (i+1)]);
    }

    // Other block shortcuts
    editor.shortcuts.add('meta+5', '', ['FormatBlock', false, 'p']);
    editor.shortcuts.add('meta+d', '', ['FormatBlock', false, 'p']);
    editor.shortcuts.add('meta+6', '', ['FormatBlock', false, 'blockquote']);
    editor.shortcuts.add('meta+q', '', ['FormatBlock', false, 'blockquote']);
    editor.shortcuts.add('meta+7', '', ['codeeditor', false, 'pre']);
    editor.shortcuts.add('meta+e', '', ['codeeditor', false, 'pre']);
    editor.shortcuts.add('meta+8', '', ['FormatBlock', false, 'code']);
    editor.shortcuts.add('meta+shift+E', '', ['FormatBlock', false, 'code']);

    // Save draft shortcut
    editor.shortcuts.add('meta+S', '', () => {
        window.$events.emit('editor-save-draft');
    });

    // Save page shortcut
    editor.shortcuts.add('meta+13', '', () => {
        window.$events.emit('editor-save-page');
    });

    // Loop through callout styles
    editor.shortcuts.add('meta+9', '', function() {
        const selectedNode = editor.selection.getNode();
        const callout = selectedNode ? selectedNode.closest('.callout') : null;

        const formats = ['info', 'success', 'warning', 'danger'];
        const currentFormatIndex = formats.findIndex(format => callout && callout.classList.contains(format));
        const newFormatIndex = (currentFormatIndex + 1) % formats.length;
        const newFormat = formats[newFormatIndex];

        editor.formatter.apply('callout' + newFormat);
    });

}

/**
 * Load custom HTML head content from the settings into the editor.
 * @param editor
 */
function loadCustomHeadContent(editor) {
    window.$http.get(window.baseUrl('/custom-head-content')).then(resp => {
        if (!resp.data) return;
        let head = editor.getDoc().querySelector('head');
        head.innerHTML += resp.data;
    });
}

/**
 * Create and enable our custom code plugin
 */
function codePlugin() {

    function elemIsCodeBlock(elem) {
        return elem.className === 'CodeMirrorContainer';
    }

    function showPopup(editor) {
        const selectedNode = editor.selection.getNode();

        if (!elemIsCodeBlock(selectedNode)) {
            const providedCode = editor.selection.getNode().textContent;
            window.components.first('code-editor').open(providedCode, '', (code, lang) => {
                const wrap = document.createElement('div');
                wrap.innerHTML = `<pre><code class="language-${lang}"></code></pre>`;
                wrap.querySelector('code').innerText = code;

                editor.formatter.toggle('pre');
                const node = editor.selection.getNode();
                editor.dom.setHTML(node, wrap.querySelector('pre').innerHTML);
                editor.fire('SetContent');

                editor.focus()
            });
            return;
        }

        const lang = selectedNode.hasAttribute('data-lang') ? selectedNode.getAttribute('data-lang') : '';
        const currentCode = selectedNode.querySelector('textarea').textContent;

        window.components.first('code-editor').open(currentCode, lang, (code, lang) => {
            const editorElem = selectedNode.querySelector('.CodeMirror');
            const cmInstance = editorElem.CodeMirror;
            if (cmInstance) {
                Code.setContent(cmInstance, code);
                Code.setMode(cmInstance, lang, code);
            }
            const textArea = selectedNode.querySelector('textarea');
            if (textArea) textArea.textContent = code;
            selectedNode.setAttribute('data-lang', lang);

            editor.focus()
        });
    }

    function codeMirrorContainerToPre(codeMirrorContainer) {
        const textArea = codeMirrorContainer.querySelector('textarea');
        const code = textArea.textContent;
        const lang = codeMirrorContainer.getAttribute('data-lang');

        codeMirrorContainer.removeAttribute('contentEditable');
        const pre = document.createElement('pre');
        const codeElem = document.createElement('code');
        codeElem.classList.add(`language-${lang}`);
        codeElem.textContent = code;
        pre.appendChild(codeElem);

        codeMirrorContainer.parentElement.replaceChild(pre, codeMirrorContainer);
    }

    window.tinymce.PluginManager.add('codeeditor', function(editor, url) {

        const $ = editor.$;

        editor.ui.registry.addIcon('codeblock', '<svg width="24" height="24"><path d="M4 3h16c.6 0 1 .4 1 1v16c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1V4c0-.6.4-1 1-1Zm1 2v14h14V5Z"/><path d="M11.103 15.423c.277.277.277.738 0 .922a.692.692 0 0 1-1.106 0l-4.057-3.78a.738.738 0 0 1 0-1.107l4.057-3.872c.276-.277.83-.277 1.106 0a.724.724 0 0 1 0 1.014L7.6 12.012ZM12.897 8.577c-.245-.312-.2-.675.08-.955.28-.281.727-.27 1.027.033l4.057 3.78a.738.738 0 0 1 0 1.107l-4.057 3.872c-.277.277-.83.277-1.107 0a.724.724 0 0 1 0-1.014l3.504-3.412z"/></svg>')

        editor.ui.registry.addButton('codeeditor', {
            title: 'Insert code block',
            icon: 'codeblock',
            onAction() {
                editor.execCommand('codeeditor');
            }
        });

        editor.addCommand('codeeditor', () => {
            showPopup(editor);
        });

        // Convert
        editor.on('PreProcess', function (e) {
            $('div.CodeMirrorContainer', e.node).each((index, elem) => {
                codeMirrorContainerToPre(elem);
            });
        });

        editor.on('dblclick', event => {
            let selectedNode = editor.selection.getNode();
            if (!elemIsCodeBlock(selectedNode)) return;
            showPopup(editor);
        });

        function parseCodeMirrorInstances() {

            // Recover broken codemirror instances
            $('.CodeMirrorContainer').filter((index ,elem) => {
                return typeof elem.querySelector('.CodeMirror').CodeMirror === 'undefined';
            }).each((index, elem) => {
                codeMirrorContainerToPre(elem);
            });

            const codeSamples = $('body > pre').filter((index, elem) => {
                return elem.contentEditable !== "false";
            });

            codeSamples.each((index, elem) => {
                Code.wysiwygView(elem);
            });
        }

        editor.on('init', function() {
            // Parse code mirror instances on init, but delay a little so this runs after
            // initial styles are fetched into the editor.
            editor.undoManager.transact(function () {
                parseCodeMirrorInstances();
            });
            // Parsed code mirror blocks when content is set but wait before setting this handler
            // to avoid any init 'SetContent' events.
            setTimeout(() => {
                editor.on('SetContent', () => {
                    setTimeout(parseCodeMirrorInstances, 100);
                });
            }, 200);
        });

    });
}

function drawIoPlugin(drawioUrl, isDarkMode, pageId, wysiwygComponent) {

    let pageEditor = null;
    let currentNode = null;

    function isDrawing(node) {
        return node.hasAttribute('drawio-diagram');
    }

    function showDrawingManager(mceEditor, selectedNode = null) {
        pageEditor = mceEditor;
        currentNode = selectedNode;
        // Show image manager
        window.ImageManager.show(function (image) {
            if (selectedNode) {
                let imgElem = selectedNode.querySelector('img');
                pageEditor.dom.setAttrib(imgElem, 'src', image.url);
                pageEditor.dom.setAttrib(selectedNode, 'drawio-diagram', image.id);
            } else {
                let imgHTML = `<div drawio-diagram="${image.id}" contenteditable="false"><img src="${image.url}"></div>`;
                pageEditor.insertContent(imgHTML);
            }
        }, 'drawio');
    }

    function showDrawingEditor(mceEditor, selectedNode = null) {
        pageEditor = mceEditor;
        currentNode = selectedNode;
        DrawIO.show(drawioUrl, drawingInit, updateContent);
    }

    async function updateContent(pngData) {
        const id = "image-" + Math.random().toString(16).slice(2);
        const loadingImage = window.baseUrl('/loading.gif');

        const handleUploadError = (error) => {
            if (error.status === 413) {
                window.$events.emit('error', wysiwygComponent.serverUploadLimitText);
            } else {
                window.$events.emit('error', wysiwygComponent.imageUploadErrorText);
            }
            console.log(error);
        };

        // Handle updating an existing image
        if (currentNode) {
            DrawIO.close();
            let imgElem = currentNode.querySelector('img');
            try {
                const img = await DrawIO.upload(pngData, pageId);
                pageEditor.dom.setAttrib(imgElem, 'src', img.url);
                pageEditor.dom.setAttrib(currentNode, 'drawio-diagram', img.id);
            } catch (err) {
                handleUploadError(err);
            }
            return;
        }

        setTimeout(async () => {
            pageEditor.insertContent(`<div drawio-diagram contenteditable="false"><img src="${loadingImage}" id="${id}"></div>`);
            DrawIO.close();
            try {
                const img = await DrawIO.upload(pngData, pageId);
                pageEditor.dom.setAttrib(id, 'src', img.url);
                pageEditor.dom.get(id).parentNode.setAttribute('drawio-diagram', img.id);
            } catch (err) {
                pageEditor.dom.remove(id);
                handleUploadError(err);
            }
        }, 5);
    }


    function drawingInit() {
        if (!currentNode) {
            return Promise.resolve('');
        }

        let drawingId = currentNode.getAttribute('drawio-diagram');
        return DrawIO.load(drawingId);
    }

    window.tinymce.PluginManager.add('drawio', function(editor, url) {

        editor.addCommand('drawio', () => {
            const selectedNode = editor.selection.getNode();
            showDrawingEditor(editor, isDrawing(selectedNode) ? selectedNode : null);
        });

        // editor.ui.registry.addIcon('diagram', `<svg height="24" width="24" fill="${isDarkMode ? '#BBB' : '#000000'}"  ><path d="M23 7V1h-6v2H7V1H1v6h2v10H1v6h6v-2h10v2h6v-6h-2V7h2zM3 3h2v2H3V3zm2 18H3v-2h2v2zm12-2H7v-2H5V7h2V5h10v2h2v10h-2v2zm4 2h-2v-2h2v2zM19 5V3h2v2h-2zm-5.27 9h-3.49l-.73 2H7.89l3.4-9h1.4l3.41 9h-1.63l-.74-2zm-3.04-1.26h2.61L12 8.91l-1.31 3.83z"/></svg>`)
        editor.ui.registry.addIcon('diagram', `<svg width="24" height="24" fill="${isDarkMode ? '#BBB' : '#000000'}" xmlns="http://www.w3.org/2000/svg"><path d="M20.716 7.639V2.845h-4.794v1.598h-7.99V2.845H3.138v4.794h1.598v7.99H3.138v4.794h4.794v-1.598h7.99v1.598h4.794v-4.794h-1.598v-7.99zM4.736 4.443h1.598V6.04H4.736zm1.598 14.382H4.736v-1.598h1.598zm9.588-1.598h-7.99v-1.598H6.334v-7.99h1.598V6.04h7.99v1.598h1.598v7.99h-1.598zm3.196 1.598H17.52v-1.598h1.598zM17.52 6.04V4.443h1.598V6.04zm-4.21 7.19h-2.79l-.582 1.599H8.643l2.717-7.191h1.119l2.724 7.19h-1.302zm-2.43-1.006h2.086l-1.039-3.06z"/></svg>`)

        editor.ui.registry.addSplitButton('drawio', {
            tooltip: 'Drawing',
            icon: 'diagram',
            onAction() {
                editor.execCommand('drawio');
            },
            fetch(callback) {
                callback([
                    {
                        type: 'choiceitem',
                        text: 'Drawing Manager',
                        value: 'drawing-manager',
                    }
                ]);
            },
            onItemAction(api, value) {
                if (value === 'drawing-manager') {
                    const selectedNode = editor.selection.getNode();
                    showDrawingManager(editor, isDrawing(selectedNode) ? selectedNode : null);
                }
            }
        });

        editor.on('dblclick', event => {
            let selectedNode = editor.selection.getNode();
            if (!isDrawing(selectedNode)) return;
            showDrawingEditor(editor, selectedNode);
        });

        editor.on('SetContent', function () {
            const drawings = editor.$('body > div[drawio-diagram]');
            if (!drawings.length) return;

            editor.undoManager.transact(function () {
                drawings.each((index, elem) => {
                    elem.setAttribute('contenteditable', 'false');
                });
            });
        });

    });
}

function customHrPlugin() {
    window.tinymce.PluginManager.add('customhr', function (editor) {
        editor.addCommand('InsertHorizontalRule', function () {
            let hrElem = document.createElement('hr');
            let cNode = editor.selection.getNode();
            let parentNode = cNode.parentNode;
            parentNode.insertBefore(hrElem, cNode);
        });

        editor.ui.registry.addButton('hr', {
            icon: 'horizontal-rule',
            tooltip: 'Horizontal line',
            onAction() {
                editor.execCommand('InsertHorizontalRule');
            }
        });

        editor.ui.registry.addMenuItem('hr', {
            icon: 'horizontal-rule',
            text: 'Horizontal line',
            context: 'insert',
            onAction() {
                editor.execCommand('InsertHorizontalRule');
            }
        });
    });
}


function listenForBookStackEditorEvents(editor) {

    // Replace editor content
    window.$events.listen('editor::replace', ({html}) => {
        editor.setContent(html);
    });

    // Append editor content
    window.$events.listen('editor::append', ({html}) => {
        const content = editor.getContent() + html;
        editor.setContent(content);
    });

    // Prepend editor content
    window.$events.listen('editor::prepend', ({html}) => {
        const content = html + editor.getContent();
        editor.setContent(content);
    });

    // Insert editor content at the current location
    window.$events.listen('editor::insert', ({html}) => {
        editor.insertContent(html);
    });

    // Focus on the editor
    window.$events.listen('editor::focus', () => {
        editor.focus();
    });
}

class WysiwygEditor {

    setup() {
        this.elem = this.$el;

        this.pageId = this.$opts.pageId;
        this.textDirection = this.$opts.textDirection;
        this.imageUploadErrorText = this.$opts.imageUploadErrorText;
        this.serverUploadLimitText = this.$opts.serverUploadLimitText;
        this.isDarkMode = document.documentElement.classList.contains('dark-mode');

        this.plugins = "image imagetools table paste link autolink fullscreen code customhr autosave lists codeeditor media";
        this.loadPlugins();

        this.tinyMceConfig = this.getTinyMceConfig();
        window.$events.emitPublic(this.elem, 'editor-tinymce::pre-init', {config: this.tinyMceConfig});
        window.tinymce.init(this.tinyMceConfig);
    }

    loadPlugins() {
        codePlugin();
        customHrPlugin();

        const drawioUrlElem = document.querySelector('[drawio-url]');
        if (drawioUrlElem) {
            const url = drawioUrlElem.getAttribute('drawio-url');
            drawIoPlugin(url, this.isDarkMode, this.pageId, this);
            this.plugins += ' drawio';
        }

        if (this.textDirection === 'rtl') {
            this.plugins += ' directionality'
        }
    }

    getToolBar() {
        const textDirPlugins = this.textDirection === 'rtl' ? 'ltr rtl' : '';
        return `undo redo | styleselect | bold italic underline strikethrough superscript subscript | forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | table image-insert link hr codeeditor drawio media | removeformat code ${textDirPlugins} fullscreen`
    }

    getTinyMceConfig() {

        const context = this;

        return {
            width: '100%',
            height: '100%',
            selector: '#html-editor',
            content_css: [
                window.baseUrl('/dist/styles.css'),
            ],
            branding: false,
            skin: this.isDarkMode ? 'oxide-dark' : 'oxide',
            body_class: 'page-content',
            browser_spellcheck: true,
            relative_urls: false,
            directionality : this.textDirection,
            remove_script_host: false,
            document_base_url: window.baseUrl('/'),
            end_container_on_empty_block: true,
            statusbar: false,
            menubar: false,
            paste_data_images: false,
            extended_valid_elements: 'pre[*],svg[*],div[drawio-diagram]',
            automatic_uploads: false,
            valid_children: "-div[p|h1|h2|h3|h4|h5|h6|blockquote],+div[pre],+div[img]",
            plugins: this.plugins,
            imagetools_toolbar: 'imageoptions',
            contextmenu: false,
            toolbar: this.getToolBar(),
            content_style: `html, body, html.dark-mode {background: ${this.isDarkMode ? '#222' : '#fff'};} body {padding-left: 15px !important; padding-right: 15px !important; margin:0!important; margin-left:auto!important;margin-right:auto!important;}`,
            style_formats: [
                {title: "Header Large", format: "h2", preview: 'color: blue;'},
                {title: "Header Medium", format: "h3"},
                {title: "Header Small", format: "h4"},
                {title: "Header Tiny", format: "h5"},
                {title: "Paragraph", format: "p", exact: true, classes: ''},
                {title: "Blockquote", format: "blockquote"},
                {title: "Inline Code", inline: "code"},
                {title: "Callouts", items: [
                        {title: "Info", format: 'calloutinfo'},
                        {title: "Success", format: 'calloutsuccess'},
                        {title: "Warning", format: 'calloutwarning'},
                        {title: "Danger", format: 'calloutdanger'}
                    ]},
            ],
            style_formats_merge: false,
            media_alt_source: false,
            media_poster: false,
            formats: {
                codeeditor: {selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div'},
                alignleft: {selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'align-left'},
                aligncenter: {selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'align-center'},
                alignright: {selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'align-right'},
                calloutsuccess: {block: 'p', exact: true, attributes: {class: 'callout success'}},
                calloutinfo: {block: 'p', exact: true, attributes: {class: 'callout info'}},
                calloutwarning: {block: 'p', exact: true, attributes: {class: 'callout warning'}},
                calloutdanger: {block: 'p', exact: true, attributes: {class: 'callout danger'}}
            },
            file_picker_types: 'file image',
            file_picker_callback(callback, value, meta) {

                // field_name, url, type, win
                if (meta.filetype === 'file') {
                    window.EntitySelectorPopup.show(entity => {
                        callback(entity.link, {
                            text: entity.name,
                            title: entity.name,
                        });
                    });
                }

                if (meta.filetype === 'image') {
                    // Show image manager
                    window.ImageManager.show(function (image) {
                        callback(image.url, {alt: image.name});
                    }, 'gallery');
                }

            },
            paste_preprocess(plugin, args) {
                let content = args.content;
                if (content.indexOf('<img src="file://') !== -1) {
                    args.content = '';
                }
            },
            init_instance_callback(editor) {
                loadCustomHeadContent(editor);
            },
            setup(editor) {

                editor.on('ExecCommand change input NodeChange ObjectResized', editorChange);

                editor.on('init', () => {
                    editorChange();
                    // Scroll to the content if needed.
                    const queryParams = (new URL(window.location)).searchParams;
                    const scrollId = queryParams.get('content-id');
                    if (scrollId) {
                        scrollToText(scrollId);
                    }

                    // Override for touch events to allow scroll on mobile
                    const container = editor.getContainer();
                    const toolbarButtons = container.querySelectorAll('.mce-btn');
                    for (let button of toolbarButtons) {
                        button.addEventListener('touchstart', event => {
                            event.stopPropagation();
                        });
                    }
                    window.editor = editor;
                });

                function editorChange() {
                    const content = editor.getContent();
                    if (context.isDarkMode) {
                        editor.contentDocument.documentElement.classList.add('dark-mode');
                    }
                    window.$events.emit('editor-html-change', content);
                }

                function scrollToText(scrollId) {
                    const element = editor.dom.get(encodeURIComponent(scrollId).replace(/!/g, '%21'));
                    if (!element) {
                        return;
                    }

                    // scroll the element into the view and put the cursor at the end.
                    element.scrollIntoView();
                    editor.selection.select(element, true);
                    editor.selection.collapse(false);
                    editor.focus();
                }

                listenForBookStackEditorEvents(editor);

                // TODO - Update to standardise across both editors
                // Use events within listenForBookStackEditorEvents instead (Different event signature)
                window.$events.listen('editor-html-update', html => {
                    editor.setContent(html);
                    editor.selection.select(editor.getBody(), true);
                    editor.selection.collapse(false);
                    editorChange(html);
                });

                registerEditorShortcuts(editor);

                let wrap;
                let draggedContentEditable;

                function hasTextContent(node) {
                    return node && !!( node.textContent || node.innerText );
                }

                editor.on('dragstart', function () {
                    let node = editor.selection.getNode();

                    if (node.nodeName === 'IMG') {
                        wrap = editor.dom.getParent(node, '.mceTemp');

                        if (!wrap && node.parentNode.nodeName === 'A' && !hasTextContent(node.parentNode)) {
                            wrap = node.parentNode;
                        }
                    }

                    // Track dragged contenteditable blocks
                    if (node.hasAttribute('contenteditable') && node.getAttribute('contenteditable') === 'false') {
                        draggedContentEditable = node;
                    }

                });

                // Custom drop event handling
                editor.on('drop', function (event) {
                    let dom = editor.dom,
                        rng = tinymce.dom.RangeUtils.getCaretRangeFromPoint(event.clientX, event.clientY, editor.getDoc());

                    // Template insertion
                    const templateId = event.dataTransfer && event.dataTransfer.getData('bookstack/template');
                    if (templateId) {
                        event.preventDefault();
                        window.$http.get(`/templates/${templateId}`).then(resp => {
                            editor.selection.setRng(rng);
                            editor.undoManager.transact(function () {
                                editor.execCommand('mceInsertContent', false, resp.data.html);
                            });
                        });
                    }

                    // Don't allow anything to be dropped in a captioned image.
                    if (dom.getParent(rng.startContainer, '.mceTemp')) {
                        event.preventDefault();
                    } else if (wrap) {
                        event.preventDefault();

                        editor.undoManager.transact(function () {
                            editor.selection.setRng(rng);
                            editor.selection.setNode(wrap);
                            dom.remove(wrap);
                        });
                    }

                    // Handle contenteditable section drop
                    if (!event.isDefaultPrevented() && draggedContentEditable) {
                        event.preventDefault();
                        editor.undoManager.transact(function () {
                            const selectedNode = editor.selection.getNode();
                            const range = editor.selection.getRng();
                            const selectedNodeRoot = selectedNode.closest('body > *');
                            if (range.startOffset > (range.startContainer.length / 2)) {
                                editor.$(selectedNodeRoot).after(draggedContentEditable);
                            } else {
                                editor.$(selectedNodeRoot).before(draggedContentEditable);
                            }
                        });
                    }

                    // Handle image insert
                    if (!event.isDefaultPrevented()) {
                        editorPaste(event, editor, context);
                    }

                    wrap = null;
                });

                // Custom Image picker button
                editor.ui.registry.addButton('image-insert', {
                    title: 'Insert an image',
                    icon: 'image',
                    tooltip: 'Insert an image',
                    onAction() {
                        window.ImageManager.show(function (image) {
                            const imageUrl = image.thumbs.display || image.url;
                            let html = `<a href="${image.url}" target="_blank">`;
                            html += `<img src="${imageUrl}" alt="${image.name}">`;
                            html += '</a>';
                            editor.execCommand('mceInsertContent', false, html);
                        }, 'gallery');
                    }
                });

                // Paste image-uploads
                editor.on('paste', event => editorPaste(event, editor, context));

                // Custom handler hook
                window.$events.emitPublic(context.elem, 'editor-tinymce::setup', {editor});
            }
        };
    }

}

export default WysiwygEditor;
