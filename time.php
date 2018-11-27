<?php

require __DIR__.'/header.php';

// require __DIR__.'/lang/lang.php';

?>

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


<?php foreach ($language['timeline'] as $timeline): ?>
<section class="timeline">
  <ul>
    <li>
      <img class="img-right" src="./images/trollhattan.jpeg" alt="">
      <div class="right">
        <time><?php echo $timeline['rightyear']; ?></time>
        <p><?php echo $timeline['rightcontent']; ?></p>
      </div>
    </li>
    <li>
      <img class="img-left" src="./images/trollhattan.jpeg" alt="">
      <div class="left">
        <time><?php echo $timeline['leftyear']; ?></time>
        <p><?php echo $timeline['leftcontent']; ?></p>
      </div>
    </li>
  </ul>
</section>
  <?php endforeach; ?>

    <!-- <li>
      <img class="img-right" src="./images/trollhattan.jpeg" alt="">
      <div class="right">
        <time>1978</time>
        <p><?php echo $content['1978']; ?></p>
      </div>
    </li>
    <li>
      <img class="img-left" src="./images/trollhattan.jpeg" alt="">
      <div class="left">
        <time>1997</time>
        <p><?php echo $content['1997']; ?></p>
      </div>
    </li>
    <li>
      <img class="img-right" src="./images/trollhattan.jpeg" alt="">
      <div class="right">
        <time>2010</time>
        <p><?php echo $content['2010']; ?></p>
      </div>
    </li>
    <li>
      <img class="img-left" src="./images/trollhattan.jpeg" alt="">
      <div class="left">
        <time>2019</time>
        <p><?php echo $content['2020']; ?></p>
      </div>
    </li> -->


<script type="text/javascript" src="timelinescript.js">

</script>
