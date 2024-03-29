<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\BaseController;
use App\Http\Resources\CompoundCollection;
use App\Models\Compound;
use App\Models\Images;
use App\Models\SEO;
use App\Service\API\FileService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CompoundController extends BaseController
{
    private $fileService;
    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $compounds = Compound::all();
        return $this->sendResponse(CompoundCollection::collection($compounds),"");
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'title_en'=>'required|string|unique:compounds',
            'title_ar'=>'required|string|unique:compounds',
            'description_en'=>'required|string',
            'description_ar'=>'required|string',
            'website'=>'required|url',
            'compound_image'=>'required',
            'location' => 'required|string|regex:/@(\-?[0-9]+\.[0-9]+),(\-?[0-9]+\.[0-9]+)/'
        ]);
        $slug = Str::slug($request->title_en);
        $image_path = $this->fileService->uploadFile($request->file('compound_image'), $slug, "compound");
        $image = new Images();
        $image->image_path = $image_path;
        $image->save();
        $compound = new Compound();
        $compound->title_ar = $request->title_ar;
        $compound->title_en = $request->title_en;
        $compound->slug_ar = Str::slug($request->title_ar);
        $compound->slug_en = $slug;
        $compound->description_en = $request->description_en;
        $compound->description_ar = $request->description_ar;
        $compound->website = $request->website;
        $compound->order = $request->order;
        $compound->location = $request->location;
        $compound->image_id = $image->id;
        $compound->save();
//        $seo = new SEO();
//        $seo['compound_id'] = $compound['id'];
//        $seo['keywords_en'] = $request['seo']['keywords_en'];
//        $seo['keywords_ar'] = $request['seo']['keywords_ar'];
//        $seo['description_en'] = $request['seo']['description_en'];
//        $seo['description_ar'] = $request['seo']['description_ar'];
//        $seo['page_type'] = $request['seo']['page_type'];
//        $seo['robots'] = $request['seo']['robots'];
//        $seo->save();
        return $this->sendResponse(new CompoundCollection($compound),"compound created successfully") ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function show(int $id):JsonResponse
    {
        try {
            $saved = Compound::with('seo')->findOrFail($id);
            return $this->sendResponse(new CompoundCollection($saved),'');
        }catch (\Exception $e){
            return $this->sendError('Compound not found', 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return JsonResponse
     */
    public function update(Request $request,int $id)
    {
        $request->validate([
            'title_en'=>'required|string',
            'title_ar'=>'required|string',
            'description_en'=>'required|string',
            'description_ar'=>'required|string',
            'website'=>'required|url',
            'location' => 'required|string|regex:/@(\-?[0-9]+\.[0-9]+),(\-?[0-9]+\.[0-9]+)/'
        ]);
        try {
            $slug = Str::slug($request->title_en);
            $compound = Compound::findOrFail($id);
            $compound->title_ar = $request->title_ar;
            $compound->title_en = $request->title_en;
            $compound->slug_en = $slug;
            $compound->slug_ar = Str::slug($request->title_ar);
            $compound->description_en = $request->description_en;
            $compound->description_ar = $request->description_ar;
            $compound->website = $request->website;
            $compound->order = $request->order;
            $compound->location = $request->location;
            $compound->save();
            $image = Images::findOrFail($compound->image_id);
            $newPath = $this->fileService->renameFileByPath($image->image_path, "/compound/". $compound->slug_en);
            $image->image_path = $newPath;
            $image->save();

            $seo = SEO::where("compound_id", $compound['id'])->first();
            $seo['keywords_en'] = "";
            $seo['keywords_ar'] = "";
            $seo['description_en'] = "";
            $seo['description_ar'] = "";
            $seo['page_type'] = "";
            $seo['robots'] = "";
            $seo->save();

            return $this->sendResponse(new CompoundCollection($compound),"compound created successfully") ;
        }catch (\Exception $exception ){
            return $this->sendError('Compound not found', 404);
        }
    }

    public function updateImage(Request $request,int $id){
        $request->validate([
            'compound_image'=>'required'
        ]);
        try {
            $compound = Compound::findOrFail($id);
            $this->fileService->deleteFileByPath($compound->image->image_path);
            $path = $this->fileService->uploadFile($request->file('compound_image'), $compound->slug_en, "compound");
            $image = Images::findOrFail($compound->image_id);
            $image->image_path = $path;
            $image->save();
            return $this->sendResponse("","compound image updated successfully") ;
        }catch (\Exception $exception ){
            return $this->sendError('Compound not found', 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function destroy(int $id)
    {
        try {
            $compound = Compound::findOrFail($id);
            $data = $compound;

            $compound->delete();

            if ($data->image_id != null){
                $this->fileService->deleteFileByPath($compound->image->image_path);
                $image = Images::findOrFail($compound->image_id);
                $image->delete();
            }
            return $this->sendResponse("","compound deleted successfully") ;
        }catch (\Exception $exception ){
            return $this->sendError('Compound not found', $exception->getMessage());
        }
    }
}
