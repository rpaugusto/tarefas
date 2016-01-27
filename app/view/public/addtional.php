<?php require VIEW_ROOT . '/templates/navadmin.php'; ?>

<div class="col-md-12 alert alert-info" role="alert">

    <div class="col-md-6">
        <div class="panel panel-primary">
            <div class="panel panel-heading">
                <strong> SOLICITANTES: </strong>
                <span class="badge pull-right"><?php echo ($clients->rowCount()); ?></span>
            </div>
            <div class="panel-body">
                <ul class="nav nav-pills nav-stacked">
                    <li role="presentation" >
                        <a href="<?php echo BASE_URL; ?>/app/controller/clientadd.php">CADASTRAR</a>
                    </li>
                    <li role="presentation" >
                        <a href="<?php echo BASE_URL; ?>/app/controller/clientlist.php">LISTAR</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="panel panel-primary">
            <div class="panel panel-heading">
                <strong> DEPARTAMENTOS: </strong>
                <span class="badge pull-right"><?php echo ($departs->rowCount()); ?></span>
            </div>
            <div class="panel-body">
                <ul class="nav nav-pills nav-stacked">
                    <li role="presentation" >
                        <a href="<?php echo BASE_URL; ?>/app/controller/departadd.php">CADASTRAR</a>
                    </li>
                    <li role="presentation" >
                        <a href="<?php echo BASE_URL; ?>/app/controller/departlist.php">LISTAR</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
