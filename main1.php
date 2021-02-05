class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        $max = 0;
        $l = count($height);
        for ($i=0; $i<($l-1); $i++){
            // force to run the last height
            //$thish = $height[$l-1];
            //$vol = ($l-$i+1)* min($height[$i],$thish);
            //if($vol>$max) $max = $vol;
            
            $max_rh = $height[$l-1];
            $vol = ($l-1-$i)* min($height[$i],$max_rh);
            if($vol>$max) $max = $vol;
            
            for($j=$l-1; $j>$i; $j--){
                $thish = $height[$j];
                if($thish<$max_rh){
                    continue;
                }
                if($thismin>min($thish, $height[$i])){
                    continue;
                }
                if($thish>$max_rh &&($thish)){
                    $max_rh = $thish;
                    $thismin = min($height[$i],$max_rh);
                    $vol = ($j-$i) * $thismin;
                    
                    if($vol>$max) $max = $vol;
                }
                //$lasth = $thish;
                //echo $i."-".$j." ";
                //if($vol>$max) $max = $vol;
            }

        }
        //echo "\n";
        return $max;
    }
}
