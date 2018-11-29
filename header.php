<?php

if (isset($_GET['language'])) {
  $language = $_GET['language'];

  if ($language == 'En') {
    require __DIR__.'/english.php';
  }
  elseif ($language == 'Sv') {
    require __DIR__.'/swedish.php';
  }

} else {
    require __DIR__.'/english.php';
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>FastSecurity</title>
  <link rel="stylesheet" href="config.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="accessories.css">
  <link rel="stylesheet" href="sustaineble.css">
  <link rel="stylesheet" href="time.css">
  <!-- <link rel="stylesheet" href="timeline.css"> -->
  <link rel="stylesheet" href="feature.css">
  <link rel="stylesheet" href="firstpage.css">
  <link rel="stylesheet" href="gofurther.css">
  <link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" href="contactpages.css">


  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>

<body>
