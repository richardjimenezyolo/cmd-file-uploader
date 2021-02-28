<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileController extends Controller
{
    public function store(Request $request, string $fileName)
    {

        $content = $request->getContent();

        $token = Str::random(5);

        Storage::disk('local')->put("public/$token/$fileName", $content);

        return url('/') . "/$token/" . $fileName . "\n";
    }

    public function get(Request $request, $token, $fileName)
    {
        return Storage::disk('local')->get("public/$token/$fileName");
    }
}
