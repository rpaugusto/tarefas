<?php require VIEW_ROOT . '/templates/navadmin.php'; ?>
<div class="col-md-12">
    <a href="<?php echo BASE_URL; ?>/app/controller/calladd.php" class="btn btn-primary">Novo <span class="glyphicon glyphicon-ok-sign"></span></a>
</div>
<div class="col-md-12">

    <?php if (empty($calls)): ?>

        <p>Sem conteudo no momento!</p>

    <?php else: ?>

        <table id="exemple" class="table table-hover">
            <thead>
                <tr>
                    <th>Solicitante</th>
                    <th>Departamento</th>
                    <th>Descrição</th>
                    <th>Status</th>
                    <th>Modificações</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($calls as $call): ?>
                    <tr>
                        <td><?php echo $call['name']; ?></td>
                        <td><?php echo $call['depart']; ?></td>
                        <td><?php echo $call['description']; ?></td>
                        <td>
                            <?php
                            if ($call['status'] == 'O') {
                                echo 'ABERTO';
                            } elseif ($call['status'] == 'C') {
                                echo 'FECHADO';
                            } else {
                                echo 'EM ANDAMENTO';
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            if (empty($call['modified'])) {
                                echo date("d/m/Y", strtotime($call['created']));
                            } else {
                                echo date("d/m/Y", strtotime($call['modified']));
                            }
                            ?>
                        </td>
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

<?php require VIEW_ROOT . '/templates/footer.php'; ?>