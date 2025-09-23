<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
>
    <div class="flex gap-3">
        <div id="editor—wrapper">
            <div id="toolbar-container"><!-- 工具栏 --></div>
            <div id="editor-container">
                内容
                <!-- 编辑器 -->
            </div>
        </div>
    </div>
</x-dynamic-component>
