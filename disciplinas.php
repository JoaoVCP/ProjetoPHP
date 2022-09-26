<?php
$titulo = "Disciplinas"; 

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

<br>

<div>
    <table class="table table-striped table-hover">
        <thead>  
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Sigla</th>
                <th scope="col">Apelido</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <?php

        $materias = array('Administração', 'Contabilidade', 'Linguagem de Programação', 'Engenharia de software', 'Inglês I', 'Inglês II', 'Programação de Scripts', 'Programação Web', 'Matemática Discreta', 'Geometria');
        $apelidos = array('ADM', 'CONT', 'LPROG', 'ENGSOFTW', 'ING I', 'ING II', 'PROGSCRIPT', 'PROGWEB', 'MATDISC', 'GEO');

            for($id = 0; $id < 10; $id++) {
        ?>        
        <tbody>
            <tr>
                <th scope="row"><?php echo $id ?></th>
                <td><?php echo $materias[$id]?></td>
                <td></td>
                <td><?php echo $apelidos[$id]?></td>
                <td><button type="button" class="btn btn-warning">Editar</button>&nbsp&nbsp&nbsp<button type="button" class="btn btn-danger">Excluir</button></td>
            </tr>
        </tbody>
        <?php } ?>
        </table>
</div>

<?php include "./rodape.php"; ?>
