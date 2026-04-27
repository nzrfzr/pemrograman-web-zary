<?php
    function hello() {
        echo "Selamat datang di kelas TI A";
    }
    hello();

    echo "<br><br>";

    function tambah(int $a, int $b) {
        $hasil = $a + $b;
        return $hasil;
    }

    function kali(int $a,int $b) {
        $hasil = $a * $b;
        return $hasil;
    }

    function bagi(int $a,int $b) {
        $hasil = $a / $b;
        return $hasil;
    }
    function kurang(int $a,int $b) {
        $hasil = $a - $b;
        return $hasil;
    }
?>
<form action="" method="post">
    Masukkan angka 1 : <input type="number" name="angka1"><br>
    Masukkan angka 2 : <input type="number" name="angka2"><br>
    <input type="submit" value="Kirim">
</form>
<?php
    if (isset($_POST['angka1'])) {
        $newAngka1 = $_POST['angka1'];
        $newAngka2 = $_POST['angka2'];
        echo "Hasil penjumlahan : ". tambah($newAngka1, $newAngka2);
        echo "<br><br>";
        echo "Hasil perkalian : ". kali($newAngka1, $newAngka2);
        echo "<br><br>";
        echo "Hasil pembagian : ". bagi($newAngka1, $newAngka2);
        echo "<br><br>";
        echo "Hasil pengurangan : ". kurang($newAngka1, $newAngka2);
    }
?>