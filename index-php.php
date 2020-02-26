 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="dist/app.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.3/handlebars.min.js" integrity="sha256-/PJBs6QWvXijOFIX04kZpLb6ZtSQckdOIavLWKKOgXU=" crossorigin="anonymous"></script>
   <title>Dischi</title>
 </head>
 <body>
   <header>
     <div class="header-top">
       <div class="logo">
         <img class="spotify"src="dist/img/logo4.jpg" alt="">
       </div>
     </div>

   </header>
    <div class="wrapper">

      <select name="authors" id="autori">
        <option value="Seleziona un autore">Seleziona un autore</option>
        <option value="Bon Jovi">Bon Jovi</option>
        <option value="The Beatles">The Beatles</option>
        <option value="Pink Floyd">Pink Floyd</option>
        <option value="The Clash">The Clash</option>
        <option value="Green Day">Green Day</option>
        <option value="Miles Davis">Miles Davis</option>
      </select>
      <div class="first">

      </div>
    </div>
   <script id="dischi-template" type="text/x-handlebars-template">
      <div class="box">
        <img class="poster" src="{{poster}}" alt="">
        <h2 class="album"> {{title}} </h2>
        <p class="autore"> {{author}}</p>
        <small class="anno"> {{year}}</small>
      </div>
  </script>
  <script id="noresults-template" type="text/x-handlebars-template">

  <h2>Non ci sono Dischi</h2>

  </script>

   <script src="dist/app.js" charset="utf-8"></script>
 </body>
 </html>
