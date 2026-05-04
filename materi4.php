<?php
    include("koneksi.php");
    if (isset($_POST['kirim'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];


        $sql = "INSERT INTO user (username, password, email, nama) VALUES ('$username', '$password', '$email', '$nama')";
        $query = mysqli_query($koneksi, $sql);


        if ($query) {
            echo "Data berhasil ditambahkan";
        } else {
            echo "Data gagal ditambahkan";
        }
    }
    
?>  
<form method="post">
    Username: <input type="text" name="username" placeholder="Masukkan Username"><br>
    Password: <input type="password" name="password" placeholder="Masukkan Password"><br>
    Nama: <input type="text" name="nama" placeholder="Masukkan Nama"><br>
    Email: <input type="email" name="email" placeholder="Masukkan Email"><br>
    <input type="submit" value="Kirim Data" name="kirim">
</form>
