<?php
include __DIR__ . "/database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-ajax-dischi</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <img src="img/spotify-logo.png" alt="logo spotify">
  </header>

  <main>
    <div class="container_medium">
      <section>
        <ul id="albums_container">
          <?php foreach ( $database as $album ): ?>
            <li class="album">
              <a href="#">
                <img src="<?= "{$album["poster"]}" ?>" alt="<?= "{$album["title"]} cover img" ?>">
                <div class="title_album"><?= "{$album["title"]}" ?><div>
                <div class="author_album"><?= "{$album["author"]}" ?></div>
                <div class="year_album"><?= "{$album["year"]}" ?></div>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </section>
    </div>
  </main>
</body>
</html>