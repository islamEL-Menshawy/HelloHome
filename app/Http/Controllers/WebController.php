<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use App\Models\Type;
use App\Models\Compound;
use App\Models\Location;

use App\Models\Unites;
use Illuminate\Http\Request;

class WebController extends Controller
{
    private $unites;
    public function __construct(Unites $unites)
    {
        $this->unites = $unites;
    }

    public function index(){
        $types = Type::where('isActive' , true)->get();
        $compounds = Compound::where('isActive' , true)->get();
        $locations = Location::where('isActive' , true)->get();
        $slider = Slider::where('is_active', true)->get();
        $data = [
            'types'     => $types,
            'compounds' => $compounds,
            'locations' => $locations,
            'slider'    => $slider
        ];
        return view('welcome', $data);
    }
    public function about(){
        return view('about');
    }
    public function contactUs(){
        return view('contact-us');
    }
    public function service(){
        return view('service');
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
        $compounds = Compound::where('isActive' , true)->get();
        $locations = Location::where('isActive' , true)->get();
        $unites = $unites->get();
        $data = [
            'types'     => $types,
            'compounds' => $compounds,
            'locations' => $locations,
            'unites' => $unites
        ];



        return view('search', $data);
//        return $unites;
    }


    public function compound($compound){
        try{
            $compound = Compound::where('slug_en' , $compound)->first();
            if ($compound == null){
                abort(404);
            }
            $data = [
                'compound' => $compound
            ];
            return view('compound', $data);
        }catch (\Exception $ex){
            abort(404);
        }
    }

    public function explore_homes(){
        $types = Type::where('isActive' , true)->get();
        $compounds = Compound::where('isActive' , true)->get();
        $locations = Location::where('isActive' , true)->get();

        $data = [
            'types'     => $types,
            'compounds' => $compounds,
            'locations' => $locations
        ];
        return view('explore_homes', $data);
    }

    public function unit_details($compound, $unit_id){
        $unit = Unites::find($unit_id);
        $compound = Compound::where('slug_en', $compound)->first();
        if ($unit == null || $compound == null){
            abort(404);
        }
        $data = [
            'unit' => $unit,
            'compound' => $compound
        ];
        return view('unit', $data);
    }


}
