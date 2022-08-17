<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\BaseController;
use App\Models\Type;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;


class TypeController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->sendResponse(Type::all(), "");
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
            'title_en' => 'required|unique:types',
        ]);
        $type = new Type();
        $type->title_en = $request->title_en;
        $type->slug_en = Str::slug($request->title_en);
        $type->save();
        return $this->sendResponse($type, "type created");
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
            $savedType = Type::findOrFail($id);
            return $this->sendResponse($savedType,'');
        }catch (\Exception $e){
            return $this->sendError('type not found', 404);
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
            $savedType = Type::findOrFail($id);
            $savedType->title_en = $request->title_en;
            $savedType->slug_en = Str::slug($request->title_en);
            $savedType->save();
            return $this->sendResponse($savedType,'Type updated successfully');
        }catch (\Exception $e){
            return $this->sendError('Type not found', 404);
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
            $savedType = Type::findOrFail($id);
            $savedType->delete();
            return $this->sendResponse('','type deleted');
        }catch (\Exception $e){
            return $this->sendError('type not found', 404);
        }
    }
}
