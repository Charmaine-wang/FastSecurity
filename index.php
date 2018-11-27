<?php

require __DIR__.'/header.php';

require __DIR__.'/lang/lang.php';




?>

<!-- firstPage -->
<section class="img-firstpage">
 <header>

   <nav class="nav">
<div class="header-logo">
     <div class="hamburger-icon">
  <!-- ICON -->
       <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
     </div>


    <img class="saab" src="images/saablogo.png" alt="Logo">

<div class="language-links">
  <a class="lang-link-eng" href="?lang=eng">ENG</a>
  <a class="lang-link-swe" href="?lang=swe">SWE</a>
</div>
</div>


<!-- NAVBAR -->
     <ul class="nav-ist nav-ist__hidden">
       <li class="nav-item">
         <a href="#1" class="nav-link-start"><?php echo $navbar['home'];?></a>
          <hr class="nav-hr">
       </li>

       <li class="nav-item">
         <a href="#2" class="nav-link"><?php echo $navbar['exterior'];?></a>
       </li>
       <li class="nav-item">
         <a href="#3" class="nav-link"><?php echo $navbar['interior'];?></a>
       </li>
       <li class="nav-item">
         <a href="#4" class="nav-link"><?php echo $navbar['performance'];?></a>
       </li>
       <li class="nav-item">
         <a href="#5" class="nav-link"><?php echo $navbar['accessories'];?></a>
       </li>

       <div class="language-links-nav">
         <a class="lang-link-eng" href="?lang=eng">ENG</a>
         <a class="lang-link-swe" href="?lang=swe">SWE</a>
       </div>

     </ul>

   </nav>

 </header>


<article class="main-text">

  <div class="text-header">
    <h2 class="firstpage-h2">1.0</h2>

    <h1 class="firstpage-h1"><?php echo $header['firstHeader']; ?></h1>
    <p><?php echo $content['firstPage']; ?></p>

  </div>
  <a href="contact.php">
    <button type="button" class="firstpage-button" name="button">
      <?php echo $btn['btn']; ?>
    </button>
  </a>
</article>

</section> <!-- end of firstPage -->

<!-- GO FURTHER PAGE -->
<section class="go-further-page">

  <div class="all-page-button1">
    <p><?php echo $btn['reserve']; ?></p>
    <hr class="hr1">
  </div>
<div class="further">
<h1 class="further-head">Go further <br> with Fast Security</h1>
</div>
</section>


<!-- Accessories VeraWang page -->
<section class="page-2-mobile">
  <div class="wera-wang">
    <h2 class="h2-wera-wang"><?php echo $header['veraHeader'] ?><br> Vera Wang</h2>
  </div>
  <p>Exclusive first rider augmented reality <br>glasses from our partner.</p>
    <button class="wera-wang-button" type="button"><?php echo $btn['btn']; ?></button>
</section> <!-- end of accessories veraWang page -->

<!-- Sustaineble page -->
<section class="sustaineble-page">
  <div class="all-page-button1">
    <p><?php echo $btn['reserve']; ?></p>
    <hr class="hr1">
  </div>

<h1 class="sustaineble-head">Sustaineble for<br>the future</h1>

</section>

<!-- FEATURE PAGES -->

<section class="feature-page">
    <div class="exterior">
      <div class="all-page-button1">
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

<!-- choose your own colorPage -->
      <section class="color-page">
        <div class="all-page-button">
          <p><?php echo $btn['reserve']; ?></p>
          <hr class="hr1">
        </div>
        <div class="color-text">
          <h2>choose your<br>own color.</h2>
        </div>
      </section>
<!-- end choose your own colorPage -->
  <section class="timeline-page">
    <div class="all-page-button">
      <p><?php echo $btn['reserve']; ?></p>
      <hr class="hr1">
    </div>
    <div class="timeline">
      <h2><?php echo $header['timeHeader']; ?></h2>
  <!-- fixa en break i timeHeader -->
    </div>
  </section>

<section class="timeline">
  <ul>
    <li>
      <div class="right">
        <time>1937</time>
        <p><?php echo $content['1937']; ?></p>
      </div>
    </li>
    <li>
      <div class="left">
        <time>1946</time>
        <p><?php echo $content['1946']; ?></p>
      </div>
    </li>
    <li>
      <div class="right">
        <time>1978</time>
        <p><?php echo $content['1978']; ?></p>
      </div>
    </li>
    <li>
      <div class="left">
        <time>1997</time>
        <p><?php echo $content['1997']; ?></p>
      </div>
    </li>
    <li>
      <div class="right">
        <time>2010</time>
        <p><?php echo $content['2010']; ?></p>
      </div>
    </li>
    <li>
      <div class="left">
        <time>2020</time>
        <p><?php echo $content['2020']; ?></p>
      </div>
    </li>
  </ul>
</section>

<a href="contact.php"><button type="button"><?php echo $btn['btnFollow'] ?></button></a>

<!-- productfolder -->
<h1><?php echo $header['folder'] ?></h1>
<div class="folder"> bild
</div>
<div>  <a href="/path/to/downloadfile.csv">
<button class="download">
<i class="fa fa-download"></i> Download
</button>
</a></div>
<!-- end of productfolder -->


<?php

require __DIR__.'/footer.php';
?>
