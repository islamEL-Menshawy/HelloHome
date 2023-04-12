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
            $page_attributes = Page::find(1);
            $attributes = array();
            foreach ($page_attributes->attributes as $attribute){
                $key = $attribute->title;
                $value = $attribute->is_image ? $attribute->image->image_path : $attribute->content;
                $attributes += [$key=>$value];
            }
            $data = [
                'types'     => $types,
                'compounds' => $compounds,
                'locations' => $locations,
                'slider'    => $slider,
                'page_attributes' => $page_attributes,
                'attributes' => $attributes

            ];
            return view('welcome', $data);
        }catch (\Exception $e){
            die(404);
        }

    }
    public function about(){
        $page_attributes = Page::find(2);
        $attributes = array();

        foreach ($page_attributes->attributes as $attribute){
            $key = $attribute->title;
            $value = $attribute->is_image ? $attribute->image->image_path : $attribute->content;
            $attributes += [$key=>$value];
        }
        $data = [
            'page_attributes' => $page_attributes,
            'attributes' => $attributes

        ];
        return view('about', $data);
    }
    public function contactUs(){
        $page_attributes = Page::find(4);
        $attributes = array();

        foreach ($page_attributes->attributes as $attribute){
            $key = $attribute->title;
            $value = $attribute->is_image ? $attribute->image->image_path : $attribute->content;
            $attributes += [$key=>$value];
        }
        $data = [
            'page_attributes' => $page_attributes,
            'attributes' => $attributes

        ];
        return view('contact-us', $data);
    }
    public function service(){
        $page_attributes = Page::find(3);
        $attributes = array();

        foreach ($page_attributes->attributes as $attribute){
            $key = $attribute->title;
            $value = $attribute->is_image ? $attribute->image->image_path : $attribute->content;
            $attributes += [$key=>$value];
        }
        $data = [
            'page_attributes' => $page_attributes,
            'attributes' => $attributes

        ];
        return view('service',$data);
    }

    public function news(){
        $news = News::paginate(10, ['*'], 'news');
        $data = [
            'news' => $news
        ];
        return view('news', $data);
    }

    public function view_news($local, $id){

        $news = News::findOrFail($id);
        $data = [
            'news' => $news
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

        $types = Type::where('isActive' , true)->get();
        $compounds = Compound::where('isActive' , true)->orderBy('order', 'ASC')->get();
        $locations = Location::where('isActive' , true)->get();
        $unites = $unites->get();
        $data = [
            'types'     => $types,
            'compounds' => $compounds,
            'locations' => $locations,
            'unites' => $unites
        ];
        return view('search', $data);
    }


    public function compound($locale, $compound){
        try{
            $compound = Compound::where('slug_en' , $compound)->first();
            $units = Unites::where('compound_id', $compound['id'])->orderBy('order', 'ASC')->get();
            if ($compound == null){
                abort(404);
            }
            $data = [
                'compound' => $compound,
                'units' => $units
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

        $data = [
            'types'     => $types,
            'compounds' => $compounds,
            'locations' => $locations
        ];
        return view('explore_homes', $data);
    }

    public function unit_details($locale, $compound, $unit_id){
        $unit = Unites::find($unit_id);
        $compound = Compound::where('slug_en', $compound)->first();
        if ($unit == null || $compound == null){
            abort(404);
        }
        if(empty($unit->description)){
            $description = [];
        }else{
            $data = explode('.', $unit->description );
            $description =array_slice($data, 0, count($data)-1);
        }
        if(empty($unit->description_left)){
            $description_left = [];
        }else{
            $data = explode('.', $unit->description_left );
            $description_left =array_slice($data, 0, count($data)-1);
        }
        $data = [
            'unit' => $unit,
            'compound' => $compound,
            'description' => $description,
            'description_left' => $description_left
        ];
        return view('unit', $data);
    }


}
