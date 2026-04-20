<?php
    $name = "Zary";
    $age = 20;
    $city = "Pancordao";
    $status = false;

    if ($status == true) {
        $status = "Jomblo";
    } else {
        $status = "Menikah";
    }
    echo "Nama saya $name, umur saya $age tahun dan saya tinggal di $city. Status saya $status.";
    for ($i = 0; $i < 10; $i++) {
        echo $i;
    }

    echo "<br>======================================<br>";
    // OPERATOR 
    $nilai1 = 5;
    $nilai2 = 10;
    $nilai3 = 10;
    $nilai4 = 20;
    $nilai5 = 13;

    $hasil = $nilai1 + $nilai2 - $nilai3 + $nilai4 / $nilai5;
    echo $hasil;

    echo "<br>======================================<br>";
    //percabangan
    $nilai = 80;
    if ($nilai >= 80) {
        echo "A";
    } else if ($nilai >= 70) {
        echo "B";
    } else if ($nilai >= 60) {
        echo "C";
    } else {
        echo "D";
    }

    // ganjil genap
    echo "<br>======================================<br>";

    $test = 10;
    if ($test % 2 == 0) {
        echo "Genap";
    } else {
        echo "Ganjil";
    }
?>