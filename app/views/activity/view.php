<?php require VIEW_ROOT . '/templates/navadmin.php'; ?>

<div class="col-md-12">

    <div class="panel panel-primary">
        <div class="panel panel-heading">
            <strong> Atividade realizada por: </strong>
            <?php echo $activities['nome']; ?>
            <strong>em:</strong>
            <?php echo $activities['data']; ?>
        </div>
        <ul class="nav nav-pills nav-stacked">
            <li role="presentation" >
                <a>
                    <?php echo $activities['description']; ?>
                </a>
            </li>
    </div>

</div>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>