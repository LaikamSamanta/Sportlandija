<!DOCTYPE html>
<html lang="lv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Ģimenes sporta svētki Sportlandijā - Mamma, Tētis, Es">
  <meta name="keywords" content="sports, family, festival, Latvia, Sportlandija">
  <title>Sportlandija - Ģimenes sporta svētki</title>
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="manifest" href="/manifest.json">
  <meta name="theme-color" content="#667eea">
</head>
<body>
  <?php
  include 'ADMIN/config.php';
  $sql = "SELECT cipari FROM romiesucipari";
  $result = $conn->query($sql);
  $eventNumber = "XII"; // Default value
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $eventNumber = $row['cipari'];
    }
  }
  ?>

  <header class="header">
    <nav class="navbar" id="navbar">
      <div class="nav-container">
        <div class="nav-logo">
          <span>Sportlandija</span>
        </div>
        <div class="nav-menu" id="nav-menu">
          <a href="index.php" class="nav-link active">Sākums</a>
          <a href="sadalas.php?programma" class="nav-link">Programma</a>
          <a href="sadalas.php?registracija=true" class="nav-link">Reģistrācija</a>
          <a href="sadalas.php?foto=true" class="nav-link">Foto</a>
          <a href="sadalas.php?video=true" class="nav-link">Video</a>
          <a href="sadalas.php?parmums=true" class="nav-link">Kontakti / Karte</a>
          <a href="sadalas.php?atbalstitaji=true" class="nav-link">Mūs atbalsta</a>
          <a href="sadalas.php?mesatbalstam=true" class="nav-link">Mēs atbalstam</a>
        </div>
        <div class="nav-toggle" id="nav-toggle">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
      </div>
    </nav>

    <div class="hero">
      <div class="hero-content">
        <div class="hero-separator"></div>
        <h2 class="hero-subtitle">Ģimenes sporta svētki</h2>
        <h3 class="hero-subtitle">Mamma, Tētis, Es</h3>
        <h1 class="hero-title">
          Sportlandijā <span class="hero-accent"><?php echo htmlspecialchars($eventNumber); ?></span>
        </h1>
        <p class="hero-location">30.08.2020 11:00 | Tērces, Cenu pag., Ozolnieku nov.</p>
        <a href="#about" class="scroll-down" aria-label="Ritināt uz leju">
          <div class="scroll-arrow"></div>
        </a>
      </div>
    </div>
  </header>
  
  <main>
    <!-- About Section -->
    <section id="about" class="section">
      <div class="container">
        <div class="slideshow-container">
          <div class="slide fade">
            <div class="slide-number">1 / 6</div>
            <img src="foto/sakums1.jpg" alt="Sportlandija foto 1" loading="lazy">
          </div>
          
          <div class="slide fade">
            <div class="slide-number">2 / 6</div>
            <img src="foto/sakums2.JPG" alt="Sportlandija foto 2" loading="lazy">
          </div>
          
          <div class="slide fade">
            <div class="slide-number">3 / 6</div>
            <img src="foto/sakums3.JPG" alt="Sportlandija foto 3" loading="lazy">
          </div>
          
          <div class="slide fade">
            <div class="slide-number">4 / 6</div>
            <img src="foto/sakums4.JPG" alt="Sportlandija foto 4" loading="lazy">
          </div>
          
          <div class="slide fade">
            <div class="slide-number">5 / 6</div>
            <img src="foto/sakums5.JPG" alt="Sportlandija foto 5" loading="lazy">
          </div>
          
                                <div class="slide fade">
             <div class="slide-number">6 / 6</div>
             <img src="foto/IMG_6.JPG" alt="Sportlandija foto 6" loading="lazy">
           </div>

          <!-- Navigation arrows -->
          <button class="slide-nav prev" onclick="changeSlide(-1)" aria-label="Iepriekšējā bilde">
            <i class="fas fa-chevron-left"></i>
          </button>
          <button class="slide-nav next" onclick="changeSlide(1)" aria-label="Nākamā bilde">
            <i class="fas fa-chevron-right"></i>
          </button>
        </div>

        <!-- Thumbnail navigation -->
        <div class="slide-thumbnails">
          <div class="thumbnail active" onclick="currentSlide(1)">
            <img src="foto/sakums1.jpg" alt="Thumbnail 1" loading="lazy">
          </div>
          <div class="thumbnail" onclick="currentSlide(2)">
            <img src="foto/sakums2.JPG" alt="Thumbnail 2" loading="lazy">
          </div>
          <div class="thumbnail" onclick="currentSlide(3)">
            <img src="foto/sakums3.JPG" alt="Thumbnail 3" loading="lazy">
          </div>
          <div class="thumbnail" onclick="currentSlide(4)">
            <img src="foto/sakums4.JPG" alt="Thumbnail 4" loading="lazy">
          </div>
          <div class="thumbnail" onclick="currentSlide(5)">
            <img src="foto/sakums5.JPG" alt="Thumbnail 5" loading="lazy">
          </div>
                                <div class="thumbnail" onclick="currentSlide(6)">
             <img src="foto/IMG_6.JPG" alt="Thumbnail 6" loading="lazy">
           </div>
        </div>

        <!-- Video Section -->
        <div class="video-container">
          <iframe 
            src="https://www.youtube.com/embed/hiceOTDuXWo" 
            title="Sportlandija 2018 video"
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
          </iframe>
        </div>
      </div>
    </section>

    <!-- Partners Section -->
    <section id="partners" class="section section--partners">
      <div class="container">
        <h2 class="section-title">Partneri</h2>
        <div class="section-separator"></div>
        
        <div class="partners-grid">
          <a href="https://www.blik.lv/lv/" class="partner-card" target="_blank" rel="noopener">
            <img src="bildes/17t.png" alt="Blik" loading="lazy">
          </a>
          <a href="https://www.jrt.lv/" class="partner-card" target="_blank" rel="noopener">
            <img src="bildes/teatris.png" alt="Jaunais Rīgas teātris" loading="lazy">
          </a>
          <a href="https://www.laimasokoladesmuzejs.lv/lv/" class="partner-card" target="_blank" rel="noopener">
            <img src="bildes/Laima.png" alt="Laimas šokolādes muzejs" loading="lazy">
          </a>
          <a href="http://www.kinobize.lv/" class="partner-card" target="_blank" rel="noopener">
            <img src="bildes/kino.png" alt="Kino Bize" loading="lazy">
          </a>
          <a href="https://www.piparmetra.com/" class="partner-card" target="_blank" rel="noopener">
            <img src="bildes/piparmetra.png" alt="Piparmētra" loading="lazy">
          </a>
          <a href="http://uhh.lv/" class="partner-card" target="_blank" rel="noopener">
            <img src="bildes/design.png" alt="Design" loading="lazy">
          </a>
          <a href="https://www.chepi.lv/lat/" class="partner-card" target="_blank" rel="noopener">
            <img src="bildes/cherry.png" alt="Cherry" loading="lazy">
          </a>
          <a href="https://www.impro.lv/c_startpage.php" class="partner-card" target="_blank" rel="noopener">
            <img src="bildes/impro.png" alt="Impro" loading="lazy">
          </a>
          <a href="https://durbesveltes.lv/" class="partner-card" target="_blank" rel="noopener">
            <img src="bildes/veltes.png" alt="Durbes veltes" loading="lazy">
          </a>
          <a href="https://www.facebook.com/Baibelehandmade/" class="partner-card" target="_blank" rel="noopener">
            <img src="bildes/baibele.png" alt="Baibele handmade" loading="lazy">
          </a>
          <a href="http://3masas.lv/lv/" class="partner-card" target="_blank" rel="noopener">
            <img src="bildes/3masas.png" alt="3 māsas" loading="lazy">
          </a>
          <a href="https://jaunavecriga.lv/" class="partner-card" target="_blank" rel="noopener">
            <img src="bildes/jaunavecriga.png" alt="Jaunā Vecrīga" loading="lazy">
          </a>
          <a href="https://winktattoo.com/" class="partner-card" target="_blank" rel="noopener">
            <img src="bildes/wink.png" alt="Wink tattoo" loading="lazy">
          </a>
          <a href="http://www.lazeroptima.lv/" class="partner-card" target="_blank" rel="noopener">
            <img src="bildes/laser.png" alt="Lazer Optima" loading="lazy">
          </a>
          <a href="https://www.facebook.com/miL.design.miL/" class="partner-card" target="_blank" rel="noopener">
            <img src="bildes/mil.png" alt="MiL design" loading="lazy">
          </a>
          <a href="http://muzejs.vugd.gov.lv/" class="partner-card" target="_blank" rel="noopener">
            <img src="bildes/muzejs.png" alt="Muzejs" loading="lazy">
          </a>
          <a href="http://porcelanamuzejs.riga.lv/" class="partner-card" target="_blank" rel="noopener">
            <img src="bildes/porcelans.png" alt="Porcelāna muzejs" loading="lazy">
          </a>
          <a href="https://skriverusaldumi.lv/index" class="partner-card" target="_blank" rel="noopener">
            <img src="bildes/skriveri.png" alt="Skrīveru saldumi" loading="lazy">
          </a>
          <a href="https://7day.lv/" class="partner-card" target="_blank" rel="noopener">
            <img src="bildes/cosmetics.png" alt="7 day cosmetics" loading="lazy">
          </a>
          <a href="https://nogame.lv/lv/booking/" class="partner-card" target="_blank" rel="noopener">
            <img src="bildes/nogame.png" alt="No game" loading="lazy">
          </a>
          <a href="https://manilla.lv/" class="partner-card" target="_blank" rel="noopener">
            <img src="bildes/manilla.png" alt="Manilla" loading="lazy">
          </a>
          <a href="https://ktnoma.lv/" class="partner-card" target="_blank" rel="noopener">
            <img src="bildes/noma.png" alt="KT noma" loading="lazy">
          </a>
          <a href="https://kafijaspasaule.lv/" class="partner-card" target="_blank" rel="noopener">
            <img src="bildes/kafija.png" alt="Kafijas pasaule" loading="lazy">
          </a>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer">
    <div class="container">
      <div class="footer-content">
        <div class="footer-social">
          <a href="https://www.facebook.com/events/291899375371214/" class="social-link facebook" target="_blank" rel="noopener" aria-label="Facebook">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://www.instagram.com/kefa_lv/" class="social-link instagram" target="_blank" rel="noopener" aria-label="Instagram">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="https://www.youtube.com/user/KlubIskatel/featured" class="social-link youtube" target="_blank" rel="noopener" aria-label="YouTube">
            <i class="fab fa-youtube"></i>
          </a>
        </div>
        
        <div class="footer-cta">
          <a href="https://sportlandija.lv/index.php?registracija=true" class="btn btn--primary">
            Reģistrācija
          </a>
        </div>
        
        <div class="footer-note">
          <p>Lapa ir izstrādes stadijā, paldies par sapratni!</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="js/main.js"></script>
</body>
</html>