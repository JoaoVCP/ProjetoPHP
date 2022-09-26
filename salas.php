<?php
$titulo = "Salas"; 

include "./cabecalho.php"; 

?>

<br>
<div class="card">
    <div class="card-header">
        Lista de Salas
    </div>
    <div class="card-body">
        <nav class="navbar bg-light">
        <div class="container-fluid">
            <button type="button" class="btn btn-success">Nova Sala</button>
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

        $salamaterias = array('Sala de Administração', 'Sala de Contabilidade', 'Sala de Linguagem de Programação', 'Sala de Engenharia de software', 'Sala de Inglês I', 'Sala de Inglês II', 'Sala de Programação de Scripts', 'Sala de Programação Web', 'Sala de Matemática Discreta', 'Sala de Geometria');
        $apelidossalas = array('SADM', 'SCONT', 'SLPROG', 'SENGSOFTW', 'SING I', 'SING II', 'SPROGSCRIPT', 'SPROGWEB', 'SMATDISC', 'SGEO');

            for($id = 0; $id < 10; $id++) {
        ?>        
        <tbody>
            <tr>
                <th scope="row"><?php echo $id ?></th>
                <td><?php echo $salamaterias[$id]?></td>
                <td></td>
                <td><?php echo $apelidossalas[$id]?></td>
                <td><button type="button" class="btn btn-warning">Editar</button>&nbsp&nbsp&nbsp<button type="button" class="btn btn-danger">Excluir</button></td>
            </tr>
        </tbody>
        <?php } ?>
        </table>
</div>

<?php include "./rodape.php"; ?>
