<html>
<meta charset="UTF-8">
  <head>
  <meta content="width=device-width; initial-scale=1.0; name="viewport">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
<?php
include 'ADMIN/config.php';
$sql = "SELECT cipari FROM romiesucipari";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
?>
<header id="headeris">
  <div class="title">
    <div class="smallsep heading"></div>
    <h2 class="heading">Ģimenes sporta svētki</h2>
    <h3 class="heading">Mamma, Tētis, Es</h3>
    <h1 id="inline">Sportlandijā <h1 id="inline"><?php echo ($row['cipari'])?></h1></h1>
  <?php
  }
}
  ?>
  <br />
  <br />
    <a class="smoothscroll" href="#about">
    <div class="mouse">
      <div class="wheel"></div>
    </div>
    </a> </div>
    
  <div class="navbar">
    <a href="index.php">Sākums</a>
    <a href="sadalas.php?programma">Programma</a>
    <a href="sadalas.php?registracija=true">Reģistrācija</a>
    <a class="active4" href="sadalas.php?foto=true">Foto</a>
  <a href="sadalas.php?video=true">Video</a>
        <a href="sadalas.php?parmums=true">Kontakti / Karte</a>
        <a href="sadalas.php?atbalstitaji=true">Mūs atbalsta</a>
        <a href="sadalas.php?mesatbalstam=true">Mēs atbalstam</a>

</div>
</header>
  
<!-- Par mums Sekcija
–––––––––––––––––––––––––––––––––––––––––––––––––– -->  
  <br />
  <br />
  <br />
<section id="about">
  <div class="container">
      <h1>Foto</h1>
      <p></p> 
      <div class="row">
        <div class="column">
             <img src="foto/IMG_1.JPG" onclick="openModal();currentSlide(1)" class="hover-shadow" width="230px" height="180px">
        </div>
        <div class="column">
             <img src="foto/IMG_2.JPG" onclick="openModal();currentSlide(2)" class="hover-shadow" width="146px" height="190px">
        </div>
        <div class="column">
             <img src="foto/IMG_3.JPG" onclick="openModal();currentSlide(3)" class="hover-shadow" width="220px" height="190px">
        </div>
    </div>

    <div class="row">
        <div class="column">
             <img src="foto/IMG_4.JPG" onclick="openModal();currentSlide(4)" class="hover-shadow" width="190px" height="200px">
        </div>
        <div class="column">
             <img src="foto/IMG_5.JPG" onclick="openModal();currentSlide(5)" class="hover-shadow" width="210px" height="200px">
        </div>
        <div class="column">
             <img src="foto/IMG_6.JPG" onclick="openModal();currentSlide(6)" class="hover-shadow" width="210px" height="200px">
        </div>
        </div>

    <div class="row">
        <div class="column">
             <img src="foto/IMG_7.JPG" onclick="openModal();currentSlide(7)" class="hover-shadow" width="210px" height="170px">
        </div>
        <div class="column">
             <img src="foto/IMG_8.JPG" onclick="openModal();currentSlide(8)" class="hover-shadow" width="210px" height="165px">
        </div>
        <div class="column">
             <img src="foto/IMG_9.JPG" onclick="openModal();currentSlide(9)" class="hover-shadow" width="220px" height="180px">
        </div>
    </div>

    <div class="row">
        <div class="column">
             <img src="foto/IMG_10.JPG" onclick="openModal();currentSlide(10)" class="hover-shadow" width="165px" height="190px">
        </div>
        <div class="column">
             <img src="foto/IMG_11.JPG" onclick="openModal();currentSlide(11)" class="hover-shadow" width="220px" height="170px">
        </div>
        <div class="column">
             <img src="foto/IMG_12.JPG" onclick="openModal();currentSlide(12)" class="hover-shadow" width="220px" height="170px">
        </div>
    </div>

    <div class="row">
        <div class="column">
             <img src="foto/IMG_13.JPG" onclick="openModal();currentSlide(13)" class="hover-shadow" width="180px" height="190px">
        </div>
        <div class="column">
             <img src="foto/IMG_14.JPG" onclick="openModal();currentSlide(14)" class="hover-shadow" width="180px" height="190px">
        </div>
        <div class="column">
             <img src="foto/IMG_15.JPG" onclick="openModal();currentSlide(15)" class="hover-shadow" width="160px" height="190px">
        </div>
    </div>

    <div class="row">
        <div class="column">
             <img src="foto/IMG_16.JPG" onclick="openModal();currentSlide(16)" class="hover-shadow" width="240px" height="180px">
        </div>
        <div class="column">
             <img src="foto/IMG_17.JPG" onclick="openModal();currentSlide(17)" class="hover-shadow" width="240px" height="180px">
        </div>   
        <div class="column">
             <img src="foto/IMG_18.JPG" onclick="openModal();currentSlide(18)" class="hover-shadow" width="240px" height="180px">
        </div>
