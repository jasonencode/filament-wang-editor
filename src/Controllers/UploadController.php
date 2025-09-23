<?php

namespace Jason\WangEditor\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function image(Request $request)
    {
        $file = $request->file('wangeditor-upload-image');

        $hash = File::hash($file);
        $name = sprintf('%s.%s', $hash, $file->getClientOriginalExtension());
        $path = sprintf('%s/%s', date('Y/m/d'), $name);

        if (Storage::putFileAs(date('Y/m/d'), $file, $name) === false) {
            return [
                'errno' => 1,
                'message' => '文件上传失败',
            ];
        }

        return [
            'errno' => 0,
            'data' => [
                'url' => Storage::url($path),
                'alt' => 'imagename',
            ],
        ];
    }
}
