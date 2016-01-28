<?php require VIEW_ROOT . '/templates/navadmin.php'; ?>

<div class="col-md-9">
    <div class="col-md-9">
        
        <?php if (empty($calls)): ?>

            <p>Nenhum chamado aberto!</p>

        <?php else: ?>

            <table id="exemple" class="table table-hover">
                <thead>
                    <tr>
                        <th colspan="=3">Ultimos Chamados</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($calls as $call): ?>
                        <tr>
                            <td><?php echo $call['name']; ?></td>
                            <!--<td><?php echo $call['depart']; ?></td>-->
                            <td>
                                <a href="<?php echo BASE_URL; ?>/app/controller/callview.php?id=<?php echo $call['id']; ?>">
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                </a>|
                                <a href="<?php echo BASE_URL; ?>/app/controller/actionadd.php?id=<?php echo $call['id']; ?>">
                                    <span class="glyphicon glyphicon-info-sign"></span>
                                </a>
                                <!--<a href="<?php echo BASE_URL; ?>/app/controller/callclose.php?id=<?php echo $call['id']; ?>">
                                    <span class="glyphicon glyphicon-ok-sign"></span>
                                </a>-->
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>


        <?php endif; ?>
    </div>
    
    <div class="col-md-3">
        
        <?php if (empty($activities)): ?>

            <p>Nenhum atividade registrada até o momento!</p>

        <?php else: ?>

            <table id="exemple" class="table table-hover">
                <thead>
                    <tr>
                        <th colspan="=2">Ultimas Atidades</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($activities as $act): ?>
                        <tr>
                            <td><?php echo $act['time']; ?></td>
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
    
</div>

<?php require_once VIEW_ROOT . '/templates/section.php'; ?>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
