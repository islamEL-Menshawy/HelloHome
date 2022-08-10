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
            'video_path'=>'required',
            'location'=>'required|string',
            'compound_id'=>'required|numeric',
            'type_id'=>'required|numeric',
            'location_id'=>'required|numeric'
        ]);
        $coordinates = $this->helperService->getCoordinates($request->location);
        if ($request->is_youtube){
            $video_path = $this->helperService->getVideoKey($request->video_path);
        }else{
            $video_path = $this->fileService->uploadFile($request->video_path, 'unit-video'.date('YmdHis'), $this->MODEL_NAME);
        }
        $unit = new Unites();
        $unit->bed_number = $request->bed_number;
        $unit->bathroom_number = $request->bathroom_number;
        $unit->area = $request->area;
        $unit->price = $request->price;
        $unit->is_youtube = $request->is_youtube;
        $unit->video_path = $video_path;
        $unit->location_lat = $coordinates[0]['latitude'];
        $unit->location_log = $coordinates[0]['longitude'];
        $unit->compound_id = $request->compound_id;
        $unit->type_id = $request->type_id;
        $unit->location_id = $request->location_id;
        $unit->save();
        $unit->amenities()->attach($request->aminites);

        $paths = $this->fileService->uploadMultiFiles($request->images, "unit_num".$unit->id,$this->MODEL_NAME);
        $imageList = array();
        foreach ($paths as $path){
            $image = new Images();
            $image->image_path = $path;
            $image->save();
            $imageList[] = $image->id;
        }
        $unit->images()->attach($imageList);
        return $this->sendResponse(new UnitsCollection($unit) ,'unite created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd($this->helperService->getVideoKey("https://www.youtube.com/watch?v=eWpjGpGb5tY&pbjreload=102"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
