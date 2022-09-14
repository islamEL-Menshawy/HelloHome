<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\BaseController;
use App\Http\Resources\ContentCollection;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Attribut;

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
    public function updateContent(Request $request,$page){
        foreach ($request->data as $key => $value){
            $attribute = Attribut::where('title' , $key)->first();
            $attribute->content = $value;
        }
    }

}
