<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./bootstrap.min.css" rel="stylesheet">
    <title>
        <?php echo $titulo; ?>
    </title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div id="logo"> <style>
    #cabecalho {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
      }
    </style>
      <img src="./download.png" width="70" height="70" alt="">
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Professores</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cadastro
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./cadastro_usuario.php">Cadastrar</a></li>
            <li><a class="dropdown-item" href="#">Pesquisar</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Bloquear</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./salas.php">Salas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./disciplinas.php">Disciplinas</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
