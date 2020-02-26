<?php
  include __DIR__.'/database.php';


  $nameDisco = $_GET['author'];
  if (empty($nameDisco) || $nameDisco === 'Seleziona un autore' ) {
    header('Content-Type: application/json');
    echo json_encode($database);
  } else {
    $cdSelected = [];
    foreach ($database as $disco) {
      if ($disco['author'] === $nameDisco) {
        $cdSelected[] = $disco;
      }
    }
    if (empty($cdSelected)) {
      $cdSelected = [
        [
          'title' => 'Nessun titolo',
          'author' => 'Nessun autore',
          'year' => 'Nessun anno',
          'poster' => 'image.shutterstock.com/image-vector/404-not-found-problem-disconnect-600w-721322569.jpg'
        ]
      ];
      header('Content-Type: application/json');
      echo json_encode($cdSelected);
    }
  }










 ?>
