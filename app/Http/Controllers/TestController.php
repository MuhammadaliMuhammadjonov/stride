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

    public function strStr($haystack = 'saadbutsad', $needle = 'saad' ) {
        
        $strs = str_split($haystack);
        $needleArr = str_split($needle);

        $str = '';
        $index = '';
        foreach( $strs as $key1 => $value ){

            foreach($needleArr as $key => $value2){

                if ($value == $value2) {
                    # code...
                }

                if ($needle[strlen($str)] == $value) {
                    $str = $str.$value;
                    if ($key == 0) {
                        echo $key1.'-'.$key.'/';
                        $index = $key1;
                    }
                    break;
                }else{
                    $str = '';
                    $index = -1;
                }

            }


            if ($str == $needle) {
                return $index;
            }

        }
        return -1;

    }
}
