<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        html {
    margin:0;
    padding:0;
    width:100%;

}

body {
    margin:0;
    padding:0;
    width:100%;
    height:100%;
    background-image: url(Gambar/oren.jpg);
    background-repeat: no-repeat;
    background-size: 100%;
    display: block;
}

.logo {
    float: left;
    margin-left: 96px;
    padding: 0px 38px;
    font-family: 'raleway', sans serif;
    font-size: 25px;
    font-weight: bold;
    color: yellow;

}

.logo a {
    text-decoration: none;
    color:aliceblue;
}

.nav {
    position: absolute;
    top: 0;
    left: 0;
    margin: 0;
    padding: 0;
    height: 80px;
    width: 200%;
    text-decoration: none;

}

.nav ul {
    list-style: none;
    cursor: pointer;
    float: left;
    margin-right: 155px;
}

.nav ul li {
    list-style: none;
    display: inline-block;
    color:rgb(0, 0, 0);
    font-family: 'releway', sans-serif;
    padding: 15px 15px;
    font-weight: 500px;
}

.nav ul li:hover {
    border-bottom: 5px solid black;
    transition: all .3s ease;

}

.header {
    text-align: center;
    position: absolute;
    top: 35%;
    left: 72%;
    right: 10%;
    transform: translate(-50%, -50%);
    width: 70vh;

}

.header h1 {
    color: aliceblue;
    text-align: center;
    font-family: 'Noto Serif JP', sans-serif;
    font-size: 50px;
    text-transform: capitalize;

}

.header span {
    color: #77fe00;

}

.content-header {
    position:absolute;
    transform: translate(-50%, -50%);
    text-align: center;
    top: 60%;
    left: 73%;
    width: 500px;
    margin-left: 0px;
}

.content-header p {
    font-family: 'comic sans ms', sans-serif;
    font-size: 20px;
    text-align: center;
    color: black;

}

text {
    width: 205px;
    height: 40px;
    border: none;
    border-radius: 20px;
    padding-left: 10px;

}

.col-img {
    position: absolute;
    top: 50%;
    left: 20%; 
    transform: translate(-50%, -50%);
    width: 57%;
    text-align: -webkit-right;
}

.col-img img {
    width: 70%;
    box-shadow: 0 15px 15px 0;
    border-radius: 12px;
    overflow: hidden;
}



footer {
    background-color: #C1F2B0;
    margin-top: 600px;
}

.footercontainer{
    width: 100%;
    padding: 70px 30px 20px;
}

.socia1lcons{
    display: flex;
    justify-content: center;

}

.socia1lcons a{
    text-decoration: none;
    padding: 10px;
    background-color: white;
    margin: 10px;
    border-radius: 50px;
}

.socia1lcons a i{
    font-size: 2em;
    color: black;
    opacity: 0.9;

}

.socia1lcons a:hover{
    background-color: #111;
    transition: 1.0s;
}

.socia1lcons a:hover i{
    color: white;
    transition: 1.0s;
}

.footerbottom{
    background-color: #65B741;
    padding: 20px;
    text-align: center;
}

.footerbottom p{
    color: white;
}

.designer{
    opacity: 0.7s;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 400;
    margin: 0px 5px;
}


.budi{
    background-color: white;
    border-radius: 15px;
}

.tombol li a {
    text-decoration: none;
    color: #fff;
    text-align: center;
    position: center;
}
    </style>
</head>
<body>
    <div class="wrapper">  
        <div class="nav">
            <div class="logo">
                <a href="#">
                    <p>Selamat Datang di Kuyliner</p>
                    
                </a>
            </div>
            <ul class="tombol">
                <li> <a href="">Beranda</a></li>
                <li> <a href="Kuliner.php">Kuliner</a></li>
                <li> <a href="riwayat.php">Pesanan</a></li>
                <li> <a href="Profil.php">Founder</a></li>
                <li> <a href="Login.php">Login</a></li>
                <li> <a href="register.php">Register</a></li>
                <li class="budi">Hallooo, <?php echo htmlspecialchars($_SESSION['username']); ?>!</li>
                <li class="out"> <a href="Login.php">Log-Out</a></li>
            </ul>
        </div>
    </div>
    <div class="header">
        <h1>Pesan online <span> sekarang juga!!!</span></h1>
    </div>

    <div class="content-header">
        <p>Kapan lagi kulineran keliling indonesia cukup di rumah aja. Cukup pilih dari menu kami, lakukan pemesanan, dan kami akan mengantarkan hidangan lezat langsung ke pintu Anda.</p>
        <br>
    </div>

    <div class="col-img">
        <img src="Gambar/Background.jpg" alt="">
    </div>

    <footer>
        <div class="footercontainer">
            <div class="socia1lcons">
                <a href="https://www.facebook.com/zaimnadhif.zaimnadhif?mibextid=ZbWKwL"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/deepzaym/"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.youtube.com/@DeepZaym"><i class="fa-brands fa-youtube"></i></a>

            </div>
            
        </div>
        <div class="footerbottom">
            <p>Copyright &copy;2024 Designed by<span class="designer">Muhammad Zaim Nadhif Amin</span></p>
        </div>
    </footer>
</body>
</html>