</div>
        <div class="row">
        <div class="column">
             <img src="foto/IMG_19.JPG" onclick="openModal();currentSlide(19)" class="hover-shadow" width="240px" height="180px">
        </div>
        <div class="column">
             <img src="foto/IMG_20.JPG" onclick="openModal();currentSlide(20)" class="hover-shadow" width="240px" height="180px">
        </div>
        <div class="column">
             <img src="foto/IMG_21.JPG" onclick="openModal();currentSlide(21)" class="hover-shadow" width="240px" height="180px">
        </div>
</div>
<div class="row">
        <div class="column">
             <img src="foto/IMG_22.JPG" onclick="openModal();currentSlide(22)" class="hover-shadow" width="240px" height="180px">
        </div>
        <div class="column">
             <img src="foto/IMG_23.JPG" onclick="openModal();currentSlide(23)" class="hover-shadow" width="230px" height="190px">
        </div>
        <div class="column">
             <img src="foto/IMG_24.JPG" onclick="openModal();currentSlide(24)" class="hover-shadow" width="240px" height="180px">
        </div>
</div>
        <div class="row">
        <div class="column">
             <img src="foto/IMG_25.JPG" onclick="openModal();currentSlide(25)" class="hover-shadow" width="210px" height="180px">
        </div>
        <div class="column">
             <img src="foto/IMG_26.JPG" onclick="openModal();currentSlide(26)" class="hover-shadow" width="180px" height="180px">
        </div>
        <div class="column">
             <img src="foto/IMG_27.JPG" onclick="openModal();currentSlide(27)" class="hover-shadow" width="200px" height="190px">
        </div>
</div>

        <div class="row">
        <div class="column">
             <img src="foto/IMG_28.JPG" onclick="openModal();currentSlide(28)" class="hover-shadow" width="180px" height="190px">
        </div>
        <div class="column">
             <img src="foto/IMG_29.JPG" onclick="openModal();currentSlide(29)" class="hover-shadow" width="185px" height="190px">
        </div>
        <div class="column">
        <img src="foto/IMG_30.JPG" onclick="openModal();currentSlide(30)" class="hover-shadow" width="230px" height="190px">
        </div>
</div>

        <div class="row">
        <div class="column">
             <img src="foto/IMG_31.JPG" onclick="openModal();currentSlide(31)" class="hover-shadow" width="235px" height="190px">
        </div>
        <div class="column">
             <img src="foto/IMG_32.JPG" onclick="openModal();currentSlide(32)" class="hover-shadow" width="160px" height="190px">
        </div>
        <div class="column">
             <img src="foto/IMG_33.JPG" onclick="openModal();currentSlide(33)" class="hover-shadow" width="250px" height="190px">
        </div>
    </div>

        <div class="row">
        <div class="column">
             <img src="foto/IMG_34.JPG" onclick="openModal();currentSlide(34)" class="hover-shadow" width="200px" height="190px">
        </div>
        <div class="column">
             <img src="foto/IMG_35.JPG" onclick="openModal();currentSlide(35)" class="hover-shadow" width="225px" height="190px">
        </div>
        <div class="column">
             <img src="foto/IMG_36.JPG" onclick="openModal();currentSlide(36)" class="hover-shadow" width="225px" height="190px">
        </div>
        </div>
        <div class="row">
        <div class="column">
             <img src="foto/IMG_37.JPG" onclick="openModal();currentSlide(37)" class="hover-shadow" width="225px" height="190px">
        </div>
        <div class="column">
             <img src="foto/IMG_38.JPG" onclick="openModal();currentSlide(38)" class="hover-shadow" width="225px" height="190px">
        </div>
        <div class="column">
             <img src="foto/IMG_39.JPG" onclick="openModal();currentSlide(39)" class="hover-shadow" width="225px" height="190px">
        </div>
