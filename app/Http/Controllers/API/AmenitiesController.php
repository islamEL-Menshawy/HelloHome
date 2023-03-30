<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\BaseController;
use App\Http\Resources\AmenitiesCollection;
use App\Models\Amenitie;
use App\Models\Images;
use App\Service\API\FileService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AmenitiesController extends BaseController
{
    private $MODEL_NAME = "amenities";
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
        $Amenities = Amenitie::all();
        return $this->sendResponse(AmenitiesCollection::collection($Amenities),"");
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'title_en'=>'required|string|unique:amenities',
            'title_ar'=>'required|string|unique:amenities',
            'amenity_image'=>'required|file'
        ]);
        $slug = Str::slug($request->title_en);
        $image_path = $this->fileService->uploadFile($request->file('amenity_image'), $slug, $this->MODEL_NAME);
        $image = new Images();
        $image->image_path = $image_path;
        $image->save();
        $amenity = new Amenitie();
        $amenity->title_ar = $request->title_ar;
        $amenity->title_en = $request->title_en;
        $amenity->slug_ar = Str::slug($request->title_ar);
        $amenity->slug_en = $slug;
        $amenity->image_id = $image->id;
        $amenity->save();
        return $this->sendResponse(new AmenitiesCollection($amenity),"Amenity created successfully") ;
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
            $saved = Amenitie::findOrFail($id);
            return $this->sendResponse(new AmenitiesCollection($saved),'');
        }catch (\Exception $e){
            return $this->sendError('Amenity not found', 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'title_en'=>'required|string',
            'title_ar'=>'required|string',
        ]);
        try {
            $slug = Str::slug($request->title_en);
            $amenitie = Amenitie::findOrFail($id);
            $amenitie->title_en = $request->title_en;
            $amenitie->title_ar = $request->title_ar;
            $amenitie->save();
            $image = Images::findOrFail($amenitie->image_id);
            $newPath = $this->fileService->renameFileByPath($image->image_path, "/amenities/". $slug);
            $image->image_path = $newPath;
            $image->save();
            return $this->sendResponse(new AmenitiesCollection($amenitie),"Amenity updated successfully") ;
        }catch (\Exception $exception ){
            return $this->sendError('Amenity not found', 404);
        }
    }

    public function updateImage(Request $request,int $id){
        $request->validate([
            'amenity_image'=>'required'
        ]);
        try {
            $amenity = Amenitie::findOrFail($id);
            $slug = Str::slug($amenity->title_en);
            $this->fileService->deleteFileByPath($amenity->image->image_path);
            $path = $this->fileService->uploadFile($request->file('amenity_image'), $slug, $this->MODEL_NAME);
            $image = Images::findOrFail($amenity->image_id);
            $image->image_path = $path;
            $image->save();
            return $this->sendResponse("","Amenity image updated successfully") ;
        }catch (\Exception $exception ){
            return $this->sendError('Amenity not found', $exception->getMessage());
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
            $amenity = Amenitie::findOrFail($id);
            $data = $amenity;

            $amenity->delete();

            if ($data->image_id != null){
                $this->fileService->deleteFileByPath($amenity->image->image_path);
                $image = Images::findOrFail($amenity->image_id);
                $image->delete();
            }

            return $this->sendResponse("","Amenity deleted successfully") ;
        }catch (\Exception $exception ){
            return $this->sendError('Amenity not found', $exception->getMessage());
        }
    }
}
