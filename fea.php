<?php

require __DIR__.'/header.php';

require __DIR__.'/lang/lang.php';

?>

<section class="feature-page">

  <!-- <div class="int-ext-page"> -->
    <!-- <div class="container">
      <h2 class="notvisible">not visible </h2>
    </div> -->
  <!-- </div> -->
    <div class="exterior">
      <div class="journey">
        <p><?php echo $btn['reserve']; ?></p>
        <hr class="hr1">
      </div>
      <div class="exterior-text">
          <h2><?php echo $header['exteriorHeader']; ?></h2>
          <p><?php echo $content['exterior'] ?></p>
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