</div>
<div class="row">
        <div class="column">
             <img src="foto/IMG_40.JPG" onclick="openModal();currentSlide(40)" class="hover-shadow" width="225px" height="190px">
        </div>
        <div class="column">
             <img src="foto/IMG_41.JPG" onclick="openModal();currentSlide(41)" class="hover-shadow" width="225px" height="190px">
        </div>
        <div class="column">
             <img src="foto/IMG_42.JPG" onclick="openModal();currentSlide(42)" class="hover-shadow" width="225px" height="190px">
        </div>
</div>
<div class="row">
        <div class="column">
             <img src="foto/IMG_43.JPG" onclick="openModal();currentSlide(43)" class="hover-shadow" width="225px" height="190px">
        </div>
        <div class="column">
             <img src="foto/IMG_44.JPG" onclick="openModal();currentSlide(44)" class="hover-shadow" width="225px" height="190px">
        </div>
        <div class="column">
             <img src="foto/IMG_45.JPG" onclick="openModal();currentSlide(45)" class="hover-shadow" width="225px" height="190px">
        </div>
</div>
<div class="row">
        <div class="column">
        <img src="foto/IMG_46.JPG" onclick="openModal();currentSlide(46)" class="hover-shadow" width="180px" height="190px">
        </div>
        <div class="column">
        <img src="foto/IMG_47.JPG" onclick="openModal();currentSlide(47)" class="hover-shadow" width="240px" height="190px">
        </div>
        <div class="column">    
        <img src="foto/IMG_48.JPG" onclick="openModal();currentSlide(48)" class="hover-shadow" width="225px" height="190px">
        </div>
</div>
    <div class="row">
        <div class="column">
             <img src="foto/foto1.png" onclick="openModal();currentSlide(49)" class="hover-shadow" width="260px" height="190px">
        </div>
        <div class="column">
             <img src="foto/foto2.png" onclick="openModal();currentSlide(50)" class="hover-shadow" width="260px" height="190px">
        </div>
        <div class="column">
             <img src="foto/foto3.png" onclick="openModal();currentSlide(51)" class="hover-shadow" width="260px" height="190px">
        </div>
    </div>

    <div class="row">
        <div class="column">
             <img src="foto/foto4.png" onclick="openModal();currentSlide(52)" class="hover-shadow" width="260px" height="190px">
        </div>
        <div class="column">
             <img src="foto/foto5.png" onclick="openModal();currentSlide(53)" class="hover-shadow" width="260px" height="190px">
        </div>
        <div class="column">
             <img src="foto/foto6.png" onclick="openModal();currentSlide(54)" class="hover-shadow" width="260px" height="190px">
        </div>
        </div>

    <div class="row">
        <div class="column">
             <img src="foto/foto7.png" onclick="openModal();currentSlide(55)" class="hover-shadow" width="260px" height="190px">
        </div>
        <div class="column">
             <img src="foto/foto8.png" onclick="openModal();currentSlide(56)" class="hover-shadow" width="260px" height="190px">
        </div>
        <div class="column">
             <img src="foto/foto9.png" onclick="openModal();currentSlide(57)" class="hover-shadow" width="260px" height="190px">
        </div>
    </div>

    <div class="row">
        <div class="column">
             <img src="foto/foto10.png" onclick="openModal();currentSlide(58)" class="hover-shadow" width="260px" height="190px">
        </div>
        <div class="column">
             <img src="foto/foto11.png" onclick="openModal();currentSlide(59)" class="hover-shadow" width="260px" height="190px">
        </div>
        <div class="column">
             <img src="foto/foto12.png" onclick="openModal();currentSlide(60)" class="hover-shadow" width="260px" height="190px">
        </div>
    </div>

    <div class="row">
        <div class="column">
             <img src="foto/foto13.png" onclick="openModal();currentSlide(61)" class="hover-shadow" width="260px" height="190px">
        </div>
        <div class="column">
             <img src="foto/foto14.png" onclick="openModal();currentSlide(62)" class="hover-shadow" width="260px" height="190px">
        </div>
        <div class="column">
             <img src="foto/foto15.png" onclick="openModal();currentSlide(63)" class="hover-shadow" width="260px" height="190px">
        </div>
    </div>

    <div class="row">
        <div class="column">
             <img src="foto/foto16.png" onclick="openModal();currentSlide(64)" class="hover-shadow" width="260px" height="190px">
        </div>
        <div class="column">
             <img src="foto/foto17.png" onclick="openModal();currentSlide(65)" class="hover-shadow" width="260px" height="190px">
        </div>   
        <div class="column">
             <img src="foto/foto18.png" onclick="openModal();currentSlide(66)" class="hover-shadow" width="260px" height="190px">
        </div>
