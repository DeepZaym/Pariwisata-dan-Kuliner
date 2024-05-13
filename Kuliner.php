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
/* 
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

}

.tombol > li > a {
    color: rgb(0, 68, 121);
    text-decoration: none;

}

footer {
    background-color: rgb(6, 6, 6);
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
    background-color: black;
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
} */
</style>

</head>
<body>
<!-- <div class="wrapper">  
        <div class="nav">
            <div class="logo">
                <a href="#">
                    <p>Kuliner Khas Jawa Timur</p>
                </a>
            </div>
            <ul class="tombol">
                <li> <a href="index.html">Beranda</a></li>
                <li> <a href="Kuliner.php">Kuliner</a></li>
                <li> <a href="Profil.html">Profil</a></li>
                <li> <a href="Login.php">Login</a></li>
                <li> <a href="register.php">Register</a></li>
            </ul>
        </div>
    </div> -->
    <section class="cards">
        <article class="card">
            <div class="card-img hover"></div>
            <a href="#">
                <div class="card-img-1" style="background-image: url(Gambar/rendang.jpg);">
                </div>
            </a>

            <div class="card-info">
                <span class="card-category">Padang</span>
                <h3 class="card-title">Kuliner Rendang</h3>
                <span class="card-by">
                    apa itu 
                    <a href='https://www.bing.com/ck/a?!&&p=2538f10b08579bfbJmltdHM9MTcwMTA0MzIwMCZpZ3VpZD0yYjc3NTc0Zi1lOTkxLTZkYjMtMWYwZC00NGNkZThjNzZjY2UmaW5zaWQ9NTg1OA&ptn=3&ver=2&hsh=3&fclid=2b77574f-e991-6db3-1f0d-44cde8c76cce&psq=rendang&u=a1aHR0cHM6Ly93d3cudml2YS5jby5pZC9nYXlhLWhpZHVwL2t1bGluZXIvMTE4NTg1OC1qYWRpLW1ha2FuYW4tdGVybGV6YXQtZHVuaWEtcmVuZGFuZy1zdWRhaC1kaWFrdWktdW5lc2NvLWJlbHVtLXNpaA&ntb=1' class="card-admin">Rendang???</a>
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
                    apa itu 
                   <a href='https://www.bing.com/ck/a?!&&p=7ccd585b82855f6dJmltdHM9MTcwMTEyOTYwMCZpZ3VpZD0yYjc3NTc0Zi1lOTkxLTZkYjMtMWYwZC00NGNkZThjNzZjY2UmaW5zaWQ9NTIyMg&ptn=3&ver=2&hsh=3&fclid=2b77574f-e991-6db3-1f0d-44cde8c76cce&psq=ketoprak&u=a1aHR0cHM6Ly9pZC53aWtpcGVkaWEub3JnL3dpa2kvS2V0b3ByYWtfKG1ha2FuYW4p&ntb=1' class="card-admin">Ketoprak???</a>
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
                    apa itu 
                    <a href='https://www.bing.com/ck/a?!&&p=2538f10b08579bfbJmltdHM9MTcwMTA0MzIwMCZpZ3VpZD0yYjc3NTc0Zi1lOTkxLTZkYjMtMWYwZC00NGNkZThjNzZjY2UmaW5zaWQ9NTg1OA&ptn=3&ver=2&hsh=3&fclid=2b77574f-e991-6db3-1f0d-44cde8c76cce&psq=rendang&u=a1aHR0cHM6Ly93d3cudml2YS5jby5pZC9nYXlhLWhpZHVwL2t1bGluZXIvMTE4NTg1OC1qYWRpLW1ha2FuYW4tdGVybGV6YXQtZHVuaWEtcmVuZGFuZy1zdWRhaC1kaWFrdWktdW5lc2NvLWJlbHVtLXNpaA&ntb=1' class="card-admin">Rendang???</a>
                </span>
            </div>


        </article>


</body>
</html>

