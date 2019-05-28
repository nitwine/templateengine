<!DOCTYPE html>
<html lang="<?php l("lang") ?>">
<head>
  <meta charset="UTF-8">
  <title><?php l("h1") ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand text-light" href="?lang=<?php echo $_GET['lang']; ?>&pag=uno">@nitwine</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link text-light" href="?lang=<?php echo $_GET['lang']; ?>&pag=dos">TI <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php l("idi") ?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item"  href="?lang=en&pag=<?php echo $_GET['pag']; ?>">Ingles(EN)</a>
            <a class="dropdown-item"  href="?lang=zh&pag=<?php echo $_GET['pag']; ?>">Chino(ZH)</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item"  href="?lang=es&pag=<?php echo $_GET['pag']; ?>">Español(ES)</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <!-- fin nav -->
