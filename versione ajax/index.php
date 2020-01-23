<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
        <div class="container"></div>
      </main>

        <script id="entry-template" type="text/x-handlebars-template">
          <div id="template-disco" class="container-disco" data-genere = "{{ genere_disco }}">
            <img class="copertina-album" src= "{{ copertina }}" alt="">
            <p class="titolo-album">{{ titolo }}</p>
            <p class="artista">{{ artista }}</p>
            <p class="anno">{{ anno }}</p>
          </div>
    </script>

     <script src="script.js" charset="utf-8"></script>
  </body>
</html>
