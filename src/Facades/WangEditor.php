<?php

namespace Jason\WangEditor\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jason\WangEditor\WangEditor
 */
class WangEditor extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Jason\WangEditor\WangEditor::class;
    }
}
