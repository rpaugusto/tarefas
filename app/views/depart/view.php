<?php require VIEW_ROOT . '/templates/navadmin.php'; ?>

<div class="col-md-10">

    <div class="panel panel-primary">
        <div class="panel panel-heading">
            <strong> Informações do Departamento: </strong>
        </div>
        <div class="panel panel-collapse">
            <ul class="nav nav-pills nav-stacked">
                <li role="presentation" >
                    <a>
                        <strong>Nome:</strong>
                        <?php echo $depart['name']; ?> / <?php echo $depart['initials']; ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel panel-heading">
            <strong> Lista de Ramais do Departamento: </strong>
        </div>
        <div class="panel panel-collapse">
            <table id="exemple" class="table table-hover">
                <thead>
                    <tr>
                        <th>Ramal</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($clients as $client): ?>
                        <tr>
                            <td><?php echo $client['fone']; ?> --- <?php echo $client['name']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>


<div class="col-md-2 ">
    <div class="panel panel-collapse">

        <div class="panel panel-primary">
            <div class="panel panel-heading">
                <strong> Menu: </strong>
            </div>
            <div class="panel panel-collapse">
                <ul class="nav nav-pills nav-stacked">
                    <li role="presentation" >
                        <a href="<?php echo BASE_URL; ?>/app/controller/clientadd.php">Novo</a>
                    </li>
                    <li role="presentation" >
                        <a href="<?php echo BASE_URL; ?>/app/controller/clientlist.php">Lista</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>