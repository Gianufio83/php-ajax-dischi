const $ = require('jquery');
const Handlebars = require("handlebars");

$(document).ready(function(){
  $.ajax(
  {
    url:'http://localhost/php-ajax-dischi/server.php',
    method: 'GET',
    success: function(data) {
      reset();
      printCd(data);
    },
    error: function(request, state, errors) {
      alert('Errore');
    }
  });

  $('#autori').change(function() {
      var author = $(this).val();
      console.log(author);
      $.ajax(
      {
        url:'http://localhost/php-ajax-dischi/server.php',
        method: 'GET',
        data: {
         'author' : author
       },
        success: function (data) {
          reset();
          printCd(data);
        },
        error: function(request, state, errors) {
          alert('Errore');
          discoNotFound();
        }
      });
  });
});

function printCd(result) {

  var source = $('#dischi-template').html();
   var template = Handlebars.compile(source);

   for (var i = 0; i < result.length; i++) {
    if (result.length > 0) {
      var disco = result[i];
      var context = {
        poster : disco.poster,
        title : disco.title,
        author : disco.author,
        year: disco.year
      };
      var html = template(context);
      $('.first').append(html);
    }
    else {
      discoNotFound();
    }
}
function discoNotFound() {
    var source = $('#noresults-template').html();
    var template = Handlebars.compile(source);
    var html = template();
    $('.first').append(html);
  };
  function reset() {
    $('.first').html('');
  };
