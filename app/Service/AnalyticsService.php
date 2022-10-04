<?php

namespace App\Service;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AnalyticsService
{

    // fetch Period
    public static function fetchPeriod($tableName, $days): array
    {
        $operator   = '-';
        $percentage = '0%';
        $arrow      = 'ti-arrow-down';

        // get Period Day
        $obj = self::fetchPeriodDay($tableName, $days);

        // find percentage & arrow
        if($days != 'infinity') {
            $obj2 = self::fetchPeriodDay($tableName, $days);
            if($obj >= $obj2) { $operator = '+'; $arrow = 'ti-arrow-up'; }
            else { $operator = '-'; $arrow = 'ti-arrow-down'; }

            $diff = 0;
            if($obj > 0 && $obj2) { $diff = $obj / $obj2 * 100; }
            $percentage = $operator.''.$diff.'%';
        }

        return ['total' => $obj, 'percentage' => $percentage, 'arrow' => $arrow];

    }

    public static function fetchPeriodDay($tableName, $days): int
    {
        $obj = DB::table($tableName)->where('id','!=', 0);

        $date = 'created_at';
        if($tableName == 'visitors') {
            $date = 'at_date';
        }

        // Today & else = Yesterday, 28 Days, 90 Days , 180 Days
        if($days == 0) {
            $obj = $obj->whereDate($date, Carbon::now());
        } else if ($days != 0 && $days != 'infinity') {
            $obj = $obj->whereDate($date, '>=', Carbon::now()->subDay($days));
        }

        return $obj->count();
    }



    // fetch Countries
    public static function fetchContributors($tableName, $status, $from, $to): array
    {
        $contributors = $total = [];
        $obj = DB::table('authorables')->select('author_id')->where('model_type', $tableName);

        // if($from && $to){
        //     $from = date('Y-m-d', strtotime($from));
        //     $to   = date('Y-m-d', strtotime($to));
        //     $obj = $obj->whereBetween('created_at', [$from, $to]);
        // }

        $obj = $obj->whereNOTNULL('author_id')->groupBy('author_id')->get();

        foreach ($obj as $value) {
            $contributors[] = ' '.Contributor::getRow($value->author_id)->name.' ';
            $total[]        = ($status) ? self::totalContributorsAmount($tableName, $value->author_id) : 1;
        }

        $data = ['contributors' => $contributors, 'total'=>$total];
        return $data;
    }

    public static function totalContributorsAmount($tableName, $author_id)
    {
        $obj = DB::table('authorables')->where('model_type', $tableName);

        $obj = $obj->groupBy('author_id')->sum('amount');
        return $obj ?? 0;
    }

    public static function fetchCountries($tableName, $days)
    {
        $countries = $total = [];
        $obj = DB::table($tableName)->select('country');

        // Today   & else = Yesterday, 28 Days, 90 Days , 180 Days
        if($days == 0) {
            $obj = $obj->whereDate('at_date', Carbon::now());
        } else if ($days != 0 && $days != 'infinity') {
            $obj = $obj->whereDate('at_date', '>=', Carbon::now()->subDay($days));
        }

        $obj = $obj->whereNOTNULL('country')->groupBy('country')->paginate(5);

        foreach ($obj as $value) {
            $countries[] = $value->country;
            $total[] = self::totalCountryVisits($tableName, $value->country, $days);
        }

        $data = ['countries' => $countries, 'total'=>$total];
        return $data;
    }


    public static function totalCountryVisits($tableName, $country, $days)
    {
        $obj = DB::table($tableName);

        if($days == 0) {
            $obj = $obj->whereDate('at_date', Carbon::now());
        } else if ($days != 0 && $days != 'infinity') {
            $obj = $obj->whereDate('at_date', '>=', Carbon::now()->subDay($days));
        }

        $obj = $obj->where('country', $country)->groupBy('country')->count();
        return $obj ?? 0;
    }


    public static function lineChart($tableName, $type)
    {
        if($type == 'weekly') {
            return self::postViewsWeekly($tableName);
        } else if($type == 'monthly') {
            return self::postViewsMonthly($tableName);
        } else if ($type == 'quarter') {
            return self::postViewsQuarter($tableName);
        } else if ($type == 'yearly') {
            return self::postViewsYearly($tableName);
        }
    }

    public static function postViewsWeekly($tableName): array
    {
        $sun     = self::viewsPerWeek($tableName, '00');
        $mon     = self::viewsPerWeek($tableName, '01');
        $thu     = self::viewsPerWeek($tableName, '02');
        $wed     = self::viewsPerWeek($tableName, '03');
        $tue     = self::viewsPerWeek($tableName, '04');
        $fri     = self::viewsPerWeek($tableName, '05');
        $sat     = self::viewsPerWeek($tableName, '06');

        $series  = [$sun, $mon, $thu, $wed, $tue, $fri, $sat];
        $xaxis   = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursady', 'Friday', 'Saturday'];
        $data    = ['xaxis' => $xaxis, 'series'=>$series];
        return $data;
    }
    public static function viewsPerWeek($tableName, $day)
    {
        $obj = DB::table($tableName)
            ->whereRaw('WEEKDAY(created_at)='.$day)
            ->count();

        return $obj ?? [];
    }

