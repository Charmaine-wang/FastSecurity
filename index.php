<?php

require __DIR__.'/header.php';

require __DIR__.'/lang/lang.php';
?>
 <header>
<div class="header-logo">
   <nav class="nav">

     <div class="hamburger-icon">
  <!-- ICON -->
       <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
     </div>

     <div class="img-car">
            <img class="saab" src="SAAB_fakelogo.png" alt="Logo">
           </a>
     </div>
</div>
       <a class="lang-link" href="?user_lang=swe">Svenska</a>
       <a class="lang-link" href="?user_lang=eng">English</a>

<!-- NAVBAR -->
     <ul class="nav-ist nav-ist__hidden">
       <li class="nav-item">
         <a href="#1" class="nav-link">HOME</a>
       </li>
       <li class="nav-item">
         <a href="#2" class="nav-link">EXTERIOR</a>
       </li>
       <li class="nav-item">
         <a href="#3" class="nav-link">INTERIOR</a>
       </li>
       <li class="nav-item">
         <a href="#4" class="nav-link">PERFORMANCE</a>
       </li>
       <li class="nav-item">
         <a href="#5" class="nav-link">ACCESSORIES</a>
       </li>

     </ul>

   </nav>

 </header>


<section class="main-text">
  <div class="img-firstpage">

  <div class="text-header">
    <h2>1.0</h2>

    <h1>Fast<br>Security</h1>
  </div>

  <div class="content">
    <p><?php echo $languages[$lang]['content'];?> </p>
  </div>
  </div>
</section>

<a href="contact.php"><button type="button">Follow fast security</button></a>

<!-- NEW PAGE -->

<section>

<div class="big-image">
  <img src="" alt="">
</div>

<div class="navigator">

  <ul>
    <li><a href="exterior.php">Exterior</a></li>
    <li><a href="interior.php">Interior</a></li>
    <li><a href="color.php">Color</a></li>
  </ul>
</div>

<div class="citat">
  <h1>Feeling special<br>with personalized<br>features</h1>
</div>

</section>

<a href="contact.php"><button type="button">Follow fast security</button></a>

<!-- productfolder -->
<h1>Productfolder</h1>
<div class="folder"> bild
</div>
<div>  <a href="/path/to/downloadfile.csv">
<button class="download">
<i class="fa fa-download"></i> Download
</button>
</a></div>
<!-- end of productfolder -->

<section class="intro">
  <div class="journey">
    <p>Reserve My Fast Security</p>
    <hr class="hr1">
  </div>
  <div class="container">
    <h2>Technological<br /> milestones</h2>
  </div>
</section>

<section class="timeline">
  <ul>
    <li>
      <div class="right">
        <time>1937</time>
        <p>Saab started in Trollhättan, Sweden</p>
      </div>
    </li>
    <li>
      <div class="left">
        <time>1937</time>
        <p>Proin quam velit, efficitur vel neque vitae, rhoncus commodo mi. Suspendisse finibus mauris et bibendum molestie. Aenean ex augue, varius et pulvinar in, pretium non nisi.</p>
      </div>
    </li>
    <li>
      <div class="right">
        <time>1940</time>
        <p>Proin iaculis, nibh eget efficitur varius, libero tellus porta dolor, at pulvinar tortor ex eget ligula. Integer eu dapibus arcu, sit amet sollicitudin eros.</p>
      </div>
    </li>
    <li>
      <div class="left">
        <time>1943</time>
        <p>In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.</p>
      </div>
    </li>
    <li>
      <div class="right">
        <time>1946</time>
        <p>In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.</p>
      </div>
    </li>
    <li>
      <div class="left">
        <time>1956</time>
        <p>In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.</p>
      </div>
    </li>
    <li>
      <div class="right">
        <time>1957</time>
        <p>In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.</p>
      </div>
    </li>
    <li>
      <div class="left">
        <time>1967</time>
        <p>Aenean condimentum odio a bibendum rhoncus. Ut mauris felis, volutpat eget porta faucibus, euismod quis ante.</p>
      </div>
    </li>
    <li>
      <div class="right">
        <time>1977</time>
        <p>Vestibulum porttitor lorem sed pharetra dignissim. Nulla maximus, dui a tristique iaculis, quam dolor convallis enim, non dignissim ligula ipsum a turpis.</p>
      </div>
    </li>
    <li>
      <div class="left">
        <time>1985</time>
        <p>In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.</p>
      </div>
    </li>
  </ul>
</section>

<a href="contact.php"><button type="button">Follow fast security</button></a>

<?php

require __DIR__.'/footer.php';
?>
