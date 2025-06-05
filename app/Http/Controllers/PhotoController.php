<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Image;
use Illuminate\Support\Facades\Storage;


class PhotoController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $image = $request->file('image');
        $filename = $request->input('filename');
      //  $filename = uniqid() . '.' . $image->getClientOriginalExtension();

        // Resize to 500x500
        $resizedImage = Image::make($image)->fit(500, 500);

        // Save to public/storage/images
        $resizedImage->save(storage_path('app/public/images/' . $filename));

        return response()->json(['success' => true, 'filename' => $filename]);
    }
    //public function resize(Request $request)
    //{
    //    // Example filename from request (e.g., 'photo.jpg')
    //    $filename = $request->input('filename');
    //
    //    // Full path to the original photo in public/storage/photos
    //    $sourcePath = public_path("storage/photos/{$filename}");
    //
    //    if (!file_exists($sourcePath)) {
    //        return response()->json(['error' => 'File not found.'], 404);
    //    }
    //
    //    // Initialize the Intervention Image manager
    //    $manager = new ImageManager();
    //
    //    // Read and resize the image
    //    $image = $manager->read($sourcePath);
    //    $image->resize(300, 200);
    //
    //    // Save resized image (e.g., same folder, new name)
    //    $resizedPath = public_path("storage/photos/resized_{$filename}");
    //    $image->save($resizedPath);
    //
    //    return response()->json(['message' => 'Image resized.', 'resized_path' => "storage/photos/resized_{$filename}"]);
    //}

}
