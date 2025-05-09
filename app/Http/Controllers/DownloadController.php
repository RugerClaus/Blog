<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function SnowBlitz($filename)
    {
        $path = public_path("downloads/{$filename}");
        \Log::info("Trying to download: $filename");
        dd($filename); // this should stop and show the filename
        if (!file_exists($path)) {
            \Log::error("File not found: " . $path);
            abort(404);
        }
    
        return response()->download($path);
    }
}
