const $ = require('jquery');
const Handlebars = require("handlebars");

$(document).ready(function(){
  // alert('Ciao');
  $.ajax(
  {
    url:'http://localhost/php-ajax-dischi/server.php',
    method: 'GET',
    success: function (data) {
      console.log(data);
      // printDischi(data);

        var source = $('#dischi-template').html();
        var template = Handlebars.compile(source);
        for (var i = 0; i < data.length; i++) {
         console.log(data[i]);
         var context = data[i];
         var html = template(context);
         $('.first').append(html);

    }
    },
    error: function () {
      alert('Errore');
      discoNotFound();
    }
  }
  );
});

// function printDischi(dischi) {
//
//   var source = $('#dischi-template').html();
//   var template = Handlebars.compile(source);
//
//   for (var i = 0; i < dischi.length; i++) {
//      var disco = disco[i];
//      var context = {
//        poster : disco.poster,
//        title : disco.title,
//        author : disco.author,
//        year: disco.year,
//      }
//      var html = template(context);
//      $('.first').append(html);
//   }
// };
function discoNotFound() {
    var source = $('#noresults-template').html();
    var template = Handlebars.compile(source);
    var html = template();
    $('.first').append(html);
  };