</div>
        <div class="row">
        <div class="column">
             <img src="foto/foto19.png" onclick="openModal();currentSlide(67)" class="hover-shadow" width="260px" height="190px">
        </div>
        <div class="column">
             <img src="foto/foto20.png" onclick="openModal();currentSlide(68)" class="hover-shadow" width="260px" height="190px">
        </div>
        <div class="column">
             <img src="foto/foto21.png" onclick="openModal();currentSlide(69)" class="hover-shadow" width="260px" height="190px">
        </div>
</div>
<div class="row">
        <div class="column">
             <img src="foto/foto22.png" onclick="openModal();currentSlide(70)" class="hover-shadow" width="260px" height="190px">
        </div>
        <div class="column">
             <img src="foto/foto23.png" onclick="openModal();currentSlide(71)" class="hover-shadow" width="260px" height="190px">
        </div>
        <div class="column">
             <img src="foto/foto24.png" onclick="openModal();currentSlide(72)" class="hover-shadow" width="260px" height="190px">
        </div>
</div>


        <div class="row">
        <div class="column">
             <img src="foto/foto25.png" onclick="openModal();currentSlide(73)" class="hover-shadow" width="260px" height="190px">
        </div>
        <div class="column">
             <img src="foto/foto26.png" onclick="openModal();currentSlide(74)" class="hover-shadow" width="260px" height="190px">
        </div>
        <div class="column">
             <img src="foto/foto27.png" onclick="openModal();currentSlide(75)" class="hover-shadow" width="260px" height="190px">
        </div>
</div>

        <div class="row">
        <div class="column">
             <img src="foto/foto28.png" onclick="openModal();currentSlide(76)" class="hover-shadow" width="260px" height="190px">
        </div>
        <div class="column">
             <img src="foto/foto29.png" onclick="openModal();currentSlide(77)" class="hover-shadow" width="260px" height="190px">
        </div>
        <div class="column">
        <img src="foto/foto47.png" onclick="openModal();currentSlide(78)" class="hover-shadow" width="260px" height="190px">
        </div>
</div>

        <div class="row">
        <div class="column">
             <img src="foto/foto31.png" onclick="openModal();currentSlide(79)" class="hover-shadow" width="260px" height="190px">
        </div>
        <div class="column">
             <img src="foto/foto32.png" onclick="openModal();currentSlide(80)" class="hover-shadow" width="260px" height="190px">
        </div>
        <div class="column">
             <img src="foto/foto33.png" onclick="openModal();currentSlide(81)" class="hover-shadow" width="260px" height="190px">
        </div>
    </div>

        <div class="row">
        <div class="column">
             <img src="foto/foto34.png" onclick="openModal();currentSlide(82)" class="hover-shadow" width="260px" height="190px">
        </div>
        <div class="column">
             <img src="foto/foto35.png" onclick="openModal();currentSlide(83)" class="hover-shadow" width="260px" height="190px">
        </div>
        <div class="column">
             <img src="foto/foto48.JPG" onclick="openModal();currentSlide(84)" class="hover-shadow" width="260px" height="190px">
        </div>
        </div>
        <div class="row">
        <div class="column">
             <img src="foto/foto37.png" onclick="openModal();currentSlide(85)" class="hover-shadow" width="260px" height="190px">
        </div>
        <div class="column">
             <img src="foto/foto38.png" onclick="openModal();currentSlide(86)" class="hover-shadow" width="260px" height="190px">
        </div>
        <div class="column">
             <img src="foto/foto39.png" onclick="openModal();currentSlide(87)" class="hover-shadow" width="260px" height="190px">
        </div>
</div>
<div class="row">
        <div class="column">
             <img src="foto/foto40.png" onclick="openModal();currentSlide(88)" class="hover-shadow" width="260px" height="190px">
        </div>
        <div class="column">
             <img src="foto/foto41.png" onclick="openModal();currentSlide(89)" class="hover-shadow" width="260px" height="190px">
        </div>
        <div class="column">
             <img src="foto/foto42.png" onclick="openModal();currentSlide(90)" class="hover-shadow" width="260px" height="190px">
        </div>
