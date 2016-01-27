<div class="col-md-3" role="alert">
    <div class="panel panel-primary">

        <div class="panel-heading">
            <strong>
                <h4>Bem Vindo!</h4>
                <p>$_SESSION['name']);</p>
            </strong>
            
        </div>

        <div class="panel-body">

            <div class="panel panel-primary">
                <div class="panel panel-heading">
                    <strong> TAREFAS: </strong>
                    <span class="badge pull-right">$tasks->rowCount()</span>
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
            <?php //if ($_SESSION['level'] > 5): ?>
                <div class="panel panel-primary">
                    <div class="panel panel-heading">
                        <strong> USUARIOS: </strong>
                        <span class="badge pull-right"><?php echo ($users->rowCount()); ?></span>
                    </div>
                    <div class="panel panel-collapse">
                        <ul class="nav nav-pills nav-stacked">
                            <li role="presentation" ><a href="<?php echo BASE_URL; ?>/app/controller/useradd.php" >NOVO</a></li>
                            <li role="presentation" ><a href="<?php echo BASE_URL; ?>/app/controller/userlist.php" >LISTAR</a></li>
                            <li role="presentation" ><a href="<?php echo BASE_URL; ?>/app/controller/userview.php?id=<?php echo $_SESSION['udi']; ?>" >PERFIL</a></li>
                        </ul>
                    </div>
                </div>
            <?php /*else: ?>
                <div class="panel panel-primary">
                    <div class="panel panel-heading">
                        <strong> USUARIO: </strong>
                    </div>
                    <div class="panel panel-collapse">
                        <ul class="nav nav-pills nav-stacked">
                            <li role="presentation" ><a href="<?php echo BASE_URL; ?>/app/controller/userlist.php" >MUDAR SENHA</a></li>
                            <li role="presentation" ><a href="<?php echo BASE_URL; ?>/app/controller/userperfil.php" >EDITAR PERFIL</a></li>
                        </ul>
                    </div>
                </div>
            <?php endif;*/ ?>
        </div>
    </div>
</div>

