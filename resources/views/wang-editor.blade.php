<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
>
    <script
        src="{{ \Filament\Support\Facades\FilamentAsset::getScriptSrc('wang-editor-scripts', package: 'jason/wang-editor') }}"></script>

    <style>
        #editor—wrapper {
            border: 1px solid #ccc;
            z-index: 100; /* 按需定义 */
        }

        #toolbar-container {
            border-bottom: 1px solid #ccc;
        }

        #editor-container {
            min-height: 300px;
            height: 300px;
        }
    </style>

    <div
        class="flex gap-3"
        x-data="{}"
    >
        <div id="editor—wrapper">
            <div id="toolbar-container"><!-- 工具栏 --></div>
            <div id="editor-container"><!-- 编辑器 --></div>
        </div>
    </div>
    <script>
        const {createEditor, createToolbar} = window.wangEditor

        const editorConfig = {
            placeholder: '',
            MENU_CONF: {},
            onChange(editor) {
                const html = editor.getHtml()
                console.log('editor content', html)
            },
        }

        editorConfig.MENU_CONF['uploadImage'] = {
            server: '/api/upload-img',
        }

        const editor = createEditor({
            selector: '#editor-container',
            html: '',
            config: editorConfig,
            mode: 'default',
        })

        const toolbarConfig = {}

        const toolbar = createToolbar({
            editor,
            selector: '#toolbar-container',
            config: toolbarConfig,
            mode: 'default',
        })
    </script>
</x-dynamic-component>
