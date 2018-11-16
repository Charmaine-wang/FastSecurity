<?php

require __DIR__.'/header.php';

 ?>

<section class="leave-email">

  <div class="contactsheet-background">
    <img src="./images/contactsheet-background.png" alt="">
  </div>

  <button class="cross-button" type="button" name="button">
    <i class="fas fa-times fa-3x"></i>
  </button>

  <div class="contactsheet">
    <h2>create your <br>unique <br>adventures.</h2>
    <img class="saab-big" src="SAAB_fakelogo.png" alt="Logo">
    <img class="fs-logo" src="./images/FASTSECURITY_FS_LOGO.png" alt="Logo">
    <p>To recieve more info about FastSecurity™<br />
       and local event invites enter your info below</p>
    <form class="contact-form" action="" method="post">
       <input class="name" type="name" name="name" id="name" placeholder="Full name">
    	 <input type="email" name="email" id="email" placeholder="E-mail">
     	 <button class="register-button" type="submit">Register now</button>
    </form>
    <hr class="hr-email">
  </div>

</section>
