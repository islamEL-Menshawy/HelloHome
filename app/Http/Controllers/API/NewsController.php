<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\BaseController;
use App\Models\Images;
use App\Models\News;
use App\Service\API\FileService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\JsonResponse;

class NewsController extends BaseController
{

    private $fileService;
    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return News[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function index()
    {
        return News::all();
    }

    public function show(int $id):JsonResponse
    {
        try {
            $savedLocation = News::findOrFail($id);
            return $this->sendResponse($savedLocation,'');
        }catch (\Exception $e){
            return $this->sendError('News not found', 404);
        }

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_en' => 'required',
            'title_ar' => 'required',
            'author' => 'required',
            'image' => 'required|file',
            'publish_date' => 'required',
            'content_en' => 'required',
            'content_ar' => 'required'
        ]);
        $slug = Str::slug($request->title_en);
        $image_path = $this->fileService->uploadFile($request->file('image'), $slug, "news");
        $image = new Images();
        $image->image_path = $image_path;
        $image->save();

        $news = new News();
        $news->title_en = $request->title_en;
        $news->title_ar = $request->title_ar;
        $news->author = $request->author;
        $news->image_id = $image->id;
        $news->publish_date = $request->publish_date;
        $news->slug_en = $slug;
        $news->content_en = $request->content_en;
        $news->content_ar = $request->content_ar;
        $news->save();
        return $this->sendResponse([],"News created successfully") ;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title_en' => 'required',
            'title_ar' => 'required',
            'author' => 'required',
            'publish_date' => 'required',
            'content_en' => 'required',
            'content_ar' => 'required'
        ]);
        $slug = Str::slug($request->title_en);
        $news = News::find($id);
        $news->title_en = $request->title_en;
        $news->title_ar = $request->title_ar;
        $news->author = $request->author;
        $news->publish_date = $request->publish_date;
        $news->slug_en = $slug;
        $news->content_en = $request->content_en;
        $news->content_ar = $request->content_ar;
        $news->save();
        return $this->sendResponse([],"News created successfully") ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::find($id)->delete();
    }
}
