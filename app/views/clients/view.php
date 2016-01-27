
<?php require VIEW_ROOT . '/templates/navadmin.php'; ?>

<div class="col-md-10">

    <div class="panel panel-primary">
        <div class="panel panel-heading">
            <strong> Ficha do Solicitante: </strong>
        </div>
        <div class="panel panel-collapse">
            <ul class="nav nav-pills nav-stacked">
                <li role="presentation" >
                    <a>
                        <strong>Nome:</strong>
                        <?php echo $client['name']; ?>
                    </a>
                </li>
                <li role="presentation" >
                    <a>
                        <strong>Departamento: </strong>
                        <?php echo $client['depart']; ?>
                    </a>
                </li>
                <li role="presentation" >
                    <a>
                        <strong>Ramal: </strong>
                        <?php echo $client['fone']; ?>
                    </a>
                </li>
                <li role="presentation" >
                    <a>
                        <strong>E-mail: </strong>
                        <?php echo $client['email']; ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php require VIEW_ROOT . '/templates/sectionclient.php'; ?>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>