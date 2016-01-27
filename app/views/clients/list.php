
<?php require VIEW_ROOT . '/templates/navadmin.php'; ?>
<div class="col-md-12">

    <a href="<?php echo BASE_URL; ?>/app/controller/clientadd.php" class="btn btn-primary">Novo <span class="glyphicon glyphicon-user"></span></a>
</div>

<div class="col-md-12">

    <?php if (empty($clients)): ?>

        <p>Sem conteudo no momento!</p>

    <?php else: ?>

        <table id="exemple" class="table table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Departamento</th>
                    <th>Ramal</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clients as $client): ?>
                    <tr>
                        <td><?php echo $client['name']; ?></td>
                        <td><?php echo $client['depart']; ?></td>
                        <td><?php echo $client['fone']; ?></td>
                        <td>
                            <a href="<?php echo BASE_URL; ?>/app/controller/clientview.php?id=<?php echo $client['id']; ?>">
                                <span class="glyphicon glyphicon-search"></span>
                            </a>|
                            <a href="<?php echo BASE_URL; ?>/app/controller/clientedit.php?id=<?php echo $client['id']; ?>">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </a>|
                            <a href="<?php echo BASE_URL; ?>/app/controller/clientdel.php?id=<?php echo $client['id']; ?>">
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