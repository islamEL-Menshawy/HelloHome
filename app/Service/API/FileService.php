<?php

namespace App\Service\API;
use Illuminate\Support\Facades\File;

class FileService
{
//    private static $UPLOAD_PATH = "uploads/";


    public function uploadFile($file, string $fileName, string $path): string
    {
        // Define upload path
        $destinationPath = public_path("uploads/".$path); // upload path
        // Upload Orginal Image
        $profileImage = $fileName . "." . $file->getClientOriginalExtension();
        $file->move($destinationPath, $profileImage);
        return  "/" . $path . "/" . $profileImage;
    }

    public function uploadMultiFiles(array $files, string $fileName, string $path): array
    {
        $listOfPath = array();
        $count = 1;
        foreach ($files as $file){
            $listOfPath[] = $this->uploadFile($file, $fileName. "_". $count, $path);
            $count++;
        }
        return $listOfPath;
    }

    public function deleteFileByPath(string $path): bool
    {
        if(File::exists(public_path("uploads/".$path))){
            File::delete(public_path("uploads/".$path));
            return true;
        }else{
            return false;
        }
    }

    public function renameFileByPath(string $path,string $newName){
        $extension = File::extension("uploads/".$path);
        $newPath = $newName."." . $extension;
        rename(public_path("uploads/".$path), public_path("uploads/".$newPath));
        return $newPath;
    }
}
