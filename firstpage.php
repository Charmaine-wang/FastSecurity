<?php
declare(strict_types=1);
require(__DIR__.'/lang/lang.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="firstpage.css">
  <title>Firstpage</title>
  <header>
    <div class="img-car">
      <div>
        <a href="index.html">
          <img class="saab" src="SAAB_fakelogo.png" alt="Logo">
        </a>
        <a class="lang-link" href="?user_lang=swe">Svenska</a>
        <a class="lang-link" href="?user_lang=eng">English</a>

  </header>
</head>

<body>
  <section class="main-text">

    <div class="text">
      <h2>1.0</h2>


      <h1>Fast
        <br>
        Security
      </h1>


    </div>
    <div class="content">

      <p><?php echo $languages[$lang]['content'];?> </p>

</div>
    <button class="button" type="button" name="button">Follow fast security</button>
  </section>



</body>

</html>
