<?php

use Illuminate\Support\Facades\Route;
use Jason\WangEditor\Controllers\UploadController;

Route::post('jason/wang-editor/upload', [UploadController::class, 'image'])
    ->name('jason.wang-editor.upload');
