<?php

/**
 * Filter the given array using the given callback filter
 * 
 * @param  array $my_array
 * @param  callable $callback
 * @return array
*/ 
function my_array_filter (array $my_array, callable $callback){
    $filtered_array = [];
    foreach($my_array as $value){
        if($callback($value) == true){
            $filtered_array[] = $value;            
        }
    }
    return $filtered_array;
};