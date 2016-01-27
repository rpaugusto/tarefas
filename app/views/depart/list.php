
<?php require VIEW_ROOT . '/templates/navadmin.php'; ?>
<div class="col-md-12">

    <a href="<?php echo BASE_URL; ?>/app/controller/departadd.php" class="btn btn-primary">Novo</a>
</div>

<div class="col-md-12">

    <?php if (empty($departs)): ?>

        <p>Sem conteudo no momento!</p>

    <?php else: ?>

        <table id="exemple" class="table table-hover">
            <thead>
                <tr>
                    <th></th>
                    <th>Departamento</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($departs as $depart): ?>
                    <tr>
                        <td><?php echo $depart['initials']; ?></td>
                        <td><?php echo $depart['name']; ?></td>
                        <td>
                            <a href="<?php echo BASE_URL; ?>/app/controller/departview.php?id=<?php echo $depart['id']; ?>">
                                <span class="glyphicon glyphicon-search"></span>
                            </a>|
                            <a href="<?php echo BASE_URL; ?>/app/controller/departdel.php?id=<?php echo $depart['id']; ?>">
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