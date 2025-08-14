<?php

  if(isset($_GET['teksts'])) {
      include 'teksts.php';
  }

  if(isset($_GET['atteli'])) {
      include 'atteli.php';
  }

  if(isset($_GET['nomainitatteli'])) {
    include 'nomainitatteli.php';
}

  if(isset($_GET['delete'])) {
      include 'delete.php';
  }

  if(isset($_GET['nomainitparametri'])) {
    include 'nomainitparametri.php';
  }

  if(isset($_GET['citasopcijas'])) {
    include 'citasopcijas.php';
  }

  if(isset($_GET['iestatijumi'])) {
    include 'iestatijumi.php';
  }

  if(isset($_GET['kontakti'])) {
    include 'redigetkontakti.php';
  }

  if(isset($_GET['atbalstam'])) {
    include 'redigetatbalstam.php';
  }
?>
