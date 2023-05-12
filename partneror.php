<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.css">
    <title>PARTNER</title>
    <link rel="icon" href="img/WhatsApp Image 2023-02-01 at 17.43.30.jpeg" type="immage/x-icon">
    <style>
          body{
            
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
            width: 1490.5px;
            height: 75px;
            left: auto;
            right:auto;
            top: 158px;

            background: #87A96B;
        }
        li{
            margin:auto;
            padding: 20px 19px;
            display: inline-block;
        }
        a{
            color:white;
            width: 120px;
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
        .oracle img{
            position: absolute;
width: 450px;
height: 250px;
left: 67px;
top: 475px;

        }
        .oracle h3{
            position: absolute;
width: 300px;
height: 30px;
left: 67px;
top: 420px;

font-family: 'Merriweather Sans';
font-style: normal;
font-weight: 400;
font-size: 24px;
line-height: 30px;

color: #000000;
        }
        .oracle h4 {
            position: absolute;
width: 788px;
height: 320px;
left: 667px;
top: 480px;

font-family: 'Merriweather Sans';
font-style: normal;
font-weight: 400;
font-size: 20px;
line-height: 30px;

        }
        .unjani img{
            position: absolute;
width: 514px;
height: 276px;
left: 64px;
top: 935px;


        }
        .unjani h3{
            position: absolute;
width: 300px;
height: 30px;
left: 64px;
top: 875px;

font-family: 'Merriweather Sans';
font-style: normal;
font-weight: 400;
font-size: 24px;
line-height: 30px;

color: #000000;
        }
        .unjani h4{
            position: absolute;
width: 788px;
height: 284px;
left: 667px;
top: 930px;

font-family: 'Merriweather Sans';
font-style: normal;
font-weight: 400;
font-size: 20px;
line-height: 30px;

color: #000000;
        }
        .icommits img{
            position: absolute;
width: 529px;
height: 299px;
left: 49px;
top: 1380px;
        }
        .icommits h3{
            position: absolute;
width: 300px;
height: 30px;
left: 64px;
top: 1320px;

font-family: 'Merriweather Sans';
font-style: normal;
font-weight: 400;
font-size: 24px;
line-height: 30px;

color: #000000
        }
        .icommits h4{
            position: absolute;
width: 768px;
height: 240px;
left: 667px;
top: 1380px;

font-family: 'Merriweather Sans';
font-style: normal;
font-weight: 400;
font-size: 20px;
line-height: 30px;

color: #000000;

        }
        .ecconsile img{
            position: absolute;
width: 497px;
height: 327px;
left:49px;
top:1750px;
        }
        .ecconsile h3{
            position: absolute;
width: 300px;
height: 30px;
left:64px;
top:1700px;

font-family: 'Merriweather Sans';
font-style: normal;
font-weight: 400;
font-size: 24px;
line-height: 30px;

color: #000000;

        }
        .ecconsile h4{
            position: absolute;
width: 820px;
height: 370px;
left:667px;
top:1780px;

font-family: 'Merriweather Sans';
font-style: normal;
font-weight: 400;
font-size: 20px;
line-height: 30px;

color: #000000;
        }
    </style>
</head>
    <div class="atas">
    <img src="img/Logosmkn4padalarang-removebg-preview.png">
    <h3>REKAYASA PERANGKAT LUNAK(RPL)</h3>
    <h4>SMKN 4 PADALARANG</h4>
    </div>
    <ul>
      <li><a href="berandda.php"  style="text-decoration: none;">Beranda</a></li>
      <li ><a href="dataguru.php" style="text-decoration: none;">Data Guru</li>
      <li class="dropdown">
                <a href="#" class="dropbtn" style="text-decoration: none;">Data Siswa</a>
                <div class="dropdown-content">
                    <a href="datasiswaor.php" style="text-decoration: none;">X</a>
                    <a href="datasiswaor11.php" style="text-decoration: none;">XI</a>
                    <a href="datasiswaor12.php" style="text-decoration: none;">XII</a>
                </div>   
      <li><a href="alumnior.php" style="text-decoration: none;">Alumni</a></li>
      <li><a href="galleryor.php" style="text-decoration: none;">Galery</a></li>
        <li><a href="partneror.php" style="text-decoration: none;">Partner</a></li>
    </ul>
<body>
    <h2 style="margin-top:320px;margin-left:510px;">Data Perusahaan Yang Bekerjasama Dengan RPL</h2>
    <div class="oracle">
        <h3>ORACLE</h3>
        <img src="img/WhatsApp Image 2023-02-06 at 09.26.14 (1).jpeg">
        <h4>Oracle Corporation adalah sebuah perusahaan teknologi komputer multinasional yang berkantor pusat di Austin, Texas.
            Perusahaan ini menjual perangkat lunak dan teknologi basis data, sistem komputasi awan, dan perangkat lunak perusahaan—terutama sistem manajemen basis data buatannya sendiri. 
            Oracle adalah salah satu dari RDBMS atau sering disebut dengan Relation database management system buatan dari oracle corporation. 
            Oracle database ini sering digunakan untuk membangun sebuah system yang berskala besar, seperti yang ada pada sistem perbankan</h4>
    </div>
    <div class="unjani">
        <h3>UNIVERSITAS UNJANI</h3>
        <img src="img/WhatsApp Image 2023-02-06 at 09.26.13.jpeg">
        <h4>Universitas Jenderal Achmad Yani biasa disingkat sebagai UNJANI adalah sebuah perguruan tinggi di Indonesia. Kampus utamanya terletak kawasan militer yaitu di bagian selatan Kota Cimahi, 
            Jawa Barat tepatnya di Jalan Terusan Jenderal Sudirman yang bertempat di lokasi yang berdekatan dengan perguruan tinggi lain, yaitu STKIP Siliwangi Cimahi. 
            Sementara kampus utama lainnya terdapat di Kota Bandung tepatnya di Jalan Terusan Jenderal Gatot Subroto, Kiaracondong yang terletak di jalan yang sama dengan PT. Pindad </h4>
    </div>
    <div class="icommits">
        <h3>ICOMMITS</h3>
        <img src="img/WhatsApp Image 2023-02-06 at 09.26.13 (1).jpeg">
        <h4>Icommits berdiri pada tahun 2015 untuk memberikan solusi terbaik dalam mewujudkan permasalahan teknologi informasi yang selama ini banyak sekali yang belum menggunakan atau tidak sama sekali menggunakan teknologi informasi. 
            Terletak di Jalan Pasir Subur, No.10, Ancol, Regol, Kota Bandung, Jawa Barat 40254, Indonesia</h4>
    </div>
    <div class="ecconsile">
        <h3>EC CONSILE</h3>
        <img src="img/WhatsApp Image 2023-02-06 at 09.26.14.jpeg">
        <h4>EC-Council (The International Council of Electronic Commerce Consultants) adalah organisasi yang menawarkan sertifikasi, pendidikan, pelatihan, dan layanan keamanan siber dalam berbagai keterampilan keamanan siber. 
            EC-Council berkantor pusat di Albuquerque, New Mexico, dan telah mensertifikasi lebih dari 237.000 profesional dari 145 negara. EC-Council menawarkan sertifikasi profesional untuk bidang keamanan TI, seperti Certified Network Defender (CND), 
            Certified Chief Information Security Officer (CCISO), dan Computer Hacking Forensics Investigator (CHFI). Ia juga menawarkan sertifikasi di bidang yang berkaitan dengan keamanan TI, termasuk pemulihan bencana, keamanan perangkat lunak, forensik digital, dan pengetahuan keamanan TI umum.</h4>
    </div>
</body>
</html>