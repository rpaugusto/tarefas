
<?php require VIEW_ROOT . '/templates/navadmin.php'; ?>



<div class="col-md-10">

    <div class="panel panel-primary">
        <div class="panel panel-heading">
            <strong> Ficha do usuário: </strong>
        </div>
        <div class="panel panel-collapse">
            <ul class="nav nav-pills nav-stacked">
                <li role="presentation" >
                    <a>
                        <strong>Nome:</strong>
                        <?php echo $user['name']; ?>
                    </a>
                </li>
                <li role="presentation" >
                    <a>
                        <strong>LOGIN: </strong>
                        <?php echo $user['login']; ?>
                    </a>
                </li>
                <li role="presentation" >
                    <a>
                        <strong>PERFIL: </strong>

                        <?php
                        if ($user['level'] == 1) {
                            echo 'Usuário';
                        } elseif ($user['level'] == 2) {
                            echo 'Técnico';
                        } else {
                            echo 'Administrador';
                        }
                        ?>
                    </a>
                </li>
                <li role="presentation" >
                    <a>
                        <strong>ULTIMO ACESSO: </strong>      
                        <?php echo $user['date']; ?>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>

<!-- MENU DE CONTROLE ESPECIFICO POR USUARIO - BARRA LATERAL -->

<?php require VIEW_ROOT . '/templates/sectionuser.php'; ?>

<!-- MENU DE CONTROLE ESPECIFICO POR USUARIO - BARRA LATERAL -->

<?php require VIEW_ROOT . '/templates/footer.php'; ?>