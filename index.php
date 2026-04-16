<?php
    $name = "Zary";
    $age = 20;
    $city = "Mataram";
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

    echo "<br>";
    // OPERATOR 
    $nilai1 = 5;
    $nilai2 = 10;
    $nilai3 = 10;
    $nilai4 = 20;
    $nilai5 = 13;

    $hasil = $nilai1 + $nilai2 - $nilai3 + $nilai4 / $nilai5;
    echo $hasil;

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

    //perulangan
    for ($i = 0; $i < 10; $i++) {
        echo $i;
    }

    //array
    $buah = array("Apel", "Mangga", "Jeruk");
    echo $buah[0];
    echo $buah[1];
    echo $buah[2];

    //function
    function tambah($a, $b) {
        return $a + $b;
    }
    echo tambah(10, 20);

    //object
    class Manusia {
        public $nama;
        public $umur;
        public $kota;
        public function __construct($nama, $umur, $kota) {
            $this->nama = $nama;
            $this->umur = $umur;
            $this->kota = $kota;
        }
    }
    $manusia = new Manusia("Zary", 20, "Mataram");
    echo $manusia->nama;
    echo $manusia->umur;
    echo $manusia->kota;
?>