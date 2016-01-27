
<?php require VIEW_ROOT . '/templates/navadmin.php'; ?>
<div class="col-md-12">

    <a href="<?php echo BASE_URL; ?>/app/controller/useradd.php" class="btn btn-primary">Novo <span class="glyphicon glyphicon-user"></span></a>
</div>

<div class="col-md-12">

    <?php if (empty($users)): ?>

        <p>Sem conteudo no momento!</p>

    <?php else: ?>

        <table id="exemple" class="table table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Login</th>
                    <th>Ultimo acesso</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?php echo $user['name']; ?></td>
                        <td><?php echo $user['login']; ?></td>
                        <td>
                            <?php echo $user['date']; ?>
                        </td>
                        <td>
                            <a href="<?php echo BASE_URL; ?>/app/controller/userview.php?id=<?php echo $user['id']; ?>">
                                <span class="glyphicon glyphicon-search"></span>
                            </a>|
                            <a href="<?php echo BASE_URL; ?>/app/controller/useredit.php?id=<?php echo $user['id']; ?>">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </a>|
                            <a href="<?php echo BASE_URL; ?>/app/controller/userdel.php?id=<?php echo $user['id']; ?>">
                                <span class="glyphicon glyphicon-trash"></span>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>


    <?php endif; ?>

</div>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>