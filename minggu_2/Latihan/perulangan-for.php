<?php
    echo "<h1>Latihan Minggu 2 - Looping</h1>";

    // soal no 1
    echo "<h4>Soal No.1</h4>";
    echo "Loop - For";
    for ($i=1; $i <= 5; $i++) { 
        echo "</br>";
        for ($j=1; $j <=$i; $j++) { 
            echo $i;
        }
    }

    echo "</br> </br>";

    echo "Loop - While";
    $a = 1;
    while ($a <= 5) {
        echo "</br>";
        $b = 1;
        while ($b <= $a) {
            echo $a;
            $b++;
        }
        $a++;
    }

    echo "</br> </br>";
    
    // soal no 2
    echo "<h4>Soal No.2</h4>";
    
    if(isset($_POST['nilai'])){
        $nilai = $_POST['nilai'];

        echo "Loop - For";
        echo "</br>";
        $hasil = 0;
        $txt = "Hasil faktorial dari <b>".$nilai."</b> adalah ";
        if($nilai == 0){
            echo $txt." <b>".$hasil."</b>";
        }else{
            $hasil = 1;
            for ($i=1; $i<= $nilai ; $i++) { 
                $hasil *= $i; 
            }
            echo $txt." <b>".$hasil."</b>";
        }

        echo "</br> </br>";

        echo "Loop - While";
        echo "</br>";
        $hasil = 0;
        $a=1;
        if($nilai == 0){
            echo $txt." <b>".$hasil."</b>";
        }else{
            $hasil = 1;
            while ($a <= $nilai) {
                $hasil *= $a;
                $a++;
            }
            echo $txt." <b>".$hasil."</b>";
        }

        echo "</br> </br>";

        echo "Loop - Do While";
        echo "</br>";
        $hasil = 0;
        if($nilai == 0){
            echo $txt." <b>".$hasil."</b>";
        }else{
            $hasil = 1;
            $b=1;
            do {
                $hasil *= $b;
                $b++;
            } while ($b <= $nilai);
            echo $txt." <b>".$hasil."</b>";
        }
    }

?>

<form method="post">
    <h4>faktorial</h4>
    <label>Nilai : </label>
    <input type="number" name="nilai" placeholder="Masukkan nilai faktorial" required>
    <button type="submit">Submit</button>
</form>