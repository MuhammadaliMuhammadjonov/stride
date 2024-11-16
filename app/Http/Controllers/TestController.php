<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function twoSum($target = 9) {
        $arr = [3 , 6 , 7 , 4];
        $result = 0;
        $indexs = -1;
        // array example uchun [3 , 6 , 7 , 4]
        foreach ($arr as $value) {
            $result += $value;
            $indexs += 1;
            if($result === $target) {
                break;
            } 
        }

        
       return range(0 , $indexs);
    }
}
