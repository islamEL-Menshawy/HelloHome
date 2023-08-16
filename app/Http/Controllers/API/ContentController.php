<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\BaseController;
use App\Models\ContactUs;
use App\Models\Images;
use App\Models\Newsletter;
use App\Models\SEO;
use App\Models\UnitIntrest;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Attribut;
use Illuminate\Support\Facades\File;

class ContentController extends BaseController
{
    public function getContent($page){
        $data = Page::where('page_title', $page)->with('seo')->first();
        $object = array();
        foreach ($data->attributes as $value){
            $object[$value->title] = $value->is_image ? getenv('APP_URL'). $value->image->image_path : $value->content;
        }
        $object['page_id'] = $data['id'];
        $object['seo'] = $data['seo'];
        return $this->sendResponse($object,"");
    }
    public function updateContent(Request $request){
        // Update page content
        foreach ($request->data as $key => $value){
            $attribute = Attribut::where('title' , $key)->first();
            if (!is_null($attribute)){
                $attribute->content = $value;
                $attribute->save();
            }
        }
        // Update page seo data
        $seo = SEO::where("page_id", $request['data']['seo']['page_id'])->first();
        $seo['keywords_en'] = $request['data']['seo']['keywords_en'];
        $seo['keywords_ar'] = $request['data']['seo']['keywords_ar'];
        $seo['description_en'] = $request['data']['seo']['description_en'];
        $seo['description_ar'] = $request['data']['seo']['description_ar'];
        $seo['page_type'] = $request['data']['seo']['page_type'];
        $seo['robots'] = $request['data']['seo']['robots'];
        $seo->save();
        return $this->sendResponse("no", "Page updated successfully");
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
