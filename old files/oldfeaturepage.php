<!-- <div class="img-desktop"> -->
<section class="feature-section">
<div class="feature-bike-img">
</div>
<!-- img mobile -->

<!-- navbar, only in mobile -->
<div class="feature-nav">
  <ul>
    <li><a href="exterior.php">Exterior</a></li>
    <li><a href="interior.php">Interior</a></li>
    <li><a href="color.php">Color</a></li>
  </ul>
</div><!-- end navbar -->

<!-- textarea -->
<div class="feature-content">
  <div class="feature-text">
    <h2 class="feature-text">Feeling special with<br>personalized<br>features</h2>
  </div>

<a href="contact.php"><button type="button" class="feature-button">Start your journey</button></a>
</div>

</section>

<!-- exterior and interior page -->
<section class="ext-int-page">

  <!-- <div class="int-ext-page"> -->
    <div class="journey">
      <p><?php echo $btn['reserve']; ?></p>
      <hr class="hr1">
    </div>
    <div class="container">
      <h2 class="notvisible">not visible </h2>
    </div>
  <!-- </div> -->
<div class="feature-03">
    <div class="ext">
      <div class="features-text-ext">
          <h2><?php echo $header['exteriorHeader']; ?></h2>
          <p><?php echo $content['exterior'] ?></p>
      </div>
    <div class="features-image-ext">
    </div>
  </div>

  <div class="int">
      <div class="features-image-int">
      </div>

        <div class="features-text-int">
          <h2><?php echo $header['interiorHeader'] ?></h2>
          <p><?php echo $content['interior']; ?></p>
        </div>
      </div>
      </div>
</section>
<!-- end exterior and interior page -->
