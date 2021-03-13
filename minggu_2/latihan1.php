<?php 
    function pyfor($a) {
        for ($i = 1; $i < $a; $i++) {
            for($j = 1; $j <= $i; $j++ ) { 
                echo $i; 
            } 
            echo "<br>"; 
        }
    }

    function pywhile($b) {
        while ($b <= 5) {
            $x=1;
            while ($x<=$b) {
                echo $b;
                $x++;
            }
            echo("<br>");
            $b++;
        }
    }

    $a = 6; 
    pyfor($a);

    echo("================ <br>");

    $b = 1;
    pywhile($b);
?> 