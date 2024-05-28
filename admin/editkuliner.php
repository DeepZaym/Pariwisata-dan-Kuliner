<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Model/dekoredit.css">
    <title>Document</title>
    
</head>
<body>
    <header>
        <h3>FORMULIR EDIT DATA</h3>
    </header>

    <?php 
    include("../koneksi.php");

    if (!isset($_GET['id'])){
        header('Location: ../viwtableuser.php');
    }
    $id = $_GET['id'];

    $result = mysqli_query($mysqli, "SELECT * FROM pengguna WHERE IdPengguna=$id");

    while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data['nama'];
    $username= $user_data['username'];
    $password= $user_data['password'];
    $role = $user_data['role'];
}

    ?>

    <form method="POST" action="prosesedituser.php">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="<?php echo $username ?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" value="<?php echo $password ?>"></td>
            </tr>
            <tr>
                <td>Level</td> 
                <td>
                    <select name="role" id="role" required>
                        <option disabled selected><?php echo $role ?></option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </td>
            </tr>   
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
                <td><input type="submit" name="simpan" value="simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>