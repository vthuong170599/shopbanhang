<?php

namespace App\Helper;

class Date
{
    public static function getDayOfMoth(){
        $arrayDay = [];
        $month = date('m');
        $year = date('y');
        for($day = 1; $day<=31; $day++){
            $time = mktime('12',0,0,$month,$day,$year);
            if(date('m',$time)){
                $arrayDay[] = date('Y-m-d',$time);
            }
        }
        return $arrayDay;
    }
}
