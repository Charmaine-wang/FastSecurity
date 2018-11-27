<?php

require __DIR__.'/header.php';

 ?>

<section class="leave-email">

  <div class="contactsheet-background">
    <img src="./images/konverteringssida.jpg" alt="">
  </div>

  <div class="download">
    <img class="saab-big" src="./images/saablogo.png" alt="Logo">
    <img class="fs-logo2" src="./images/FASTSECURITY_FS_LOGO.png" alt="Logo">
    <h2><?php echo $header['downHeader']; ?></h2>
    <p><?php echo $content['downCont']; ?>
    </p>
    <button class="download-button" type="submit"><?php echo $btn['btnDown'] ?>
      <i class="fas fa-download"></i>
    </button>
    <hr class="hr-download">
    <a href="#">
      <button class="back-button" type="button" name="button">
        <i class="fas fa-angle-left"></i><?php echo $btn['back'] ?>
      </button>
      </a>
  </div>

</section>
