const MarkdownIt = require("markdown-it");
const md = new MarkdownIt({ html: true });

class PageComments {

    constructor(elem) {
        this.elem = elem;
        this.pageId = Number(elem.getAttribute('page-id'));

        this.formContainer = elem.querySelector('[comment-form-container]');
        this.form = this.formContainer.querySelector('form');
        this.formInput = this.form.querySelector('textarea');
        this.container = elem.querySelector('[comment-container]');

        // TODO - Handle elem usage when no permissions
        this.form.addEventListener('submit', this.saveComment.bind(this));
        this.elem.addEventListener('click', this.handleAction.bind(this));
        this.elem.addEventListener('submit', this.updateComment.bind(this));

        this.editingComment = null;
    }

    handleAction(event) {
        let actionElem = event.target.closest('[action]');
        if (actionElem === null) return;

        let action = actionElem.getAttribute('action');
        if (action === 'edit') this.editComment(actionElem.closest('[comment]'));
        if (action === 'closeUpdateForm') this.closeUpdateForm();
        if (action === 'delete') this.deleteComment(actionElem.closest('[comment]'));
        if (action === 'addComment') this.showForm();
        if (action === 'hideForm') this.hideForm();
        if (action === 'reply') this.setReply();
    }

    closeUpdateForm() {
        if (!this.editingComment) return;
        this.editingComment.querySelector('[comment-content]').style.display = 'block';
        this.editingComment.querySelector('[comment-edit-container]').style.display = 'none';
    }

    editComment(commentElem) {
        this.hideForm();
        if (this.editingComment) this.closeUpdateForm();
        commentElem.querySelector('[comment-content]').style.display = 'none';
        commentElem.querySelector('[comment-edit-container]').style.display = 'block';
        this.editingComment = commentElem;
    }

    updateComment(event) {
        let form = event.target;
        event.preventDefault();
        let text = form.querySelector('textarea').value;
        let reqData = {
            text: text,
            html: md.render(text),
            // parent_id: this.parent_id TODO - Handle replies
        };
        // TODO - Loading indicator
        let commentId = this.editingComment.getAttribute('comment');
        window.$http.put(window.baseUrl(`/ajax/comment/${commentId}`), reqData).then(resp => {
            let newComment = document.createElement('div');
            newComment.innerHTML = resp.data;
            this.editingComment.innerHTML = newComment.children[0].innerHTML;
            window.$events.emit('success', window.trans('entities.comment_updated_success'));
            this.closeUpdateForm();
            this.editingComment = null;
        });
    }

    deleteComment(commentElem) {
        let id = commentElem.getAttribute('comment');
        // TODO - Loading indicator
        // TODO - Confirm dropdown
        window.$http.delete(window.baseUrl(`/ajax/comment/${id}`)).then(resp => {
            commentElem.parentNode.removeChild(commentElem);
            window.$events.emit('success', window.trans('entities.comment_deleted_success'));
            this.updateCount();
        });
    }

    saveComment(event) {
        event.preventDefault();
        event.stopPropagation();
        let text = this.formInput.value;
        let reqData = {
            text: text,
            html: md.render(text),
            // parent_id: this.parent_id TODO - Handle replies
        };
        // TODO - Loading indicator
        window.$http.post(window.baseUrl(`/ajax/page/${this.pageId}/comment`), reqData).then(resp => {
            let newComment = document.createElement('div');
            newComment.innerHTML = resp.data;
            this.container.appendChild(newComment.children[0]);

            window.$events.emit('success', window.trans('entities.comment_created_success'));
            this.resetForm();
            this.updateCount();
        });
    }

    updateCount() {
        let count = this.container.children.length;
        this.elem.querySelector('[comments-title]').textContent = window.trans_choice('entities.comment_count', count, {count});
    }

    resetForm() {
        this.formInput.value = '';
        this.formContainer.appendChild(this.form);
        this.hideForm();
    }

    showForm() {
        this.formContainer.style.display = 'block';
        this.formContainer.parentNode.style.display = 'block';
        this.elem.querySelector('[comment-add-button]').style.display = 'none';
        this.formInput.focus(); // TODO - Scroll to input on focus
    }

    hideForm() {
        this.formContainer.style.display = 'none';
        this.formContainer.parentNode.style.display = 'none';
        this.elem.querySelector('[comment-add-button]').style.display = 'block';
    }

    setReply() {

        this.showForm();
    }

}

// TODO - Go to comment if url param set


module.exports = PageComments;