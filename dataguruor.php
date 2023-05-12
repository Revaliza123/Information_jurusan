<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        table{
            position: absolute;
            width: 1212px;
            height: 94px;
            left: 145px;
            top: 480px;

            background: #D0F0C0;
        }
        h2{
            position: absolute;
            width: 558px;
            height: 55px;
            left: 105px;
            top: 387px;

            font-family: 'Merriweather Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 36px;
            line-height: 45px;
            text-transform: uppercase;

            color: #000000;

        }
        ul{
            position: absolute;
            margin:auto;
            width: 1485px;
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
        .profil{
            background-color: lightgrey;
            margin-top:340px;
            margin-left:100px;
            width:340px;
            height:390px;
            border:10px solid #87A96B;
            padding:60px;
           
        } 
        .profil h3{
            margin-top:10px;
            margin-left:94px;
        }
        .profil img{
            width:200px;
            display:block;
            margin-top:30px;
            margin-left:auto;
            margin-right:auto;
        }
        .profil p{
            margin-top:-20px;
            margin-left:50px;
        }
        .profil h2{
            margin-top:-5px;
            margin-left:115px;
        }
        .profil1{
            background-color: lightgrey;
            margin-top:-530px;
            margin-left:600px;
            width:340px;
            height:390px;
            border:10px solid #87A96B;
            padding:60px;
           
        } 
     
        .profil1 h3{
            margin-top:10px;
            margin-left:94px;
        }
        .profil1 img{
            width:200px;
            display:block;
            margin-top:30px;
            margin-left:auto;
            margin-right:auto;
        }
        .profil1 p{
            margin-top:-20px;
            margin-left:50px;
        }
        .profil1 h2{
            margin-top: -5px;
            margin-left: 618px;
        }
        
    </style>
    <div class="atas">
    <img src="img/Logosmkn4padalarang-removebg-preview.png">
    <h3>REKAYASA PERANGKAT LUNAK(RPL)</h3>
    <h4>SMKN 4 PADALARANG</h4>
    </div>
    <ul>
      <li><a href="berandda.php"  style="text-decoration: none;">Beranda</a></li>
      <li ><a href="dataguruor.php" style="text-decoration: none;">Data Guru</li>
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
</head>
<body>
            <div class="profil">
            <img src="img/WhatsApp Image 2023-02-19 at 16.34.24.jpeg" alt="Erik Pratama">
            <h2>Erik Pratama</h2>
            <h3>Staff Management SMKN 4 Padalarang</h3>
            <p>Bergabung dengan SMKN 4 Padalarang pada tahun 2008.
                Mengajar seluruh kelas RPL-Oracle pada mata pelajaran dasar desain grafis,
                Sistem komunikasi digital dan database </p>
            </div>
            <div class="profil1">
            <img src="img/WhatsApp Image 2023-02-19 at 16.34.23.jpeg" alt="Tamam">
           <h2>Tamam Fuadi</h2>
            <h3>Guru Produktif</h3>
            <p>Bergabung dengan SMKN 4 Padalarang pada tahun 2021.
                Mengajar seluruh kelas RPL-Oracle pada mata pelajaran Java Script dan Pemrograman Android </p>
            </div>
            <div class="profil1">
            <img src="img/WhatsApp Image 2023-02-19 at 16.34.23.jpeg" alt="Tamam">
           <h2>Tamam Fuadi</h2>
            <h3>Guru Produktif</h3>
            <p>Bergabung dengan SMKN 4 Padalarang pada tahun 2021.
                Mengajar seluruh kelas RPL-Oracle pada mata pelajaran Java Script dan Pemrograman Android </p>
            </div>
</table>
</body>
</html>