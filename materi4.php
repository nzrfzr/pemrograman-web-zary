<?php
    include("koneksi.php");
    if (isset($_POST['kirim'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];


        $sql = "INSERT INTO login (username, password, email, nama) VALUES ('$username', '$password', '$email', '$nama')";
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

<?php
    if (isset($_GET['hapus'])) {
        $id = $_GET['hapus'];
        $sql = "DELETE FROM login WHERE id = $id";
        $query = mysqli_query($koneksi, $sql);
        if ($query) {
            echo "Data berhasil dihapus";
        } else {
            echo "Data gagal dihapus";
        }
    }
    
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $sql = "SELECT * FROM login WHERE id = $id";
        $query = mysqli_query($koneksi, $sql);
        $row = mysqli_fetch_assoc($query);
        echo "<form method='post'>
        Username: <input type='text' name='username' value='{$row['username']}'><br>
        Password: <input type='password' name='password' value='{$row['password']}'><br>
        Nama: <input type='text' name='nama' value='{$row['nama']}'><br>
        Email: <input type='email' name='email' value='{$row['email']}'><br>
        <input type='submit' value='Simpan Perubahan' name='simpan'>
        </form>";
    }
    
    if (isset($_POST['simpan'])) {
        $id = $_GET['edit'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];

        $sql = "UPDATE login SET username = '$username', password = '$password', email = '$email', nama = '$nama' WHERE id = $id";
        $query = mysqli_query($koneksi, $sql);
        if ($query) {
            echo "Data berhasil diupdate";
        } else {
            echo "Data gagal diupdate";
        }
    }

    
?>

<!-- //menampilkan data -->
<table border="1">
    <tr>
        <td>id</td>
        <td>username</td>
        <td>password</td>
        <td>email</td>
        <td>nama</td>
        <td>aksi</td>
    </tr>
    <?php
    $sql = "SELECT * FROM login";
    $query = mysqli_query($koneksi, $sql);
    while($row = mysqli_fetch_assoc($query)) {
        echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['username']}</td>
        <td>{$row['password']}</td>
        <td>{$row['email']}</td>
        <td>{$row['nama']}</td>
        <td><a href='materi4.php?hapus={$row['id']}'>Hapus</a>
            <a href='materi4.php?edit={$row['id']}'>Edit</a>
        </td>
        </tr>";
    }
    ?>