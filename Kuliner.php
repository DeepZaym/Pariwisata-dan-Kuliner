<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style1.css">
    <title>Kuliner lain</title>
    <link rel="stylesheet" href="Model/stylekuliner.css">
    <?php include "navbar.html"?>
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
    margin-left: 46px;
    padding: 0px 38px;
    font-family: 'raleway', sans serif;
    font-size: 25px;
    font-weight: bold;

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
    width: 100%;

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
    border-bottom: 3px solid black;
    transition: all .3s ease;

}

.header {
    text-align: center;
    position: absolute;
    top: 30%;
    left: 72%;
    transform: translate(-50%, -50%);

}

.header h1 {
    color: aliceblue;
    text-align: left;
    font-family: 'Noto Serif JP', sans-serif;
    font-size: 50px;

}

.header span {
    color: #77fe00;

}

.content-header {
    position: absolute;
    transform: translate(-50%, -50%);
    text-align: center;
    top: 55%;
    left: 73%;

}

.content-header p {
    color:aliceblue#fff;
    font-family: 'raleway', sans-serif;
    font-size: 16px;
    text-align: left;
    color: #fff690;

}
</style>

</head>
<body>
    <section class="cards">
        <article class="card">
            <div class="card-img hover"></div>
            <a href="#">
                <div class="card-img-1" style="background-image: url(Gambar/rendang.jpg );">
                </div>
            </a>

            <div class="card-info">
                <span class="card-category">Padang</span>
                <h3 class="card-title">Kuliner Rendang</h3>
                <span class="card-by">
                    pesan rendang klik
                    <a href='rendang.php' class="card-admin"> DISINI!!!!!</a>
                </span>
            </div>

        </article>



        <article class="card">
        <div class="card-img hover"></div>
            <a href="#">
                <div class="card-img-1" style="background-image: url(Gambar/Ketoprak.jpg);">
                </div>
            </a>

            <div class="card-info">
                <span class="card-category">Jakarta</span>
                <h3 class="card-title">Kuliner Ketoprak</h3>
                <span class="card-by">
                   pesan Ketoprak klik
                   <a href='ketoprak.php' class="card-admin"> DISINI!!!!!</a>
                </span>
            </div>


        </article>

        <article class="card">
            <div class="card-img hover"></div>
            <a href="#">
                <div class="card-img-1" style="background-image: url(Gambar/Sotobanjar.jpg);">
                </div>
            </a>

            <div class="card-info">
                <span class="card-category">Kalimantan Selatan</span>
                <h3 class="card-title">Kuliner Soto Banjar</h3>
                <span class="card-by">
                    pesan soto banjar klik
                    <a href='sotobanjar.php' class="card-admin"> DISINI!!!!!</a>
                </span>
            </div>


        </article>


</body>
</html>

