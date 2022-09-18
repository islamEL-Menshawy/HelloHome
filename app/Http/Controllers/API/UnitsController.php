<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\BaseController;
use App\Http\Resources\UnitsCollection;
use App\Models\Images;
use App\Models\Unites;
use App\Service\API\FileService;
use App\Service\HelperService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use PHPUnit\Exception;

class UnitsController extends BaseController
{
    private $helperService;
    private $fileService;
    private $MODEL_NAME = "units";
    public function __construct(HelperService $helperService,FileService $fileService)
    {
        $this->helperService = $helperService;
        $this->fileService = $fileService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        $unites = Unites::all();
        return $this->sendResponse(UnitsCollection::collection($unites),"");
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {

        $request->validate([
            'bed_number'=>'required|numeric',
            'bathroom_number'=>'required|numeric',
            'area'=>'required|numeric',
            'price'=>'required|numeric',
            'is_youtube'=>'required',
            'video_path'=>"required",
            'location'=>"required|string|regex:/@(\-?[0-9]+\.[0-9]+),(\-?[0-9]+\.[0-9]+)/",
            'compound_id'=>'required|numeric',
            'type_id'=>'required|numeric',
            'location_id'=>'required|numeric'
        ]);

        if ($request->is_youtube){
            $request->validate([
                'video_path'=>"string"
            ]);
        }else{
            $request->validate([
                'video_path'=>"max:10000"
            ]);
        }

        $coordinates = $this->helperService->getCoordinates($request->location);
        if ($request->is_youtube){
            $video_path = $this->helperService->getVideoKey($request->video_path);
        }else{
            $video_path = $this->fileService->uploadFile($request->file('video_path'), 'unit-video'.date('YmdHis'), $this->MODEL_NAME);
        }
        $unit = new Unites();
        $unit->bed_number = $request->bed_number;
        $unit->bathroom_number = $request->bathroom_number;
        $unit->area = $request->area;
        $unit->price = $request->price;
        $unit->location_link = $request->location;
        $unit->video_link = $request->video_path;
        $unit->is_youtube = $request->is_youtube;
        $unit->video_path = $video_path;
        $unit->location_lat = $coordinates[0]['latitude'];
        $unit->location_log = $coordinates[0]['longitude'];
        $unit->compound_id = $request->compound_id;
        $unit->type_id = $request->type_id;
        $unit->location_id = $request->location_id;
        $unit->save();
        if ($request->aminites){
            $unit->amenities()->attach($request->aminites);
        }
        if ($request->images){
            $paths = $this->fileService->uploadMultiFiles($request->images, "unit_num".$unit->id,$this->MODEL_NAME);
            $imageList = array();
            foreach ($paths as $path){
                $image = new Images();
                $image->image_path = $path;
                $image->save();
                $imageList[] = $image->id;
            }
            $unit->images()->attach($imageList);
        }
        return $this->sendResponse(new UnitsCollection($unit) ,'unite created');
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
            $saved = Unites::findOrFail($id);
            return $this->sendResponse(new UnitsCollection($saved),'');
        }catch (\Exception $e){
            return $this->sendError('Unit not found', $e->getMessage());
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return JsonResponse
     */
    public function update(Request $request,int $id):JsonResponse
    {
        $request->validate([
            'bed_number'=>'required|numeric',
            'bathroom_number'=>'required|numeric',
            'area'=>'required|numeric',
            'price'=>'required|numeric',
            'is_youtube'=>'required',
            'compound_id'=>'required|numeric',
            'type_id'=>'required|numeric',
            'location_id'=>'required|numeric'
        ]);
        try {
            $unit = Unites::findOrFail($id);
            $coordinates = $this->helperService->getCoordinates($request->location);
            $unit->location_lat = $coordinates[0]['latitude'];
            $unit->location_log = $coordinates[0]['longitude'];
            if ($request->is_youtube){
                $video_path = $this->helperService->getVideoKey($request->video_path);
                $unit->video_path = $video_path;
            }else{
                $video_path = $this->fileService->uploadFile($request->video_path, 'unit-video'.date('YmdHis'), $this->MODEL_NAME);
                $unit->video_path = $video_path;
            }
            $unit->bed_number = $request->bed_number;
            $unit->bathroom_number = $request->bathroom_number;
            $unit->area = $request->area;
            $unit->price = $request->price;
            $unit->is_youtube = $request->is_youtube;
            $unit->location_link = $request->location;
            $unit->video_link = $request->video_path;
            $unit->compound_id = $request->compound_id;
            $unit->type_id = $request->type_id;
            $unit->location_id = $request->location_id;
            $unit->save();
            $unit->amenities()->detach();
            $unit->amenities()->attach($request->aminites);
            return $this->sendResponse(new UnitsCollection($unit) ,'unite created');

        }catch (\Exception $e){
            return $this->sendError('Unit not found', $e->getMessage());
        }

    }

    public function updateImage(Request $request, int $id){
        try{
            $unit = Unites::findOrFail($id);
            $paths = $this->fileService->uploadMultiFiles($request->images, "unit_num".$unit->id,$this->MODEL_NAME);
            $imageList = array();
            foreach ($paths as $path){
                $image = new Images();
                $image->image_path = $path;
                $image->save();
                $imageList[] = $image->id;
            }
            $unit->images()->attach($imageList);
            return $this->sendResponse(new UnitsCollection($unit) ,'Image Uploaded');

        }catch (\Exception $e){

        }
    }

    public function destroyImage(Request $request){
        try {
            $unite = Unites::findOrFail($request->unit_id);
            $image = Images::findOrFail($request->image_id);
            $this->fileService->deleteFileByPath($image->image_path);
            $unite->images()->detach($image);
            $image->delete();
        }catch (Exception $ex){
            $this->sendError($ex->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function destroy(int $id):JsonResponse
    {
        try {
            $saved = Unites::findOrFail($id);
            $saved->amenities()->detach();
            $images = $saved->images;
            if (!$saved->is_youtube){
                $this->fileService->deleteFileByPath($saved->video_path);
            }
            $saved->images()->detach();
            foreach ($images as $image){
                $this->fileService->deleteFileByPath($image->image_path);
                $savedImage = Images::findOrFail($image->id);
                $savedImage->delete();
            }
            $saved->delete();
            return $this->sendResponse('','Unit deleted successfully');
        }catch (\Exception $e){
            return $this->sendError('Unit not found', $e->getMessage());
        }
    }
}
