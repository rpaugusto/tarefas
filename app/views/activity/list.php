<?php require VIEW_ROOT . '/templates/navadmin.php'; ?>

<div class="col-md-12">

    <?php if (empty($activities)): ?>

        <p>Sem conteudo no momento!</p>

    <?php else: ?>

        <table id="exemple" class="table table-hover">
            <thead>
                <tr>
                    <th>Realizado</th>
                    <th>Tecnico</th>
                    <th>Descrição</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($activities as $act): ?>
                    <tr>
                        <td><?php echo $act['data']; ?></td>
                        <td><?php echo $act['nome']; ?></td>
                        <td><?php echo $act['description']; ?></td>
                        <td>
                            <a href="<?php echo BASE_URL; ?>/app/controller/actview.php?id=<?php echo $act['id']; ?>">
                                <span class="glyphicon glyphicon-list-alt"></span>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>


    <?php endif; ?>

</div>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>