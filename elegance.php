<?php
    function x($r)//r为半径的平方
    {
        $count = 0;
        for ($x = 1; $x * $x < $r; $x++) {
            $y = (int)sqrt($r - $x * $x);
            if ($x * $x + $y * $y == $r) {
                $count++;
            }
        }
        $count *= 4;//因为存在四象限的情况，即有四种情况，
        $x = (int)sqrt($r);
        if ($x * $x == $r||$y*$y=$r) $count += 4;//某一坐标为0，也是有四种情况的
        return $count;
    }
   echo x("25");
