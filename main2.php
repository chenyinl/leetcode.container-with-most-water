<?php
class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        $max_vol=0;
        $i=0;
        $j=count($height)-1;
        $l = $height[0]; // left side
        $r = $height[$j]; // right side
        $w = $j-$i;
        while($j>$i){
            $max_vol=max($max_vol, ($w--) * min($l,$r));

            if($l>$r){
                $r=$height[--$j];
            }else{
                $l = $height[++$i];
            }
        }
        return $max_vol;
    }
}
