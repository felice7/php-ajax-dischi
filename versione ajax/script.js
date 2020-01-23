var source = $('#entry-template').html();
var template = Handlebars.compile(source);

$.ajax({
  'url': 'data.php',
  'method': 'GET',
  'success': function (data) {
    var disco = JSON.parse(data);
    for (var i = 0; i < disco.length; i++) {
      var context = {
        copertina : disco[i].poster,
        titolo : disco[i].title,
        artista : disco[i].author,
        anno : disco[i].year,
        genere_disco : disco[i].genre
      };
      var html = template(context);
      $('.container').append(html);
    }
  },
  'error': function () {
    alert('errore')
  }
});