    public static function postViewsMonthly($tableName)
    {
        $mo01     = self::viewsPerMonth($tableName, '01');
        $mo02     = self::viewsPerMonth($tableName, '02');
        $mo03     = self::viewsPerMonth($tableName, '03');
        $mo04     = self::viewsPerMonth($tableName, '04');
        $mo05     = self::viewsPerMonth($tableName, '05');
        $mo06     = self::viewsPerMonth($tableName, '06');
        $mo07     = self::viewsPerMonth($tableName, '07');
        $mo08     = self::viewsPerMonth($tableName, '08');
        $mo09     = self::viewsPerMonth($tableName, '09');
        $mo10     = self::viewsPerMonth($tableName, '10');
        $mo11     = self::viewsPerMonth($tableName, '11');
        $mo12     = self::viewsPerMonth($tableName, '12');

        $series   = [$mo01, $mo02, $mo03, $mo04, $mo05, $mo06, $mo07, $mo08, $mo09, $mo10, $mo11, $mo12];
        $xaxis    = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep','Oct','Nov','Dec'];
        $data     = ['xaxis' => $xaxis, 'series'=>$series];
        return $data;
    }

    public static function viewsPerMonth($tableName, $month)
    {
        $date = 'created_at';
        if($tableName == 'visitors') {
            $date = 'at_date';
        }

        $obj = DB::table($tableName)
            ->whereMonth($date, $month)
            ->count();

        return $obj ?? [];
    }


    public static function postViewsQuarter($tableName)
    {
        $quarter1   = self::viewsPerQuarter($tableName, ['01', '03']);
        $quarter2   = self::viewsPerQuarter($tableName, ['04', '06']);
        $quarter3   = self::viewsPerQuarter($tableName, ['07', '09']);
        $quarter4   = self::viewsPerQuarter($tableName, ['10', '12']);

        $series     = [$quarter1, $quarter2, $quarter3, $quarter4];
        $xaxis      = ['Jan - Mar', 'Apr - Jun', 'Jul - Sep', 'Oct - Dec'];
        $data       = ['xaxis' => $xaxis, 'series'=>$series];
        return $data;
    }
    public static function viewsPerQuarter($tableName, $quarter)
    {
        $date = 'created_at';
        if($tableName == 'visitors') {
            $date = 'at_date';
        }

        $obj = DB::table($tableName)
            ->whereBetween(DB::raw('MONTH(created_at)'), $quarter)
            ->whereYear($date, date('Y'))
            ->count();
        return $obj ?? [];
    }


    public static function postViewsYearly($tableName)
    {
        $prev_year    = date('Y', strtotime("-1 year"));
        $current_year = date('Y');
        $next1_year   = date('Y', strtotime("+1 year"));
        $next2_year   = date('Y', strtotime("+2 year"));
        $next3_year   = date('Y', strtotime("+3 year"));

        $series0      = self::viewPerYear($tableName, $prev_year);
        $series1      = self::viewPerYear($tableName, $current_year);
        $series2      = self::viewPerYear($tableName, $next1_year);
        $series3      = self::viewPerYear($tableName, $next2_year);
        $series4      = self::viewPerYear($tableName, $next3_year);

        $series       = [$series0, $series1, $series2, $series3, $series4];
        $xaxis        = [$prev_year, $current_year, $next1_year, $next2_year, $next3_year];
        $data         = ['xaxis' => $xaxis, 'series'=>$series];
        return $data;
    }
    public static function viewPerYear($tableName, $year)
    {
        $date = 'created_at';
        if($tableName == 'visitors') {
            $date = 'at_date';
        }

        $obj = DB::table($tableName)
            ->whereYear($date, $year)
            ->count();
        return $obj ?? [];
    }



    public static function lineChartRepo($tableName, $status, $from, $to)
    {
        $mo01     = self::perDateRepo($tableName, '01', $status, $from, $to);
        $mo02     = self::perDateRepo($tableName, '02', $status, $from, $to);
        $mo03     = self::perDateRepo($tableName, '03', $status, $from, $to);
        $mo04     = self::perDateRepo($tableName, '04', $status, $from, $to);
        $mo05     = self::perDateRepo($tableName, '05', $status, $from, $to);
        $mo06     = self::perDateRepo($tableName, '06', $status, $from, $to);
        $mo07     = self::perDateRepo($tableName, '07', $status, $from, $to);
        $mo08     = self::perDateRepo($tableName, '08', $status, $from, $to);
        $mo09     = self::perDateRepo($tableName, '09', $status, $from, $to);
        $mo10     = self::perDateRepo($tableName, '10', $status, $from, $to);
        $mo11     = self::perDateRepo($tableName, '11', $status, $from, $to);
        $mo12     = self::perDateRepo($tableName, '12', $status, $from, $to);

        $series   = [$mo01, $mo02, $mo03, $mo04, $mo05, $mo06, $mo07, $mo08, $mo09, $mo10, $mo11, $mo12];
        $xaxis    = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep','Oct','Nov','Dec'];
        $data     = ['xaxis' => $xaxis, 'series' => $series ?? []];
        return $data;
    }

    public static function perDateRepo($tableName, $month, $status, $from, $to)
    {
        if($status) {
            $obj = DB::table('carts')->where('model_type', $tableName)->whereMonth('created_at', $month);
        } else {
            $obj = DB::table($tableName)->whereMonth('created_at', $month);
        }

        if($from && $to){
            $from = date('Y-m-d', strtotime($from));
            $to   = date('Y-m-d', strtotime($to));
            $obj = $obj->whereBetween('created_at', [$from, $to]);
        }

        $obj = $obj->count();

        return $obj ?? [];
    }

}
