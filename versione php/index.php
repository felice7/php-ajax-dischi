<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <header class="header clearfix">
      <a href="#" class="header_logo"><i class="fab fa-spotify"></i></a>
      <div class="header_search">
        <div class="search_box">
          <input class="search_text" type="text" name="" placeholder="ricerca">
          <a class="search_btn" href="#">
            <i class="fas fa-search"></i>
          </a>
        </div>
      </div>
    </header>

    <main>
      <div class="container">

        <?php include 'data.php' ?>

        <?php foreach ($dischi as $key => $disco) {?>
          <div id="template-disco" class="container-disco" data-genere = <?php echo $disco['genre']; ?>>
            <img class="copertina-album" src=<?php echo $disco['poster']; ?> alt="">
            <p class="titolo-album"><?php echo $disco['title']; ?></p>
            <p class="artista"><?php echo $disco['author']; ?></p>
            <p class="anno"><?php echo $disco['year']; ?></p>
          </div>
        <?php } ?>

      </div>
    </main>


  </body>
</html>
