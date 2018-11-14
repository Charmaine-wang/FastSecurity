<?php
declare(strict_types=1);
require __DIR__.'/header.php';
require __DIR__.'/lang/lang.php'; ?>
<!DOCTYPE html>
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

<?php
  require __DIR__.'/footer.php';
?>
