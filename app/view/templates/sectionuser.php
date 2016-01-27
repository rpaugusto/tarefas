
<div class="col-md-2 ">
    <div class="panel panel-collapse">

        <div class="panel panel-primary">
            <div class="panel panel-heading">
                <strong> USUÁRIO: </strong>
            </div>
            <div class="panel panel-collapse">
                <ul class="nav nav-pills nav-stacked">
                    <li role="presentation" >
                        <a href="<?php echo BASE_URL; ?>/app/controller/useradd.php">Novo</a>
                    </li>
                    <li role="presentation" >
                        <a href="<?php echo BASE_URL; ?>/app/controller/userlist.php">Lista</a>
                    </li>
                    <li role="presentation" >
                        <a href="<?php echo BASE_URL; ?>/app/controller/useredit.php?id=<?php echo $user['id']; ?>">Editar</a>
                    </li>
                    <li role="presentation" >
                        <a href="<?php echo BASE_URL; ?>/app/controller/userdel.php?id=<?php echo $user['id']; ?>">Apagar</a>
                    </li>
                    <li role="presentation" >
                        <a href="<?php echo BASE_URL; ?>/app/controller/userpasswd.php?id=<?php echo $user['id']; ?>">Mudar Senha</a>
                    </li>
                    <?php if ($user['active'] == 1): ?>
                        <li role="presentation" >
                            <a href="<?php echo BASE_URL; ?>/app/controller/userblock.php?id=<?php echo $user['id']; ?>">Bloquear</a>
                        </li>
                    <?php else: ?>
                        <li role="presentation" >
                            <a href="<?php echo BASE_URL; ?>/app/controller/userunlock.php?id=<?php echo $user['id']; ?>">Liberar</a>
                        </li>
                    <?php endif; ?>
                    <li role="presentation" >
                        <a href="#">Chamados</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
