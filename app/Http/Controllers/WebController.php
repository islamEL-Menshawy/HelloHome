<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Models\Slider;
use App\Models\Type;
use App\Models\Compound;
use App\Models\Location;
use App\Models\Page;

use App\Models\Unites;
use App\Models\Vistor;
use Illuminate\Http\Request;

class WebController extends Controller
{
    private $unites;
    public function __construct(Unites $unites)
    {
        $this->unites = $unites;
    }

    public function index(){
        try{
            Vistor::saveVisitor();
            $types = Type::where('isActive' , true)->get();
            $compounds = Compound::where('isActive' , true)->orderBy('order', 'ASC')->get();
            $locations = Location::where('isActive' , true)->get();
            $slider = Slider::where('is_active', true)->get();
            $page_attributes = Page::with('seo')->find(1);
            $attributes = array();
            foreach ($page_attributes->attributes as $attribute){
                $key = $attribute->title;
                $value = $attribute->is_image ? $attribute->image->image_path : $attribute->content;
                $attributes += [$key=>$value];
//                if ($attribute->is_image){
//                    $attributes += [
//                        $key . "_alter_en" => $attribute->image->alter_en,
//                        $key . "_alter_ar" => $attribute->image->alter_ar
//                    ];
//                }
            }
            $data = [
                'types'     => $types,
                'compounds' => $compounds,
                'locations' => $locations,
                'slider'    => $slider,
                'page_attributes' => $page_attributes,
                'attributes' => $attributes,
                'seo' => $page_attributes['seo']

            ];
            return view('welcome', $data);
        }catch (\Exception $e){
            die(404);
        }

    }
    public function about(){
        $page_attributes = Page::with('seo')->find(2);
        $attributes = array();

        foreach ($page_attributes->attributes as $attribute){
            $key = $attribute->title;
            $value = $attribute->is_image ? $attribute->image->image_path : $attribute->content;
            $attributes += [$key=>$value];
//            if ($attribute->is_image){
//                $attributes += [
//                    $key . "_alter_en" => $attribute->image->alter_en,
//                    $key . "_alter_ar" => $attribute->image->alter_ar
//                ];
//            }
        }
        $data = [
            'page_attributes' => $page_attributes,
            'attributes' => $attributes,
            'seo' => $page_attributes['seo']

        ];
        return view('about', $data);
    }
    public function contactUs(){
        $page_attributes = Page::with('seo')->find(4);
        $attributes = array();

        foreach ($page_attributes->attributes as $attribute){
            $key = $attribute->title;
            $value = $attribute->is_image ? $attribute->image->image_path : $attribute->content;
            $attributes += [$key=>$value];
//            if ($attribute->is_image){
//                $attributes += [
//                    $key . "_alter_en" => $attribute->image->alter_en,
//                    $key . "_alter_ar" => $attribute->image->alter_ar
//                ];
//            }
        }
        $data = [
            'page_attributes' => $page_attributes,
            'attributes' => $attributes,
            'seo' => $page_attributes['seo']
        ];
        return view('contact-us', $data);
    }
    public function service(){
        $page_attributes = Page::with('seo')->find(3);
        $attributes = array();
        foreach ($page_attributes->attributes as $attribute){
            $key = $attribute->title;
            $value = $attribute->is_image ? $attribute->image->image_path : $attribute->content;
            $attributes += [$key=>$value];
//            if ($attribute->is_image){
//                $attributes += [
//                    $key . "_alter_en" => $attribute->image->alter_en,
//                    $key . "_alter_ar" => $attribute->image->alter_ar
//                ];
//            }
        }
        $data = [
            'page_attributes' => $page_attributes,
            'attributes' => $attributes,
            'seo' => $page_attributes['seo']
        ];
        return view('service',$data);
    }

    public function news(){
        $page_attributes = Page::query()->where("page_title", "news")->with('seo')->first();
        $news = News::paginate(10, ['*'], 'news');
        $data = [
            'news' => $news,
            'seo' => $page_attributes['seo']
        ];
        return view('news', $data);
    }

    public function view_news($local, $id){

        $news = News::with('seo')->findOrFail($id);
        $data = [
            'news' => $news,
            'seo' => $news['seo']
        ];
        return view('view-news', $data);
    }

    public function search(Request $request){
        $unites = Unites::select('*');
        if ($request->type != 'all'){
            $type = Type::where('slug_en', $request->type)->first();
            $unites = $unites->where('type_id', $type->id);
        }

        if ($request->compound != 'all'){
            $compound = Compound::where('slug_en', $request->compound)->first();
            $unites = $unites->where('compound_id', $compound->id);
        }
        if ($request->location != 'all'){
            $location = Location::where('slug_en', $request->location)->first();
            $unites = $unites->where('location_id', $location->id);
        }


        $page_attributes = Page::query()->where("page_title", "search")->with('seo')->first();
        $types = Type::where('isActive' , true)->get();
        $compounds = Compound::where('isActive' , true)->orderBy('order', 'ASC')->get();
        $locations = Location::where('isActive' , true)->get();
        $unites = $unites->get();
        $data = [
            'types'     => $types,
            'compounds' => $compounds,
            'locations' => $locations,
            'unites' => $unites,
            'seo' => $page_attributes['seo']
        ];
        return view('search', $data);
    }


    public function compound($locale, $compound){
        try{
            $compound = Compound::where('slug_en' , $compound)->with('seo')->first();
            $units = Unites::where('compound_id', $compound['id'])->orderBy('order', 'ASC')->get();
            if ($compound == null){
                abort(404);
            }
            $data = [
                'compound' => $compound,
                'units' => $units,
                'seo' => $compound['seo']
            ];
            return view('compound', $data);
        }catch (\Exception $ex){
            return $ex;
        }
    }

    public function explore_homes(){
        $types = Type::where('isActive' , true)->get();
        $compounds = Compound::where('isActive' , true)->orderBy('order', 'ASC')->get();
        $locations = Location::where('isActive' , true)->get();
        $seo = Page::query()->where("page_title", "explore-homes")->with("seo")->first();
        $data = [
            'types'     => $types,
            'compounds' => $compounds,
            'locations' => $locations,
            'seo' => $seo
        ];
        return view('explore_homes', $data);
    }

    public function unit_details($locale, $compound, $unit_id){
        $unit = Unites::with('seo')->find($unit_id);
        $compound = Compound::where('slug_en', $compound)->first();
        if ($unit == null || $compound == null){
            abort(404);
        }
        $data = [
            'unit' => $unit,
            'seo' => $unit['seo'],
            'compound' => $compound
        ];
        return view('unit', $data);
    }


}