</div>
<div class="row">
        <div class="column">
             <img src="foto/foto43.png" onclick="openModal();currentSlide(91)" class="hover-shadow" width="260px" height="190px">
        </div>
        <div class="column">
             <img src="foto/foto44.png" onclick="openModal();currentSlide(92)" class="hover-shadow" width="260px" height="190px">
        </div>
        <div class="column">
             <img src="foto/foto46.png" onclick="openModal();currentSlide(93)" class="hover-shadow" width="260px" height="190px">
        </div>
</div>
<div class="row">
        <div class="column">
        <img src="foto/foto45.jpg" onclick="openModal();currentSlide(94)" class="hover-shadow" width="250px" height="350px">
        </div>
        <div class="column">
        <img src="foto/foto30.png" onclick="openModal();currentSlide(95)" class="hover-shadow" width="250px" height="350px">
        </div>
        <div class="column">    
        <img src="foto/foto36.png" onclick="openModal();currentSlide(96)" class="hover-shadow" width="250px" height="350px">
        </div>
</div>

</div> <!-- .mainforo -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

<div class="mySlides">
      <div class="numbertext">1 / 96</div>
      <img src="foto/IMG_1.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">2 / 96</div>
      <img src="foto/IMG_2.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">3 / 96</div>
      <img src="foto/IMG_3.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">4 / 96</div>
      <img src="foto/IMG_4.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

      <div class="mySlides">
      <div class="numbertext">5 / 96</div>
      <img src="foto/IMG_5.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">6 / 96</div>
      <img src="foto/IMG_6.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">7 / 96</div>
      <img src="foto/IMG_7.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">8 / 96</div>
      <img src="foto/IMG_8.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">9 / 96</div>
      <img src="foto/IMG_9.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">10 / 96</div>
      <img src="foto/IMG_10.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">11 / 96</div>
      <img src="foto/IMG_11.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">12 / 96</div>
      <img src="foto/IMG_12.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">13 / 96</div>
      <img src="foto/IMG_13.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">14 / 96</div>
      <img src="foto/IMG_14.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">15 / 96</div>
      <img src="foto/IMG_15.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">16 / 96</div>
      <img src="foto/IMG_16.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">17 / 96</div>
      <img src="foto/IMG_17.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">18 / 96</div>
      <img src="foto/IMG_18.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">19 / 96</div>
      <img src="foto/IMG_19.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">20 / 96</div>
      <img src="foto/IMG_20.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">21 / 96</div>
      <img src="foto/IMG_21.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">22 / 96</div>
      <img src="foto/IMG_22.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->
    
    <div class="mySlides">
      <div class="numbertext">23 / 96</div>
      <img src="foto/IMG_23.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">24 / 96</div>
      <img src="foto/IMG_24.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">25 / 96</div>
      <img src="foto/IMG_25.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">26 / 96</div>
      <img src="foto/IMG_26.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

      <div class="mySlides">
      <div class="numbertext">27 / 96</div>
      <img src="foto/IMG_27.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">28 / 96</div>
      <img src="foto/IMG_28.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">29 / 96</div>
      <img src="foto/IMG_29.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">30 / 96</div>
      <img src="foto/IMG_30.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">31 / 96</div>
      <img src="foto/IMG_31.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">32 / 96</div>
      <img src="foto/IMG_32.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">33 / 96</div>
      <img src="foto/IMG_33.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">34 / 96</div>
      <img src="foto/IMG_34.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">35 / 96</div>
      <img src="foto/IMG_35.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">36 / 96</div>
      <img src="foto/IMG_36.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">37 / 96</div>
      <img src="foto/IMG_37.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">38 / 96</div>
      <img src="foto/IMG_38.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">39 / 96</div>
      <img src="foto/IMG_39.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">40 / 96</div>
      <img src="foto/IMG_40.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">41 / 96</div>
      <img src="foto/IMG_41.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">42 / 96</div>
      <img src="foto/IMG_42.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">43 / 96</div>
      <img src="foto/IMG_43.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">44 / 96</div>
      <img src="foto/IMG_44.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">45 / 96</div>
      <img src="foto/IMG_45.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">46 / 96</div>
      <img src="foto/IMG_46.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">47 / 96</div>
      <img src="foto/IMG_47.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    
    <div class="mySlides">
      <div class="numbertext">48 / 96</div>
      <img src="foto/IMG_48.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">49 / 96</div>
      <img src="foto/foto1.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">50 / 96</div>
      <img src="foto/foto2.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">51 / 96</div>
      <img src="foto/foto3.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">52 / 96</div>
      <img src="foto/foto4.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

      <div class="mySlides">
      <div class="numbertext">53 / 96</div>
      <img src="foto/foto5.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">54 / 96</div>
      <img src="foto/foto6.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">55 / 96</div>
      <img src="foto/foto7.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">56 / 96</div>
      <img src="foto/foto8.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">57 / 96</div>
      <img src="foto/foto9.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">58 / 96</div>
      <img src="foto/foto10.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">59 / 96</div>
      <img src="foto/foto11.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">60 / 96</div>
      <img src="foto/foto12.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">61 / 96</div>
      <img src="foto/foto13.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">62 / 96</div>
      <img src="foto/foto14.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">63 / 96</div>
      <img src="foto/foto15.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">64 / 96</div>
      <img src="foto/foto16.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">65 / 96</div>
      <img src="foto/foto17.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">66 / 96</div>
      <img src="foto/foto18.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">67 / 96</div>
      <img src="foto/foto19.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">68 / 96</div>
      <img src="foto/foto20.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">69 / 96</div>
      <img src="foto/foto21.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">70 / 96</div>
      <img src="foto/foto22.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->
    
    <div class="mySlides">
      <div class="numbertext">71 / 96</div>
      <img src="foto/foto23.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">72 / 96</div>
      <img src="foto/foto24.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">73 / 96</div>
      <img src="foto/foto25.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">74 / 96</div>
      <img src="foto/foto26.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

      <div class="mySlides">
      <div class="numbertext">75 / 96</div>
      <img src="foto/foto27.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">76 / 96</div>
      <img src="foto/foto28.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">77 / 96</div>
      <img src="foto/foto29.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">78 / 96</div>
      <img src="foto/foto47.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">79 / 96</div>
      <img src="foto/foto31.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">80 / 96</div>
      <img src="foto/foto32.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">81 / 96</div>
      <img src="foto/foto33.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">82 / 96</div>
      <img src="foto/foto34.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">83 / 96</div>
      <img src="foto/foto35.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">84 / 96</div>
      <img src="foto/foto48.JPG" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">85 / 96</div>
      <img src="foto/foto37.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">86 / 96</div>
      <img src="foto/foto38.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">87 / 96</div>
      <img src="foto/foto39.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">88 / 96</div>
      <img src="foto/foto40.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">89 / 96</div>
      <img src="foto/foto41.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">90 / 96</div>
      <img src="foto/foto42.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">91 / 96</div>
      <img src="foto/foto43.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">92 / 96</div>
      <img src="foto/foto44.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">93 / 96</div>
      <img src="foto/foto46.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">94 / 96</div>
      <img src="foto/foto45.jpg" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    <div class="mySlides">
      <div class="numbertext">95 / 96</div>
      <img src="foto/foto30.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->

    
    <div class="mySlides">
      <div class="numbertext">96 / 96</div>
      <img src="foto/foto36.png" style="width:100%" class="modulis">
    </div> <!-- .MySlides -->



    <!-- Uz priekšu un atpakaļ kontroles -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_1.JPG" onclick="currentSlide(1)" width="230px" height="180px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_2.JPG" onclick="currentSlide(2)" width="146px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_3.JPG" onclick="currentSlide(3)" width="220px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_4.JPG" onclick="currentSlide(4)" width="190px" height="200px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_5.JPG" onclick="currentSlide(5)" width="210px" height="200px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_6.JPG" onclick="currentSlide(6)" width="210px" height="200px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_7.JPG" onclick="currentSlide(7)" width="210px" height="170px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_8.JPG" onclick="currentSlide(8)" width="210px" height="165px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_9.JPG" onclick="currentSlide(9)" width="220px" height="180px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_10.JPG" onclick="currentSlide(10)" width="165px" height="180px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_11.JPG" onclick="currentSlide(11)" width="220px" height="180px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_12.JPG" onclick="currentSlide(12)" width="220px" height="180px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_13.JPG" onclick="currentSlide(13)" width="180px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_14.JPG" onclick="currentSlide(14)" width="180px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_15.JPG" onclick="currentSlide(15)" width="160px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_16.JPG" onclick="currentSlide(16)" width="240px" height="180px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_17.JPG" onclick="currentSlide(17)" width="240px" height="180px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_18.JPG" onclick="currentSlide(18)" width="240px" height="180px">
    </div>
    
    <div class="column">
      <img class="demo" src="foto/IMG_19.JPG" onclick="currentSlide(19)" width="240px" height="180px">
    </div>
    
    <div class="column">
      <img class="demo" src="foto/IMG_20.JPG" onclick="currentSlide(20)" width="240px" height="180px">
    </div>
    
    <div class="column">
      <img class="demo" src="foto/IMG_21.JPG" onclick="currentSlide(21)" width="240px" height="180px">
    </div>
    
    <div class="column">
      <img class="demo" src="foto/IMG_22.JPG" onclick="currentSlide(22)" width="240px" height="180px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_23.JPG" onclick="currentSlide(23)" width="230px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_24.JPG" onclick="currentSlide(24)" width="240px" height="180px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_25.JPG" onclick="currentSlide(25)" width="210px" height="200px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_26.JPG" onclick="currentSlide(26)" width="180px" height="180px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_27.JPG" onclick="currentSlide(27)" width="200px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_28.JPG" onclick="currentSlide(28)" width="180px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_29.JPG" onclick="currentSlide(29)" width="185px" height="190px"> 
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_30.JPG" onclick="currentSlide(30)" width="230px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_31.JPG" onclick="currentSlide(31)" width="235px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_32.JPG" onclick="currentSlide(32)" width="160px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_33.JPG" onclick="currentSlide(33)" width="250px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_34.JPG" onclick="currentSlide(34)" width="200px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_35.JPG" onclick="currentSlide(35)" width="225px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_36.JPG" onclick="currentSlide(36)" width="225px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_37.JPG" onclick="currentSlide(37)" width="225px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_38.JPG" onclick="currentSlide(38)" width="225px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_39.JPG" onclick="currentSlide(39)" width="225px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_40.JPG" onclick="currentSlide(40)" width="225px" height="190px">
    </div>
    
    <div class="column">
      <img class="demo" src="foto/IMG_41.JPG" onclick="currentSlide(41)" width="225px" height="190px">
    </div>
    
    <div class="column">
      <img class="demo" src="foto/IMG_42.JPG" onclick="currentSlide(42)" width="225px" height="190px">
    </div>
    
    <div class="column">
      <img class="demo" src="foto/IMG_43.JPG" onclick="currentSlide(43)" width="225px" height="190px">
    </div>
    
    <div class="column">
      <img class="demo" src="foto/IMG_44.JPG" onclick="currentSlide(44)" width="225px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_45.JPG" onclick="currentSlide(45)" width="225px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_46.JPG" onclick="currentSlide(46)" width="180px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_47.JPG" onclick="currentSlide(47)" width="240px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/IMG_48.JPG" onclick="currentSlide(48)" width="225px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto1.png" onclick="currentSlide(49)" width="260px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto2.png" onclick="currentSlide(50)" width="260px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto3.png" onclick="currentSlide(51)" width="260px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto4.png" onclick="currentSlide(52)" width="260px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto5.png" onclick="currentSlide(53)" width="260px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto6.png" onclick="currentSlide(54)" width="260px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto7.png" onclick="currentSlide(55)" width="260px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto8.png" onclick="currentSlide(56)" width="260px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto9.png" onclick="currentSlide(57)" width="260px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto10.png" onclick="currentSlide(58)" width="260px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto11.png" onclick="currentSlide(59)" width="260px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto12.png" onclick="currentSlide(60)" width="260px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto13.png" onclick="currentSlide(61)" width="260px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto14.png" onclick="currentSlide(62)" width="260px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto15.png" onclick="currentSlide(63)" width="260px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto16.png" onclick="currentSlide(64)" width="260px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto17.png" onclick="currentSlide(65)" width="260px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto18.png" onclick="currentSlide(66)" width="260px" height="190px">
    </div>
    
    <div class="column">
      <img class="demo" src="foto/foto19.png" onclick="currentSlide(67)" width="260px" height="190px">
    </div>
    
    <div class="column">
      <img class="demo" src="foto/foto20.png" onclick="currentSlide(68)" width="260px" height="190px">
    </div>
    
    <div class="column">
      <img class="demo" src="foto/foto21.png" onclick="currentSlide(69)" width="260px" height="190px">
    </div>
    
    <div class="column">
      <img class="demo" src="foto/foto22.png" onclick="currentSlide(70)" width="260px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto23.png" onclick="currentSlide(71)" width="260px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto24.png" onclick="currentSlide(72)" width="260px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto25.png" onclick="currentSlide(73)" width="260px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto26.png" onclick="currentSlide(74)" width="260px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto27.png" onclick="currentSlide(75)" width="260px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto28.png" onclick="currentSlide(76)" width="260px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto29.png" onclick="currentSlide(77)" width="260px" height="190px"> 
    </div>

    <div class="column">
      <img class="demo" src="foto/foto47.png" onclick="currentSlide(78)" width="260px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto31.png" onclick="currentSlide(79)" width="260px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto32.png" onclick="currentSlide(80)" width="260px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto33.png" onclick="currentSlide(81)" width="260px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto34.png" onclick="currentSlide(82)" width="260px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto35.png" onclick="currentSlide(83)" width="260px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto48.JPG" onclick="currentSlide(84)" width="260px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto37.png" onclick="currentSlide(85)" width="260px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto38.png" onclick="currentSlide(86)" width="260px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto39.png" onclick="currentSlide(87)" width="260px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto40.png" onclick="currentSlide(88)" width="260px" height="190px">
    </div>
    
    <div class="column">
      <img class="demo" src="foto/foto41.png" onclick="currentSlide(89)" width="260px" height="190px">
    </div>
    
    <div class="column">
      <img class="demo" src="foto/foto42.png" onclick="currentSlide(90)" width="260px" height="190px">
    </div>
    
    <div class="column">
      <img class="demo" src="foto/foto43.png" onclick="currentSlide(91)" width="260px" height="190px">
    </div>
    
    <div class="column">
      <img class="demo" src="foto/foto44.png" onclick="currentSlide(92)" width="260px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto46.png" onclick="currentSlide(93)" width="260px" height="190px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto45.jpg" onclick="currentSlide(94)" width="260px" height="300px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto30.png" onclick="currentSlide(95)" width="260px" height="300px">
    </div>

    <div class="column">
      <img class="demo" src="foto/foto36.png" onclick="currentSlide(96)" width="260px" height="300px">
    </div>
