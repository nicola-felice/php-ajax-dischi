<?php 

require __DIR__ . "/../database.php";

header("Content-Type: application/json");

if ( !empty($_GET["genresList"]) ) {
  $genresList = [];
  foreach ( $database as $elm ) {
    if ( !in_array($elm["genre"], $genresList) ) {
      $genresList[] = $elm["genre"];
    }
  };
  echo json_encode($genresList);
  exit();
} 

if ( !empty($_GET["genre"]) ) {
  $arrFilteredByGenre = array_filter( $database, function($elm) {
    return $elm["genre"] == $_GET["genre"];
  });
  echo json_encode($arrFilteredByGenre);
} else {
  echo json_encode($database);
}
