<?php

require __DIR__.'/header.php';

?>

<section class="leave-email">

  <div class="contactsheet-background">
    <img src="./images/konverteringssida.jpg" alt="">
  </div>

  <div class="confirmation">
    <img class="saab-big" src="./images/saablogo.png" alt="Logo">
    <img class="fs-logo3" src="./images/FASTSECURITY_FS_LOGO.png" alt="Logo">
    <h2 class="confirmation-h2"><?php echo $header['confirm']; ?></h2>
    <hr class="hr-confirmation">
    <a href="index.php">
      <button class="back-button" type="button" name="button">
        <i class="fas fa-angle-left"></i> <?php echo $btn['back']; ?>
      </button>
    </a>
  </div>

</section>
