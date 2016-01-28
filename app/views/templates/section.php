<div class="col-md-3" role="alert">
    <div class="panel panel-primary">

        <div class="panel-heading">
            <strong>
                <h4>Bem Vindo!</h4>
                <p><?php echo strtoupper($_SESSION['name']); ?></p>
            </strong>
            <small>
                Ultimo acesso: <?php echo $_SESSION['log']; ?>
            </small>
        </div>

        <div class="panel-body">

            <div class="panel panel-primary">
                <div class="panel panel-heading">
                    <strong> CHAMADOS: </strong>
                    <span class="badge pull-right"><?php echo ($calls->rowCount()); ?></span>
                </div>
                <div class="panel panel-collapse">
                    <ul class="nav nav-pills nav-stacked">
                        <li role="presentation" ><a href="<?php echo BASE_URL; ?>/app/controller/calladd.php" >NOVO</a></li>
                        <li role="presentation" >
                            <?php if ($_SESSION['level'] > 5): ?>
                                <a href="<?php echo BASE_URL; ?>/app/controller/calllist.php" >TODOS</a>
                            <?php else: ?>
                                <a href="<?php echo BASE_URL; ?>/app/controller/calllist.php?id=<?php echo $_SESSION['udi'] ?>" >MEUS</a>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel panel-heading">
                    <strong> ATIVIDADES: </strong>
                    <span class="badge pull-right"><?php echo ($ctacts->rowCount()); ?></span>
                </div>
                <div class="panel panel-collapse">
                    <ul class="nav nav-pills nav-stacked">
                        <li role="presentation" ><a href="<?php echo BASE_URL; ?>/app/controller/actadd.php" >NOVO</a></li>
                        <li role="presentation" ><a href="<?php echo BASE_URL; ?>/app/controller/actlist.php" >LISTAR</a></li>

                    </ul>
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel panel-heading">
                    <strong> TAREFAS: </strong>
                    <span class="badge pull-right"><?php echo ($tasks->rowCount()); ?></span>
                </div>
                <div class="panel panel-collapse">
                    <ul class="nav nav-pills nav-stacked">
                        <li role="presentation" ><a href="<?php echo BASE_URL; ?>/app/controller/taskadd.php" >NOVO</a></li>
                        <li role="presentation" ><a href="<?php echo BASE_URL; ?>/app/controller/tasklist.php" >LISTAR</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

