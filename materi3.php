<form action="">
    Masukkan Angka : <input type="number" name="angka">
    <input type="submit" value="Kirim">
</form>
<?php
    if (isset($_GET['angka'])) {
        $angka = $_GET['angka'];
        if ($angka % 2 == 0) {
            echo "Genap";
        } else {
            echo "Ganjil";
        }
    }
?>
