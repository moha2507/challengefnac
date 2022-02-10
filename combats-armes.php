<?php
    $arms = ['gun' , 'whip' , 'fists'];
    $oppoent = $arms [rand(0,2)];

    if ($oppoent == $arms[0]){
        $steven = $arms[1];
        echo ($steven);
    }
    elseif ($oppoent == $arms[1]){
        $steven = $arms[2];
        echo ($steven);  
    }
    else {
        $steven = $arms[0];
        echo ($steven);
    }
        
?>