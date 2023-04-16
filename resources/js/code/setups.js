import {EditorView, keymap, drawSelection, highlightActiveLine, dropCursor,
    rectangularSelection, lineNumbers, highlightActiveLineGutter} from "@codemirror/view"
import {bracketMatching} from "@codemirror/language"
import {defaultKeymap, history, historyKeymap} from "@codemirror/commands"
import {EditorState} from "@codemirror/state"
import {getTheme} from "./themes";

/**
 * @param {Element} parentEl
 * @return {(Extension[]|{extension: Extension}|readonly Extension[])[]}
 */
function common(parentEl) {
    return [
        getTheme(parentEl),
        lineNumbers(),
        highlightActiveLineGutter(),
        drawSelection(),
        dropCursor(),
        bracketMatching(),
        rectangularSelection(),
        highlightActiveLine(),
    ];
}

/**
 * @param {Element} parentEl
 * @return {*[]}
 */
export function viewer(parentEl) {
    return [
        ...common(parentEl),
        keymap.of([
            ...defaultKeymap,
        ]),
        EditorState.readOnly.of(true),
    ];
}

/**
 * @param {Element} parentEl
 * @return {*[]}
 */
export function editor(parentEl) {
    return [
        ...common(parentEl),
        history(),
        keymap.of([
            ...defaultKeymap,
            ...historyKeymap,
        ]),
        EditorView.lineWrapping,
    ];
}