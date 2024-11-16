<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    /*
        Example 1:

        Input: strs = ["flower","flow","flight"]
        Output: "fl"

        Example 2:

        Input: strs = ["dog","racecar","car"]
        Output: ""
        Explanation: There is no common prefix among the input strings.

        ["flower","flow","flight"]
        ["aa","ab", "abd"]
    */

    public function longestCommonPrefix( $strs = ["telest","test"]) {
            
            $bufer = '';
            

            if (count($strs) == 1) {
                return $strs[0];
            }

            $sum = 0;
            $lang = 0;
            $one = false;

            foreach ($strs as $value) {

                if (strlen($value) == 1 || $one == null) {
                    $one = $value;

                }
            }

            // return $one;

            foreach ($strs as $value) {

                if (strlen($value) == 1) {
                    $lang +=1;
                }else if($value == ''){
                    return $value;
                }
                if ($strs[0] == $value) {
                    $sum+=1;
                }
            }
            if ($sum == count($strs)) {
                return $strs[0];
            }

            if ($lang == count($strs)) {
                return '';
            }

            foreach ($strs as $key => $value) {

                for ($i=1; $i <= strlen($value); $i++) {
                    // flo , $i = 0

                    $str = substr($value, 0, $i);
                    $result = true;


                    foreach ($strs as $index => $string) {
                        $str2 = substr($string, 0, $i); // fli
                        if ($str != $str2) {
                            // echo $str. '-'. $str2;
                            $result = false;
                            // return '-'. $bufer;
                            // return 'ichkari';

                            if ($bufer != '') {
                                if( $one != null){
                                    return $one;
                                }
                            }
                            return $bufer;
                        }
                    }

                    if ($result == true) {
                        $bufer = $bufer.$value[$i-1]; 
                    }
                    
                }

            
            }

          

            if ($bufer != '') {
                if( $one != null){
                    return $one;
                }
            }
            return $bufer;

    }
    

    /*
    Example 1:

        Input: s = "Hello World"
        Output: 5
        Explanation: The last word is "World" with length 5.
        Example 2:

        Input: s = "   fly me   to   the moon  "
        Output: 4
        Explanation: The last word is "moon" with length 4.
        Example 3:

        Input: s = "luffy is still joyboy"
        Output: 6
        Explanation: The last word is "joyboy" with length 6.
    */

    public function lengthOfLastWord($s) {
        
    }
}
