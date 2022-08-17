<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\BaseController;
use App\Models\Location;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LocationController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->sendResponse(Location::all(), "");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return JsonResponse
     */
    public function store(Request $request):JsonResponse
    {
        $request->validate([
            'title_en' => 'required|unique:locations'
        ]);
        $location = new Location();
        $location->title_en = $request->title_en;
        $location->slug_en = Str::slug($request->title_en);
        $location->save();
        return $this->sendResponse($location, "Location created");
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id):JsonResponse
    {
        try {
            $savedLocation = Location::findOrFail($id);
            return $this->sendResponse($savedLocation,'');
        }catch (\Exception $e){
            return $this->sendError('Location not found', 404);
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
            'title_en' => 'required'
        ]);
        try {
            $savedLocation = Location::findOrFail($id);
            $savedLocation->title_en = $request->title_en;
            $savedLocation->slug_en = Str::slug($request->title_en);
            $savedLocation->save();
            return $this->sendResponse($savedLocation,'Location updated successfully');
        }catch (\Exception $e){
            return $this->sendError('Location not found', 404);
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
            $savedLocation = Location::findOrFail($id);
            $savedLocation->delete();
            return $this->sendResponse('','Location deleted');
        }catch (\Exception $e){
            return $this->sendError('Location not found', 404);
        }
    }
}
