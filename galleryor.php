<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GALERI</title>
    <link rel="icon" href="img/WhatsApp Image 2023-02-01 at 17.43.30.jpeg" type="immage/x-icon">
<style>
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
        table {
          border-collapse: collapse;
          width: 80%;
          background-color: #D0F0C0;
          margin-top:500px;
  

  
        }

        th, td {
          text-align: center;
          padding: 8px;
  
  
        }
            tr:nth-child(even) {background-color: #FFFF;}
            ul{
            position: absolute;
            width: 1535px;
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
    .atas{
        margin-bottom: 200px;
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
  
       
div.gallery {
  margin: 5px;
  border: 5px solid #ccc;
  float: left;
  width: 350px;
  margin-top:100px;
}
.gallery{
            
        }

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px 15px;
  text-align: center;
}
</style>
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
  <div class="atas">
  <img src="img/Logosmkn4padalarang-removebg-preview.png">
    <h3>REKAYASA PERANGKAT LUNAK(RPL)</h3>
    <h4>SMKN 4 PADALARANG</h4>
  </div>

<div class="gallery">
  <a target="_blank" href="img/WhatsApp Image 2023-02-06 at 09.19.25.jpeg">
    <img src="img/WhatsApp Image 2023-02-06 at 09.19.25.jpeg" alt="Cinque Terre" width="600" height="600">
  </a>
  <div class="desc"style="color: black">Foto Siswa Kelas 11 RPL</div>
</div>

<div class="gallery">
  <a target="_blank" href="img/WhatsApp Image 2023-01-30 at 14.23.11.jpeg"style="color: white">
    <img src="img/WhatsApp Image 2023-01-30 at 14.23.11.jpeg" alt="Forest" width="600" height="600">
  </a>
  <div class="desc"style="color: black">Foto Sekolah SMKN 4 Padalarang</div>
</div>

<div class="gallery">
  <a target="_blank" href="foto3.jpeg">
    <img src="foto3.jpeg" alt="Northern Lights" width="600" height="600">
  </a>
  <div class="desc"style="color: white">ANGKAT RAPOTNYAAAAA</div>
</div>

<div class="gallery">
  <a target="_blank" href="foto4.jpeg">
    <img src="foto4.jpeg" alt="Mountains" width="600" height="600">
  </a>
  <div class="desc"style="color: white">CISS DULUU</div>
</div>

</body>
</html>