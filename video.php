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
      <a href="sadalas.php?foto=true">Foto</a>
    <a class="active5" href="sadalas.php?video=true">Video</a>
    <a href="sadalas.php?parmums=true">Kontakti / Karte</a>
          <a href="sadalas.php?atbalstitaji=true">Mūs atbalsta</a>
          <a href="sadalas.php?mesatbalstam=true">Mēs atbalstam</a>
  
  </div>
</header>
  
<!-- Par mums Sekcija(About)
–––––––––––––––––––––––––––––––––––––––––––––––––– -->  
  <div class="main">
<section id="about">
  <div class="container">
    <div class="row1"></div>
      <h1>Video</h1>
      <div class="block"></div>
      <h4 class="kontakti"></h4>
      <p></p>
    </div>
    <div class="row">
      <div class="six columns">
        <h3><span class="typcn typcn-device-desktop icon"></span></h3>
        <div class="video2018">
        <h4>Mamma, tētis, es Sportlandijā 2018</h4>
        <iframe width="420" height="280" src="https://www.youtube.com/embed/oINoRoDwdgA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
        </div>
      <div class="six columns">
        <h3><span class="typcn typcn-pen icon"></span></h3>
        <h4>Mamma, tētis, es Sportlandijā 2017</h4>
        <iframe width="420" height="280" src="https://www.youtube.com/embed/PIlHZG61abc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           </div>
        </div>
    <div class="row">
      <div class="six columns">
          <h3><span class="typcn typcn-cog-outline icon"></span></h3>
          <div class="video2018">
          <h4>Mamma, tētis, es Sportlandijā 2016</h4>
          <iframe width="420" height="280" src="https://www.youtube.com/embed/olRAIJVq9xQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        </div>
      <div class="six columns">
          <h3><span class="typcn typcn-lightbulb icon"></span></h3>
          <h4>Mamma, tētis, es Sportlandijā 2014</h4>
          <iframe width="420" height="280" src="https://www.youtube.com/embed/cWKedVE8LNA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <p></p>
        </div>
          </div>
    <div class="row">
    <div class="six columns">
      <h3><span class="typcn typcn-pen icon"></span></h3>
      <div class="video2018">
        <h4>Mamma, tētis, es Sportlandijā 2013</h4>
        <iframe width="420" height="280" src="https://www.youtube.com/embed/4vv5GtfrODc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        </div>
        <div class="six columns">
        <h3><span class="typcn typcn-pen icon"></span></h3>
        <h4>Mamma, tētis, es Sportlandijā 2012</h4>
        <iframe width="420" height="280" src="https://www.youtube.com/embed/YnSWcY8CbjU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      </div>
</section>  

<!-- Footer Sekcija
–––––––––––––––––––––––––––––––––––––––––––––––––– -->  

<footer>
  <div class="container">
    <div class="nine columns">
      <div id="container">
        </div>
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
    <p><button class="videopoga" onclick="location.href='https://sportlandija.lv/index.php?registracija=true';" type="button">
      Reģistrācija</button></p>
</div>
    </div>
    <div class="nine columns">
    <div class="blakus123">
    <h5 class="rjadom">Lapa ir izstrādes stadijā, paldies par sapratni!</h5>
</div>
</div>
  </div>
  <div class="nine columns">
  <div id="container">
    
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

</script>
</html>