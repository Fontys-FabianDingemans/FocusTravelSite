<?php

namespace App\Http\Controllers;

class DownloadController extends Controller
{
    public function download_app()
    {
        $fileName = "FocusTravel-1.1.apk";

        $file = public_path()."/app-downloads/$fileName";
        $headers = array(
            'Content-Type: application/apk',
        );
        return response()->download($file, $fileName, $headers);
    }
}
