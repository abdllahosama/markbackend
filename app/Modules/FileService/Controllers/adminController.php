<?php

namespace App\Modules\FileService\Controllers;

use App\Bll\Utility;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Modules\FileService\Requests\StoreRequest;

class adminController extends Controller
{
    public function store(StoreRequest $request)
    {
        // Directory name within the 'public' folder
        $tempDirectory = 'temp';
        $mobileTempDirectory = 'temp/mobile';


        // Get the uploaded file from the request
        $file = $request->file('file');
        // Define the path for the destination directory within the public path
        $destinationPath = public_path($tempDirectory);
        $mobileDestinationPath = public_path($mobileTempDirectory);
        // If the directory doesn't exist, create it
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }
        if (!file_exists($mobileDestinationPath)) {
            mkdir($mobileDestinationPath, 0755, true);
        }
        // Generate a new unique file name
        $newFileName = uniqid() . '.' . $file->getClientOriginalExtension(); // Using PHP's uniqid function
        // Move the file to the public path with the new file name
        $file->move($destinationPath, $newFileName);
        $image = Image::make($destinationPath . '/' . $newFileName);
        $image->resize(300, null, function ($constraint) {
            $constraint->aspectRatio();
        });
        $image->save($mobileDestinationPath . '/' . $newFileName);

        // Return a success response or perform additional actions if needed
        return $this->sendResponse($newFileName, 'File uploaded successfully.');
    }

    public function storeGallery()
    {

        $storeId = Utility::get_store_id();
        $directoryPath = public_path('uploads/' . $storeId);
        $perPage = 3;

        if (File::isDirectory($directoryPath)) {
            $photos = File::allFiles($directoryPath);

            if (empty($photos)) {
                return $this->sendError('No photos found in the specified directory.', 404);
            } else {
                // Filter and paginate the photos
                $filteredPhotos = collect($photos)->filter(function ($photo) {
                    // Check if the file is an image based on MIME type
                    $mimeType = File::mimeType($photo);
                    return strpos($mimeType, 'image') !== false;
                });

                $currentPage = LengthAwarePaginator::resolveCurrentPage();
                $currentPagePhotos = $filteredPhotos->slice(($currentPage - 1) * $perPage, $perPage)->all();

                $formattedPhotos = collect($currentPagePhotos)->map(function ($photo) use ($storeId) {
                    // Convert backslashes to forward slashes for consistency
                    $relativePath = str_replace('\\', '/', $photo);

                    // Extract the part of the path that comes after 'uploads/'
                    $relativePath = explode('uploads/' . $storeId . '/', $relativePath)[1] ?? '';

                    return ['path' => $relativePath, 'url' => asset('uploads/' . $storeId . '/' . $relativePath)];
                })->values();

                return $this->sendResponse($formattedPhotos, 'File uploaded successfully.');
            }
        }
    }
}
