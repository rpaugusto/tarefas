<?php require VIEW_ROOT . '/templates/navadmin.php'; ?>

<div class="col-md-12">

    <div class="panel panel-primary">
        <div class="panel panel-heading">
            <strong> Informações da Ocorrência: </strong>
            <span class="badge pull-right">
                <a href="<?php echo BASE_URL; ?>/app/reports/repcall.php?id=<?php echo $call['id']; ?>">
                    <span class="glyphicon glyphicon-print"></span>
                </a>

            </span>
        </div>
        <div class="panel panel-collapse">
            <ul class="nav nav-pills nav-stacked">
                <li role="presentation" >
                    <a>
                        <strong>Solicitante:</strong>
                        <?php echo $call['name']; ?>
                    </a>
                </li>
                <li role="presentation" >
                    <a>
                        <strong>Departamento:</strong>
                        <?php echo $call['depart']; ?>
                    </a>
                </li>
                <li role="presentation" >
                    <a>
                        <strong>Descrição do Problema:</strong>
                        <?php echo $call['description']; ?>
                    </a>
                </li>
                <li role="presentation" >
                    <a>
                        <strong>Status:</strong>
                        <?php
                        if ($call['status'] == 'O') {
                            echo 'ABERTO';
                        } elseif ($call['status'] == 'C') {
                            echo 'FECHADO';
                        } else {
                            echo 'EM ANDAMENTO';
                        }
                        ?>
                    </a>
                </li>
                <li role="presentation" >
                    <a>
                        <strong>Ultima ação realizada em:</strong>
                        <?php
                        if (empty($call['modified'])) {
                            echo date("d/m/Y", strtotime($call['created']));
                        } else {
                            echo date("d/m/Y", strtotime($call['modified']));
                        }
                        ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="panel panel-primary">
        <div class="panel panel-heading">
            <strong> Tratativas: </strong>
            <span class="badge pull-right">
                <strong><?php echo ($actions->rowCount()); ?></strong>
                <a href="<?php echo BASE_URL; ?>/app/controller/actionadd.php?id=<?php echo $call['id']; ?>">
                    <span class="glyphicon glyphicon-plus-sign"></span>
                </a>

            </span>
        </div>
        <div class="panel panel-collapse">

            <?php foreach ($actions as $action): ?>
                <div class="panel panel-info">
                    <div class="panel panel-heading">
                        <?php echo $action['name']; ?> em: <?php echo $action['daytime']; ?>
                    </div>
                    <div class="panel panel-collapse">
                        <?php echo $action['desc_act']; ?>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>

</div>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>