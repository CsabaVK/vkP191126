<?php 
    function is_prim($n)
    {
        for ($i=2; $i * $i <= $n; $i++) { 
            if($n % $i == 0) return FALSE;
        }
        return TRUE;
    }
    for ($i=2; $i < 100; $i++) { 
        if(is_prim($i)){
            echo "<div><mark>{$i}</mark></div>";
        }
        else {
            echo "<div>{$i}</div>";
        }
    }

?>