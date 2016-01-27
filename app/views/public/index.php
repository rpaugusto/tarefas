<?php require VIEW_ROOT . '/templates/navadmin.php'; ?>

<div class="col-md-9">

    <?php if (empty($calls)): ?>

        <p>Nenhum chamado aberto!</p>

    <?php else: ?>

        <table id="exemple" class="table table-hover">
            <thead>
                <tr>
                    <th>Solicitante</th>
                    <th>Departamento</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($calls as $call): ?>
                    <tr>
                        <td><?php echo $call['name']; ?></td>
                        <td><?php echo $call['depart']; ?></td>
                        <td>
                            <a href="<?php echo BASE_URL; ?>/app/controller/callview.php?id=<?php echo $call['id']; ?>">
                                <span class="glyphicon glyphicon-list-alt"></span>
                            </a>|
                            <a href="<?php echo BASE_URL; ?>/app/controller/actionadd.php?id=<?php echo $call['id']; ?>">
                                <span class="glyphicon glyphicon-info-sign"></span>
                            </a>|
                            <a href="<?php echo BASE_URL; ?>/app/controller/callclose.php?id=<?php echo $call['id']; ?>">
                                <span class="glyphicon glyphicon-ok-sign"></span>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>


    <?php endif; ?>

</div>

<?php require_once VIEW_ROOT . '/templates/section.php'; ?>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
