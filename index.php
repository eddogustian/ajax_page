<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Membuat Halaman website tanpa reload dengan ajax jquery</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="content">
        <header>
            <h1 class="judul">Do Dev</h1>
            <h3 class="deskripsi">Membuat website tanpa reload</h3>
        </header>
    </div>

    <div class="menu">
        <ul>
            <li class="klik_menu" id="home">Home</li>
            <li class="klik_menu" id="tentang">Tentang</li>
            <li class="klik_menu" id="tutorial">Tutorial</li>
            <li class="klik_menu" id="sosmed">Sosial Media</li>
        </ul>
    </div>
    <div class="main">
       
    </div>
    <script src="jquery-3.4.1.min.js"></script>
</body>
    <script>
        $(document).ready(function(){
            $('.klik_menu').click(function(){
                const menu = $(this).attr('id');
                if(menu == "home") {
                    $('.main').load('home.php');	
                }else if(menu == "tentang"){
                    $('.main').load('tentang.php');
                }else if(menu == "tutorial"){
                    $('.main').load('tutorial.php');
                }else if(menu == "sosmed"){
                    $('.main').load('sosmed.php');
                }
            });
            //halaman di load default pertama kali 
            $('.main').load('home.php');
        });
    </script>
</html>