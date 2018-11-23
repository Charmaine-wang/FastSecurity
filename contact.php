<?php

require __DIR__.'/header.php';


 ?>

<section class="leave-email">

  <div class="contactsheet-background">
    <img src="./images/contactsheet-background.png" alt="">
  </div>

  <div class="contactsheet">
    <h2><?php echo $header['registerHeader']; ?></h2>
<!-- ska vara en break i headern -->
    <img class="saab-big" src="SAAB_fakelogo.png" alt="Logo">
    <img class="fs-logo" src="./images/FASTSECURITY_FS_LOGO.png" alt="Logo">
    <p><?php echo $content['register']; ?></p>
<!-- ska vara flera breaks i content -->
    <form class="contact-form" action="" method="post">
      <input class="name" type="name" name="name" id="name" placeholder="Full name">
    	<input type="email" name="email" id="email" placeholder="E-mail">
    </form>
    <a href="confirmation.php"><button class="register-button" type="button"><?php echo $btn['register'] ?></button></a>
    <hr class="hr-email">
    <a href="#"><button class="back-button" type="button" name="button"><i class="fas fa-angle-left"></i><?php echo $btn['btnBack'] ?></button></a>
  </div>

</section>
