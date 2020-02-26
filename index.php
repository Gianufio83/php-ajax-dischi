<?php
  include __DIR__.'/database.php';

  // var_dump($database);
  // die();
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="dist/app.css">
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
   <main>
       <div class="wrapper">
         <?php if (!empty($database)) { ?>
           <div class="first">
             <?php foreach ($database as $disco) { ?>
               <div class="box">
                 <?php
                  $title= $disco['title'];
                  $author= $disco['author'];
                  $year= $disco['year'];
                  $poster= $disco['poster'];
                  ?>
                 <img class="poster" src=" <?php echo $poster; ?>" alt="">
                 <h2 class="album"> <?php echo $title; ?></h2>
                 <p class="autore"> <?php echo $author; ?></p>
                 <small class="anno"> <?php echo $year; ?></small>
               </div>
              <?php } ?>
           </div>
         <?php }  else { ?>
           <h2> Non ci sono Dischi</h2>
          <?php } ?>

       </div>
   </main>
   <footer>

   </footer>

 </body>
 </html>
