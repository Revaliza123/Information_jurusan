<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.css">
    <link rel="icon" href="img/WhatsApp Image 2023-02-01 at 17.43.30.jpeg" type="immage/x-icon">
    <title>Beranda</title>
    <style>
        body{
            
        }
        link{
            display:none;
        }
        li a, .dropbtn{
 
            text-align: center;
 
            text-decoration: none;
}
      li a:hover, .dropdown:hover .dropbtn {
            transition: all 0.5s ease;
}

      li.dropdown{
             display: inline-block;
}


      .dropdown-content {
             display: none;
             position: absolute;
             background-color: #87A96B;
             min-width: 90  px;
             box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2); 
             z-index: 1;
}

       .dropdown-content a {
             color: white;

             text-decoration: none;
             display: block;
             text-align: center;
}


       .dropdown-content a:hover {
             border: 3px solid white;
}

       .dropdown:hover .dropdown-content {
             display: block;
}
        ul{
            position: absolute;
            margin:auto;
            width:1532px;
            height: 75px;
            left: auto; 
            right:auto;
            top: 158px;

            background: #87A96B;
        }
        li{
            margin:auto;
            padding: 20px 20px;
            display: inline-block;
        }
        a{
            color:white;
            width: 110px;
            height: 30px;
            left: 23px;
            top: 191px;

            text-decoration:none;
            font-size:25px;
            font-family:sans-serif;
        }
        .atas img{
            position: absolute;
            width: 120px;
            margin:auto;
            height: 145px;
            left: 18px;
            top: 11px;
        }
        
        .atas h3{
            position: absolute;
            width: 451px;
            height: 50px;
            left: 150px;
            top: 30px;

            font-family: 'Merriweather Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 24px;
            line-height: 30px;
            text-transform: uppercase;

            color: #000000;

        
        }
        .atas h4{
            position: absolute;
            width: 451px;
            height: 28px;
            left: 150px;
            top: 60px;
        
            font-family: 'Merriweather Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 30px;

            color: #000000;
        }
        .gambar img{
            position: absolute;
            width: 100%;
            margin:auto;
            padding:auto;
            height: 391px;
            top: 233px;


        }
        .sejarah h3{
            position: absolute;
            width: 558px;
            height: 55px;
            left:450px;
            top: 686px;

            font-family: 'Merriweather Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 25px;
            text-transform: uppercase;

            color: #000000;

            
        }
        .sejarah h4{
            position: absolute;
            width: 888px;
            height: 226px;
            left: 450px;
            top: 731px;

            font-family: 'Merriweather Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 20px;

            color: #000000;
        }
        .sejarah img{
            position:absolute;
            width: 211px;
            height: 226px;
            left: 90px;
            top: 710px;

        }
        .singkat h3{
            position: absolute;
            width: 558px;
            height: 56px;
            left: 50px;
            top: 1050px;

            font-family: 'Merriweather Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 25px;
            text-transform: uppercase;

            color: #000000;

        }
        .singkat h4{
            position: absolute;
            width: 888px;
            height: 226px;
            left: 50px;
            top: 1100px;

            font-family: 'Merriweather Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 20px;

            color: #000000;


            color: #000000;

        }
        .singkat img{
            position:absolute;
            width: 370px;
            height: 270px;
            left: 1000px;
            top: 1070px;
        }
      
    </style>
    <div class="atas">
    <img src="img/Logosmkn4padalarang-removebg-preview.png">
    <h3>REKAYASA PERANGKAT LUNAK(RPL)</h3>
    <h4>SMKN 4 PADALARANG</h4>
    </div>
    <ul>
      <li><a href="home.php"  style="text-decoration: none;">Beranda</a></li>
      <li class="dropdown">
                <a href="#" class="dropbtn" style="text-decoration: none;">Data Siswa</a>
                <div class="dropdown-content">
                    <a href="datasiswaadmin.php" style="text-decoration: none;">X</a>
                    <a href="datasiswaadmin11.php" style="text-decoration: none;">XI</a>
                    <a href="datasiswaadmin12.php" style="text-decoration: none;">XII</a>
                    </div> 
        <li><a href="alumniadmin.php" style="text-decoration: none;">Alumni</a></li>  
        <li><a href="logout.php" style="text-decoration: none;">Logout</a></li> 
    </ul>
</head>
<body>
<?php
include "session.php";
include "koneksi.php";
?>
    <div class="gambar">
    <img src="img/WhatsApp Image 2023-01-30 at 14.23.11.jpeg" >
    </div>
    <div class="sejarah">
    <img src="img/Logosmkn4padalarang-removebg-preview.png">
    <h3>SEJARAH SINGKAT SMK NEGERI 4 PADALARANG</h3>
    <h4>SMK Negeri 4 Padalarang berdiri diawali dari Sekolah Pertanian bernama Sekolah Pertanian Pembangunan
        - Sekolah Pertanian Menengah Atas (SPP-SPMA) wilayah Jawa Barat. Sejalan perkembangan peraturan daerah mengenai Sekolah Menengah 
        Kejuruan maka pada tahun 2002 SPP-SPMA berganti nama menjadi SMK Negeri 4 Padalarang. Penamaan SMK Negeri 4 Padalarang ini didasarkan 
        dari penamaan dan penomoran sekolah di wilayah Kabupaten Bandung pada saat itu,yaitu SMK Negeri 1 Katapang, SMK Negeri 2 Baleendah,
        SMK Negeri 3 Baleendah, SMK Negeri 4 Padalarang, SMK Negeri 5 Pangalengan, SMK Negeri 6 Rancaekek 
        (sekarang SMK Ne Sejalan dengan otonomi daerah, dengan berpisahnya Kabupaten Bandung Barat dengan Kabupaten Bandung, secara administrasi SMK Negeri 4 Padalarang pun lepas dari Kabupaten Bandung,
        namun dengan kebijakan sekolah nama dan penomoran pada SMK Negeri 4 Padalarang tetap dipertahankan sampai saat ini.geri 1 Rancaekek) dan SMKN 7 Baleendah. </h4>
        </div>
    <div class="singkat">
    <h3>SEJARAH SINGKAT RPL</h3>
    <img src="img/WhatsApp Image 2023-02-06 at 09.19.25.jpeg" >
    <h4>Rekayasa perangkat lunak merupakan istilah yang digunakan yang erat kaitannya dengan pengembangan suatu perangkat lunak.
        Di tahun 1968 dan 1968 konferensi tentang perangkat lunak diselenggarakan yang disponsori oleh komite sains NATO. Konferensi tersebut memberikan dampak yang sangat signifikan dalam pengembangan rekayasa perangkat lunak.
        Di tahun 1960-an hingga 1980-an, terdapat banyak masalah yang ditemukan oleh praktisi pengembangan perangkat lunak. Pada saat itu, disebut krisis perangkat lunak karena banyaknya projek yang gagal. 
        Kegagalan pengembangan perangkat lunak terjadi dikarenakan projek melebihi anggaran, projek yang mengakibatkan kerusakan fisik dan projek yang menyebabkan kematian. 
        Salah satu kasus yang terkenal dalam kegagalan pengembangan perangkat lunak adalah meledaknya roket Ariane. Berbagai Teknik dan metode mulai dikembangkan untuk mengatasi krisis. Pengembangan pemrograman terstruktur,
        perangkat pembantu pengembangan perangkat lunak (CASE tools), pemrograman berorientasi objek, berbagai standar,
        dan UML dilkakukan sebagai langkah untuk menghasilkan software yang sesuai anggaran dan tepat waktu.</h4>
    </div>
</body>
</html>