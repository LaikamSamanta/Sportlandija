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
    <a class="active2" href="sadalas.php?programma">Programma</a>
    <a href="sadalas.php?registracija=true">Reģistrācija</a>
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
    <div class="row1"></div>
      <h1 class="programma">Programma</h1>
      <div class="block"></div>
      <p></p>
    </div>
    <div class="row">
      <div class="six columns">
        <h3><span class="typcn typcn-device-desktop icon"></span></h3>
        <div class="ProgramText">
        <?php
include 'ADMIN/config.php';
$sql = "SELECT laiks1 FROM proglaiks WHERE id = 1";
$result1 = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row1 = $result1->fetch_assoc()) {
?>
        <?php
include 'ADMIN/config.php';
$sql = "SELECT laiks2 FROM proglaiks WHERE id = 2";
$result2 = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row2 = $result2->fetch_assoc()) {
?>
        <?php
include 'ADMIN/config.php';
$sql = "SELECT laiks3 FROM proglaiks WHERE id = 3";
$result3 = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row3 = $result3->fetch_assoc()) {
?>
        <?php
include 'ADMIN/config.php';
$sql = "SELECT laiks4 FROM proglaiks WHERE id = 4";
$result4 = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row4 = $result4->fetch_assoc()) {
?>
        <?php
include 'ADMIN/config.php';
$sql = "SELECT laiks5 FROM proglaiks WHERE id = 5";
$result5 = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row5 = $result5->fetch_assoc()) {
?>
        <?php
include 'ADMIN/config.php';
$sql = "SELECT laiks6 FROM proglaiks WHERE id = 6";
$result6 = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row6 = $result6->fetch_assoc()) {
?>
        <?php
include 'ADMIN/config.php';
$sql = "SELECT laiks7 FROM proglaiks WHERE id = 7";
$result7 = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row7 = $result7->fetch_assoc()) {
?>
        <?php
include 'ADMIN/config.php';
$sql = "SELECT laiks8 FROM proglaiks WHERE id = 8";
$result8 = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row8 = $result8->fetch_assoc()) {
?>
        <?php
include 'ADMIN/config.php';
$sql = "SELECT laiks9 FROM proglaiks WHERE id = 9";
$result9 = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row9 = $result9->fetch_assoc()) {
?>
        <?php
include 'ADMIN/config.php';
$sql = "SELECT laiks10 FROM proglaiks WHERE id = 10";
$result10 = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row10 = $result10->fetch_assoc()) {
?>
        <?php
include 'ADMIN/config.php';
$sql = "SELECT laiks11 FROM proglaiks WHERE id = 11";
$result11 = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row11 = $result11->fetch_assoc()) {
?>
        <?php
include 'ADMIN/config.php';
$sql = "SELECT laiks12 FROM proglaiks WHERE id = 12";
$result12 = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row12 = $result12->fetch_assoc()) {
      ?>

<?php
include 'ADMIN/config.php';
$sql = "SELECT teksts1 FROM progteksts WHERE id = 1";
$result13 = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row13 = $result13->fetch_assoc()) {
      ?>

<?php
include 'ADMIN/config.php';
$sql = "SELECT teksts2 FROM progteksts WHERE id = 2";
$result14 = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row14 = $result14->fetch_assoc()) {
      ?>

<?php
include 'ADMIN/config.php';
$sql = "SELECT teksts3 FROM progteksts WHERE id = 3";
$result15 = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row15 = $result15->fetch_assoc()) {
      ?>

<?php
include 'ADMIN/config.php';
$sql = "SELECT teksts4 FROM progteksts WHERE id = 4";
$result16 = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row16 = $result16->fetch_assoc()) {
      ?>

<?php
include 'ADMIN/config.php';
$sql = "SELECT teksts5 FROM progteksts WHERE id = 5";
$result17 = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row17 = $result17->fetch_assoc()) {
      ?>

<?php
include 'ADMIN/config.php';
$sql = "SELECT teksts6 FROM progteksts WHERE id = 6";
$result18 = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row18 = $result18->fetch_assoc()) {
      ?>

  <p class="linija"><b><?php echo ($row1['laiks1'])?>-<p class="redtime"><?php echo ($row2['laiks2'])?></p></b> <?php echo ($row13['teksts1'])?></p>
 
 <p class="linija"><b><?php echo ($row3['laiks3'])?>-<?php echo ($row4['laiks4'])?></b></p> <?php echo ($row14['teksts2'])?></p>
  
 <p class="linija"><b><?php echo ($row5['laiks5'])?>-<?php echo ($row6['laiks6'])?></p></b>  <?php echo ($row15['teksts3'])?></p>
  
 <p class="linija"><b><?php echo ($row7['laiks7'])?>-<?php echo ($row8['laiks8'])?></p></b> <?php echo ($row16['teksts4'])?></p>
  
 <p class="linija"><b><?php echo ($row9['laiks9'])?>-<?php echo ($row10['laiks10'])?></p></b> <?php echo ($row17['teksts5'])?></p>
  
 <p class="linija"><b><?php echo ($row11['laiks11'])?>-<p class="redtime"><?php echo ($row12['laiks12'])?></p></b> <?php echo ($row18['teksts6'])?></p>
</div>
<?php
}}
}}
}}
}}
}}
}}
}}
}}
}}
}}
}}
}}
  }}
}}
  }}
}}
  }}
}}
?>

      </div>
      <div class="six columns">
        <h3><span class="typcn typcn-pen icon"></span></h3>
      </div>
      <div class="six columns">
          <h3><span class="typcn typcn-cog-outline icon"></span></h3>
          <div class="ProgramPoga">
          <p><button onclick="location.href='https://sportlandija.lv/index.php?registracija=true';" type="button">
      Reģistrācija</button></p>
        </div>
</div>
        <div class="six columns">
          <h3><span class="typcn typcn-lightbulb icon"></span></h3>
          <p></p>
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
    <p><button class="programmapoga" onclick="location.href='https://sportlandija.lv/index.php?registracija=true';" type="button">
      Reģistrācija</button></p>
</div>
    </div>
    <div class="nine columns">
    <div class="blakus123">
    <h5 class="rjadom">Lapa ir izstrādes stadijā, paldies par sapratni!</h5>
</div>
</div>
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

</script>
</html>