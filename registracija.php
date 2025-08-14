<html>
<meta charset="UTF-8">
  <head>
  <meta name="viewport" content="width=device=width, initial-scale=1" />
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
<body>
<?php
include 'ADMIN/config.php';
$sql = "SELECT cipari FROM romiesucipari";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
?>
<header id="header">
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
    <a class="active3" href="sadalas.php?registracija=true">Reģistrācija</a>
    <a href="sadalas.php?foto=true">Foto</a>
  <a href="sadalas.php?video=true">Video</a>
        <a href="sadalas.php?parmums=true">Kontakti / Karte</a>
        <a href="sadalas.php?atbalstitaji=true">Mūs atbalsta</a>
        <a href="sadalas.php?mesatbalstam=true">Mēs atbalstam</a>

</div>
</header>
  
<!-- Par mums Sekcija
–––––––––––––––––––––––––––––––––––––––––––––––––– -->  
  
<section id="about">
  <div class="container">
    <div class="row1">
      <h1>Reģistrācija</h1>
      <div class="block"></div>
      <p></p>
    </div>
    <div class="row">
      <div class="six columns">
        <h3><span class="typcn typcn-device-desktop icon"></span></h3>
        <div class="RegistracijaText">
        <p class="dalibalv">
        <?php
include 'ADMIN/config.php';
$sql1 = "SELECT pusdinfo FROM registracija WHERE id = 1";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
  while($row1 = $result1->fetch_assoc()) {
?>
Reģistrācija = dalība + pusdienas <?php echo ($row1['pusdinfo'])?> <?php } } ?></p>
<p class="pers">Par vienu personu:</p>
<p class="reg">Līdz
<?php
include 'ADMIN/config.php';
$sql = "SELECT lidzdatums FROM registracija WHERE id = 2";
$result2 = $conn->query($sql);
if ($result2->num_rows > 0) {
  while($row2 = $result2->fetch_assoc()) {
?>
 <?php echo ($row2['lidzdatums'])?> <?php } } ?> - <p class="nosvitrots">
 <?php
include 'ADMIN/config.php';
$sql = "SELECT nosvitrcena FROM registracija WHERE id = 3";
$result3 = $conn->query($sql);
if ($result3->num_rows > 0) {
  while($row3 = $result3->fetch_assoc()) {
?>
 <?php echo ($row3['nosvitrcena'])?></p> &nbsp; <?php } } ?>
 <?php
include 'ADMIN/config.php';
$sql = "SELECT cena FROM registracija WHERE id = 4";
$result4 = $conn->query($sql);
if ($result4->num_rows > 0) {
  while($row4 = $result4->fetch_assoc()) {
?>
  <?php echo ($row4['cena'])?> <?php } } ?> EUR</p>
<p class="reg1">Uz vietas – <p class="nosvitrots">
<?php
include 'ADMIN/config.php';
$sql = "SELECT nosvitrcena2 FROM registracija WHERE id = 5";
$result5 = $conn->query($sql);
if ($result5->num_rows > 0) {
  while($row5 = $result5->fetch_assoc()) {
?>
<?php echo ($row5['nosvitrcena2']) ?></p> &nbsp; <?php } } ?> 
<?php
include 'ADMIN/config.php';
$sql = "SELECT cena2 FROM registracija WHERE id = 6";
$result6 = $conn->query($sql);
if ($result6->num_rows > 0) {
  while($row6 = $result6->fetch_assoc()) {
?>
 <?php echo ($row6['cena2'])?> <?php } } ?> EUR</p>
<p class="reg2">
<?php
include 'ADMIN/config.php';
$sql = "SELECT bezmteksts FROM registracija WHERE id = 7";
$result7 = $conn->query($sql);
if ($result7->num_rows > 0) {
  while($row7 = $result7->fetch_assoc()) {
?>
<?php echo ($row7['bezmteksts'])?> <?php } } ?></p>
</div>
</div>
  <?php
include 'ADMIN/config.php';
$sql = "SELECT papildinfo FROM registracija WHERE id = 8";
$result8 = $conn->query($sql);
if ($result8->num_rows > 0) {
  while($row8 = $result8->fetch_assoc()) {
?>
      </div>
      <br />
      <p class="covid19"><?php echo ($row8['papildinfo'])?></p>
      <?php
}
  }
  ?>
      <div class="six columns">
      </div>
      <div class="row">
        <div class="six columns">
          <h3><span class="typcn typcn-cog-outline icon"></span></h3>
          <p><button onclick="location.href='https://forms.gle/At1xWMBL3ghZbeoc9'" type="button" class="anketa">Aizpildīt reģistrācijas anketu</a></button></p>
        </div>
        <div class="six columns">
          <h3><span class="typcn typcn-lightbulb icon"></span></h3>
        </div>
      </div>
    </div>
  </div>
</section>  

<!-- Footer Section
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
    <p><button class="registracijapoga" onclick="location.href='https://sportlandija.lv/index.php?registracija=true';" type="button">
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
/* Navigation
------------------------------------------------------ */


/*----------------------------------------------------*/
/* Smooth Scrolling
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


TweenMax.staggerFrom(".heading", 0.8, {opacity: 0, y: 20, delay: 0.2}, 0.4);

//Izvēlnes poga
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Aizvērt izvēlni, kad lietotājs uzspiež virsū uz pogas
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</html>