<form action="">
    Masukkan Angka : <input type="number" name="angka">
    <input type="submit" value="Kirim">
</form>
<?php
    if (isset($_GET['angka'])) {
        $angka = $_GET['angka'];
        for ($i = 1; $i <= $angka; $i++) {
            echo "ini angka $i <br>";
        }
    }
?>
