<?php
    function whilefactorial($i,$hasil,$n) {
        while($i<=$n){
            $hasil=$hasil * $i;
            $i++;
        }
        echo "hasil faktorial = ";
	    echo $hasil;
    }

    function forfactorial ($i,$hasil,$n) {
        for ($i=$i; $i <= $n; $i++) { 
            $hasil=$hasil*$i;
        }
        echo "hasil faktorial = ";
	    echo $hasil;
    }

    function dowhilefactorial ($i,$hasil,$n) {
        do {
            $hasil=$hasil*$i;
            $i++;
        } while ($i <= $n);
    
        echo "hasil faktorial = ";
	    echo $hasil;
    }

    $i=1;
	$hasil=$i;
	
    // input number for factorial
    $n=5; 
    
    // to run this, choose one function 
    forfactorial($i,$hasil,$n);
    whilefactorial($i,$hasil,$n);
    dowhilefactorial($i,$hasil,$n);
?>