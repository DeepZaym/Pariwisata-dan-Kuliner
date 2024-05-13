    <?php
    include "../koneksi.php"; // Sambungkan ke database

    // cek apakah tombol sdh ditekan
    if(isset($_POST['simpan'])){
    
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $username= $_POST['username'];
    $password= $_POST['password'];
    $role = $_POST['role']; 

    //QUERY UPDATE
        $result =  mysqli_query($mysqli, "UPDATE pengguna
        SET nama='$nama',username='$username',password='$password', role ='$role'
        WHERE IdPengguna='$id' ");
        header('Location: edit.php');

    } else {
        die("akses dilarang");
    }

    ?>