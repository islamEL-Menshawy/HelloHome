<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\BaseController;
use App\Models\Compound;
use App\Models\ContactUs;
use App\Models\Location;
use App\Models\Type;
use App\Models\Unites;
use App\Models\Vistor;

class StatisticsController extends BaseController
{
    public function getStatisticsByCountry(){
        $collection = Vistor::groupBy('country')
            ->selectRaw('count(*) as total, country')
            ->get();
        $entities = [];
        $count = [];
        foreach ($collection as $item){
            $entities[] = $item['country']. " ( ".$item['total']." )";
            $count[] = $item['total'];
        }
        return [
            "entity" => $entities,
            "count" => $count
        ];
    }

    public function  getEntityStatistics(){
        $units = Unites::count();
        $compound = Compound::count();
        $locations = Location::count();
        $inbox = ContactUs::count();
        $visitors = Vistor::count();
        $types = Type::count();
        $object = [
            'units' => $units,
            'compound' => $compound,
            'locations' => $locations,
            'visitors' => $visitors,
            'types' => $types,
            'inbox' => $inbox
        ];
        return $this->sendResponse($object, "");
    }

    public function postViewsMonthly()
    {
        $year = request('year');
        $mo01     = self::viewsPerMonth( '01',$year);
        $mo02     = self::viewsPerMonth( '02',$year);
        $mo03     = self::viewsPerMonth('03',$year);
        $mo04     = self::viewsPerMonth('04',$year);
        $mo05     = self::viewsPerMonth('05',$year);
        $mo06     = self::viewsPerMonth('06',$year);
        $mo07     = self::viewsPerMonth('07',$year);
        $mo08     = self::viewsPerMonth('08',$year);
        $mo09     = self::viewsPerMonth('09',$year);
        $mo10     = self::viewsPerMonth('10',$year);
        $mo11     = self::viewsPerMonth('11',$year);
        $mo12     = self::viewsPerMonth('12',$year);

        $series   = [$mo01, $mo02, $mo03, $mo04, $mo05, $mo06, $mo07, $mo08, $mo09, $mo10, $mo11, $mo12];
        $xaxis    = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep','Oct','Nov','Dec'];
        $data     = ['entity' => $xaxis, 'count'=>$series];
        return $data;
    }

    public static function viewsPerMonth($month, $year)
    {
        $date = 'at_date';
        $obj = Vistor::query()->
        whereMonth($date, $month)->whereYear("at_date",$year)
            ->count();
        return $obj ?? [];
    }

}
