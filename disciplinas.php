<?php
$titulo = "Página Inicial"; 

include "./cabecalho.php"; 

?>

<br>
<div class="card">
    <div class="card-header">
        Lista de Disciplinas
    </div>
    <div class="card-body">
        <nav class="navbar bg-light">
        <div class="container-fluid">
            <button type="button" class="btn btn-success">Nova Disciplina</button>
            <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="" aria-label="Search">
            <button type="button" class="btn btn-primary">Pesquisar</button>
            </form>
        </div>
    </div>
    </nav>
</div>

<?php include "./rodape.php"; ?>
