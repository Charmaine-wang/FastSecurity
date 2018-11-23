<?php

require __DIR__.'/header.php';

require __DIR__.'/lang/lang.php';




?>
<section class="img-firstpage">
 <header>

   <nav class="nav">
<div class="header-logo">
     <div class="hamburger-icon">
  <!-- ICON -->
       <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
     </div>


    <img class="saab" src="SAAB_fakelogo.png" alt="Logo">


<div class="language-links">
  <a class="lang-link" href="?lang=eng">ENG</a>
  <a class="lang-link" href="?lang=swe">SWE</a>
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

     </ul>

   </nav>

 </header>


<article class="main-text">
  <!-- <div class="img-firstpage-1"> -->

<div class="firstpage">
  <div class="text-header">
    <h2 class="firstpage-h2">1.0</h2>

    <h1 class="firstpage-h1"><?php echo $header['firstHeader']; ?></h1>
    <p><?php echo $content['firstPage']; ?></p>

  </div>
  <a href="contact.php"><button type="button" class="firstpage-button"><?php echo $btn['btn']; ?></button></a>
<!-- </div> -->
</div>
</article>

</section>


<!-- NEW PAGE -->
<section class="page-2-mobile">
  <div class="wera-wang">
    <h2 class="h2-wera-wang"><?php echo $header['veraHeader'] ?><br> Vera Wang</h2>
  </div>
  <div class="wera-wang-button">
    <button type="button" class="follow"><?php echo $btn['btn']; ?></button>
  </div>
</section>



<!-- NEW PAGE -->



  <section class="int-ext-page">
    <div class="journey">
      <p><?php echo $btn['reserve']; ?></p>
      <hr class="hr1">
    </div>
    <div class="container">
      <h2 class="notvisible">not visible </h2>
    </div>
  </section>
<div class="feature-03">
    <div class="ext">
      <div class="features-text-ext">
          <h2><?php echo $header['exteriorHeader']; ?></h2>
          <p><?php echo $content['exterior'] ?></p>
      </div>
    <div class="features-image-ext">
          <img src="" alt="">
    </div>
  </div>
  <div class="int">
      <div class="features-image-int">
        <img src="" alt="">
      </div>

        <div class="features-text-int">
          <h2><?php echo $header['interiorHeader'] ?></h2>
          <p><?php echo $content['interior']; ?></p>
        </div>
      </div>
      </div>
      <section class="feature-04">
        <div class="journey">
          <p><?php echo $btn['reserve']; ?></p>
          <hr class="hr1">
        </div>
        <div class="container">
          <h2>choose your<br>own color.</h2>
        </div>
      </section>

<section class="intro">
  <div class="journey">
    <p><?php echo $btn['reserve']; ?></p>
    <hr class="hr1">
  </div>
  <div class="container">
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