</div>
</div> <!-- .main -->
      <div class="six columns">
      </div>
      <div class="row">
        <div class="six columns">
          <h3><span class="typcn typcn-cog-outline icon"></span></h3>
        </div>
        <div class="six columns">
          <h3><span class="typcn typcn-lightbulb icon"></span></h3>
        </div>
      </div>
    </div>
  </div>
</section>  

<!-- Fūtera Sekcija
–––––––––––––––––––––––––––––––––––––––––––––––––– -->  

<footer>
  <div class="container">
    <div class="nine columns">
      <div id="container">
        <div class="footer">
            <div class="news">
        <div class="facebook">
            <a href="https://www.facebook.com/events/291899375371214/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        </div>
    
        <div class="instagram">
            <a href="https://www.instagram.com/kefa_lv/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
    
        <div class="youtube">
            <a href="https://www.youtube.com/user/KlubIskatel/featured"><i class="fa fa-youtube" aria-hidden="true"></i></a>
        </div>

        <div class="blakus">
    <p><button class="fotopoga" onclick="location.href='https://sportlandija.lv/index.php?registracija=true';" type="button">
      Reģistrācija</button></p>
</div>
    </div>
    <div class="nine columns">
    <div class="blakus123">
    <h5 class="rjadom">Lapa ir izstrādes stadijā, paldies par sapratni!</h5>
</div>
</div>
    <div class="three columns"> <span class="typcn typcn-social-facebook-circular socialIcons"></span> <span class="typcn typcn-social-instagram-circular socialIcons"></span> <span class="typcn typcn-social-google-plus-circular socialIcons"></span> <span class="typcn typcn-social-linkedin-circular socialIcons"></span> </div>
  </div>
    </div>

</footer>
</body>
<script>
  function fade($ele) {
    $ele.fadeIn(1000).delay(3000).fadeOut(1000, function() {
        var $next = $(this).next('.quote');
        fade($next.length > 0 ? $next : $(this).parent().children().first());
   });
}
fade($('.quoteLoop > .quote').first());


/*----------------------------------------------------*/
/* Skrollings
------------------------------------------------------ */

jQuery(document).ready(function($) {

   $('.smoothscroll').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash,
	    $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 800, 'swing', function () {
	        window.location.hash = target;
	    });
	});
  
});

//dizains fotogrāfijām un headingam
TweenMax.staggerFrom(".heading", 0.8, {opacity: 0, y: 20, delay: 0.2}, 0.4);

function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

//pārvietošanās no viena attēla uz otru
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

</script>
</html>