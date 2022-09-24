<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\BaseController;
use App\Http\Resources\ContentCollection;
use App\Models\ContactUs;
use App\Models\Images;
use App\Models\Newsletter;
use App\Models\UnitIntrest;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Attribut;
use Illuminate\Support\Facades\File;

class ContentController extends BaseController
{
    public function getContent($page){
        $data = Page::where('page_title', $page)->first();
        $object = array();
        foreach ($data->attributes as $value){
            $object[$value->title] = $value->is_image ? getenv('APP_URL'). $value->image->image_path : $value->content;
        }
        return $this->sendResponse($object,"");
    }
    public function updateContent(Request $request){
        foreach ($request->data as $key => $value){
            $attribute = Attribut::where('title' , $key)->first();
            $attribute->content = $value;
            $attribute->save();
        }
        return $this->sendResponse("", "Page updated successfully");
    }

    public function updateContentImage(Request $request){
        $request->validate([
            'key'=>'required',
            'image'=>'required'
        ]);
        $attribute = Attribut::where('title' , $request->key)->first();
        $this->deleteFileByPath($attribute->image->image_path);
        $path = $this->uploadFile($request->file('image'), $request->key , 'pages');
        $image = Images::findOrFail($attribute->image_id);
        $image->image_path = $path;
        $image->save();
        return $this->sendResponse(getenv('APP_URL').$image->image_path,"Image updated successfully") ;
    }

    public function getAllData($model){
        $data = null;
        switch ($model){
            case 'newsletter':
                $data = Newsletter::all();
                break;
            case 'contact':
                $data = ContactUs::all();
                break;
            case 'unit':
                $data = UnitIntrest::all();
                break;
        }
        return $this->sendResponse($data, "");
    }


    public function uploadFile($file, string $fileName, string $path): string
    {
        // Define upload path
        $destinationPath = public_path($path); // upload path
        // Upload Orginal Image
        $profileImage = $fileName . "." . $file->getClientOriginalExtension();
        $file->move($destinationPath, $profileImage);
        return  "/" . $path . "/" . $profileImage;
    }

    public function deleteFileByPath(string $path): bool
    {
        if(File::exists(public_path($path))){
            File::delete(public_path($path));
            return true;
        }else{
            return false;
        }
    }



}
