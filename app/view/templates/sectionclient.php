
<div class="col-md-2 ">
    <div class="panel panel-collapse">

        <div class="panel panel-primary">
            <div class="panel panel-heading">
                <strong> Menu: </strong>
            </div>
            <div class="panel panel-collapse">
                <ul class="nav nav-pills nav-stacked">
                    <li role="presentation" >
                        <a href="<?php echo BASE_URL; ?>/app/controller/clientadd.php">Novo</a>
                    </li>
                    <li role="presentation" >
                        <a href="<?php echo BASE_URL; ?>/app/controller/clientlist.php">Lista</a>
                    </li>
                    <li role="presentation" >
                        <a href="<?php echo BASE_URL; ?>/app/controller/clientedit.php?id=<?php echo $client['id']; ?>">Editar</a>
                    </li>
                    <li role="presentation" >
                        <a href="<?php echo BASE_URL; ?>/app/controller/clientdel.php?id=<?php echo $client['id']; ?>">Apagar</a>
                    </li>
                    <li role="presentation" >
                        <a href="#">Chamados</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
