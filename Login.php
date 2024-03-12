<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Model/dekorasi login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
 <div class="wrapper">
    <form action="">
        <h1>Log-In</h1>
        <div class="input-box">
            <input type="text" placeholder="place ur username here"
            required>
            <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
            <input type="password" placeholder="place ur password here"
            required>
            <i class='bx bxs-lock' ></i>
        </div>
          
            <a href="login.php">
                <button>Login</button>
            </a>

        </form>
        <div class="Forgot">
            <p1>belum punya akun??? </><a href="register.php">silahkan daftar dulu</a> <forgot_password href="#">Forgot Password</forgot_password>
        </div>
 </div>   
</body>
</html>