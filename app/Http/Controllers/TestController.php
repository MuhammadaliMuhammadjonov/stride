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
    */



    public function longestCommonPrefix($strs = ["flower","flow","flight" , "test"]) {  
        // foreach ($strs as $item) {
        //     return $item == 'flower';
        // };

        

        // $result = in_array('flower' , $strs);

        // return $result;
        // return $even;
        // $filter =  array_filter(array $strs ,function($value) {
        // }  
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
