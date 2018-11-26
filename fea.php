<?php

require __DIR__.'/header.php';

require __DIR__.'/lang/lang.php';

?>

<!-- FEATURE PAGES -->

<section class="feature-page">
    <div class="exterior">
      <div class="journey">
        <p><?php echo $btn['reserve']; ?></p>
        <hr class="hr1">
      </div>

      <div class="exterior-mobile">
        <img class="exterior-mobile" src="./images/gw.jpeg" alt="" width="100%">
      </div>

      <div class="navigator">
        <ul class="feature-nav">
          <li><a href="exterior.php">Exterior</a></li>
          <li><a href="interior.php">Interior</a></li>
          <li><a href="color.php">Color</a></li>
        </ul>
      </div>

      <div class="exterior-text">
          <h3>Feeling special<br>with personalized features</h3>
          <h2><?php echo $header['exteriorHeader']; ?></h2>
          <p><?php echo $content['exterior'] ?></p>
          <a href="contact.php"><button class="feature-button" type="button"><?php echo $btn['btn'] ?></button></a>
      </div>


      <div class="exterior-image">
      </div>
  </div>


  <div class="vertical-line">
  </div>


  <div class="interior">
      <div class="interior-image">
      </div>

        <div class="interior-text">
          <h2><?php echo $header['interiorHeader'] ?></h2>
          <p><?php echo $content['interior']; ?></p>
        </div>
      </div>
</section>

<!-- FEATURE PAGES END-->
