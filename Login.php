<?php
session_start();

// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "10ukl");

// Variabel untuk menyimpan pesan kesalahan
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Query untuk mengambil data pengguna dari database
    $query = "SELECT * FROM pengguna WHERE username='$username'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    // Periksa apakah pengguna ditemukan dan password cocok
    if ($row && $password == $row["password"]) {
        $_SESSION["username"] = $username;
        if ($row["role"] == "admin") {
            header("Location:viwtableuser.php");
        } else {
            header("Location: index.php");
        }
        exit();
    } else {
        $error = 'Username atau password salah.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<style> 
*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}

body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-image: url(Gambar/Background.jpg);
    background-size: cover;
    background-position: center;
}

.wrapper{
    width: 420px;
    background: transparent;
    border: 3px solid rgba(225, 225, 225, .2);
    backdrop-filter: blur(5px);
    box-shadow: 0 0 10px rgba(0, 0, 0, .2);
    color: whitesmoke;
    border-radius: 10px;
    padding: 30px 40px;
}

.wrapper h1 {
    font-size: 36px;
    text-align: center;
}

.wrapper .input-box {
    width: 100%;
    height: 50px;
    margin: 30px 0px;
    position: relative;
}

.input-box input {
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(225, 225, 225, .2);
    border-radius: 40px;
    font-size: 16px;
    color: white;
    padding: 20px 45px 20px 20px
}


.input-box input::placeholder{
    color: white;
}

.input-box i{
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;
}

.wrapper .submit-login {
    width: 340px;
    height: 45px;
    background: white;
    border: none;
    outline: none;
    border-radius: 50px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 16px;
    color: #333;
    font-weight: 600;
}

.wrapper .submit-regist {
    width: 340px;
    height: 45px;
    margin-top: 30px;
    background: white;
    border: none;
    outline: none;
    border-radius: 50px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 16px;
    color: #333;
    font-weight: 600;
}

.wrapper .button {
    width: 340px;
    height: 45px;
    margin-top: 30px;
    background: white;
    border: none;
    outline: none;
    border-radius: 50px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 16px;
    color: #333;
    font-weight: 600;
    margin-bottom: 0.5cm;
    text-decoration: none;
}

.wrapper .button .a{
    text-decoration: none;
    color: green;
    text-align: center;
    position: center;
}

</style>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Cek apakah ada pesan error dari PHP
    const errorMessage = '<?php echo $error; ?>';
    if (errorMessage) {
        alert(errorMessage);
    }
});
</script>
</head>
<body>
 <div class="wrapper">
    <form action="" method="POST">
        <h1>Log-In</h1>
        <div class="input-box">
            <input type="text" name="username" id="username" placeholder="place ur username here" required>
            <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
            <input type="password" name="password" id="password" placeholder="place ur password here" required>
            <i class='bx bxs-lock' ></i>
        </div>
        <input type="submit" name="login" class="submit-login" value="Login">
    </form>
    <button type="submit" name="register" class="button"<p class="message">Belum bikin akun? <a class="a" href="register.php">silahkan daftar</a></p></button required>
            </a>
 </div>   
</body>
</html>
