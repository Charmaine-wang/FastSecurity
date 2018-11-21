<?php

require __DIR__.'/header.php';

 ?>

<section class="leave-email">

  <div class="contactsheet-background">
    <img src="./images/contactsheet-background.png" alt="">
  </div>

  <div class="contactsheet">
    <h2>create your <br>unique <br>adventures.</h2>
    <img class="saab-big" src="SAAB_fakelogo.png" alt="Logo">
    <img class="fs-logo" src="./images/FASTSECURITY_FS_LOGO.png" alt="Logo">
    <p>To recieve more info about FastSecurity™<br />
       and local event invites enter your info below</p>
    <form class="contact-form" action="" method="post">
      <label for="name">Full name</label>
      <input class="name" type="name" name="name" id="name" placeholder="Full name">
      <label for="email">E-mail</label>
    	<input type="email" name="email" id="email" placeholder="E-mail">
    </form>
    <a href="confirmation.php"><button class="register-button" type="button">Register now</button></a>
    <hr class="hr-email">
    <a href="#"><button class="back-button" type="button" name="button"><i class="fas fa-angle-left"></i> Take me back</button></a>
  </div>

</section>
