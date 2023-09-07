<?php

namespace App\Http\Controllers;

use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class GalleryController extends Controller
{
    public function show()
    {
        $files = Storage::allFiles('public/gallery');
        $filePaths = [];
        foreach ($files as $file) {
            if (Storage::mimeType($file) == 'image/png') {
                $filePaths[] = Storage::url($file);
            }
        }

        return Inertia::render('Gallery', [
            'files' => $filePaths
        ]);
    }
}
