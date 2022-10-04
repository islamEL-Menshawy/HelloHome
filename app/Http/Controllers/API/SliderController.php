<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Resources\CompoundCollection;
use App\Http\Resources\SliderCollection;
use App\Models\Compound;
use App\Models\Images;
use App\Models\Slider;
use App\Service\API\FileService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SliderController extends BaseController
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
        $compounds = Slider::all();
        return $this->sendResponse(SliderCollection::collection($compounds),"");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'is_image'=>'required',
            'slide_image'=>'required'
        ]);
        $slug = Str::slug($request->first_text);
        $image_path = $this->fileService->uploadFile($request->file('slide_image'), $slug, "slider");
        $image = new Images();
        $image->image_path = $image_path;
        $image->save();

        $slider = new Slider();
        $slider->first_text = $request->first_text;
        $slider->second_text = $request->second_text;
        $slider->is_image = $request->is_image;
        $slider->image_id = $image->id;
        $slider->save();
        return $this->sendResponse(new SliderCollection($slider),"Slider created successfully") ;
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
            $saved = Slider::findOrFail($id);
            return $this->sendResponse(new SliderCollection($saved),'');
        }catch (\Exception $e){
            return $this->sendError('Slider not found', 404);
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
            'is_image'=>'required',
        ]);
        try {
            $slug = Str::slug($request->first_text);
            $slider = Slider::findOrFail($id);
            $slider->first_text = $request->first_text;
            $slider->second_text = $request->second_text;
            $slider->is_image = $request->is_image;
            $slider->save();
            $image = Images::findOrFail($slider->image_id);
            $newPath = $this->fileService->renameFileByPath($image->image_path, "/slider/". $slug);
            $image->image_path = $newPath;
            $image->save();
            return $this->sendResponse(new SliderCollection($slider),"Slider updated successfully") ;
        }catch (\Exception $exception ){
            return $this->sendError('Slider not found', 404);
        }
    }

    public function updateImage(Request $request,int $id){
        $request->validate([
            'slide_image'=>'required'
        ]);
        try {
            $slider = Slider::findOrFail($id);
            $slug = Str::slug($slider->first_text);
            $this->fileService->deleteFileByPath($slider->image->image_path);
            $path = $this->fileService->uploadFile($request->file('slide_image'), $slug, "slider");
            $image = Images::findOrFail($slider->image_id);
            $image->image_path = $path;
            $image->save();
            return $this->sendResponse("","Slider image updated successfully") ;
        }catch (\Exception $exception ){
            return $this->sendError('Slider not found', 404);
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
            $slider = Slider::findOrFail($id);
            $data = $slider;

            $slider->delete();

            if ($slider->image_id != null){
                $this->fileService->deleteFileByPath($slider->image->image_path);
                $image = Images::findOrFail($slider->image_id);
                $image->delete();
            }
            return $this->sendResponse("","slider deleted successfully") ;
        }catch (\Exception $exception ){
            return $this->sendError('slider not found', $exception->getMessage());
        }
    }
}
