<?php
  global $titel;
  global $seperator;
  global $beschreibung;
?>

<html lang="de">
  <head>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo basename(__DIR__); ?>/../../assets/images/logo.jpg" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css"
      integrity="sha256-rnmbX+ZXZml9xbNUKt/qXfgpCi6zLJX7qqR+7vX/1ZY=" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,800&display=swap" rel="stylesheet">
    <link href="./frontend/design/css/bootstrapcontrol.css" rel="stylesheet">
    <link href="./frontend/design/css/style.css" rel="stylesheet">

    <title><?php echo $titel.$seperator.$beschreibung; ?></title>
  </head>
  <body>
    
    <div class="top">
      <div class="layertoplinks">
        links
      </div>
      <div class="layertopmitte">
        mitte
      </div>
      <div class="layertoprechts">
        rechts
      </div>
    </div>
    <div class="hauptseite">
      <div class="layer">
        <div class="header">
          Hallo, Willkommen bei meinem Spiel
        </div>
      </div>
      <div class="layer">
        <div class="content">
          <a href="index.php?page=index">Home</a>
          <a href="index.php?page=contact">Kontakt</a>
        </div>
      </div>
      <div class="layer">
        <div class="footer">
          <h1><p>Footer</p></h1>
        </div>
      </div>
    </div>

  </body>
</html>