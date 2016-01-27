<?php require VIEW_ROOT . '/templates/navadmin.php'; ?>

<div class="col-md-12">

    <form action="<?php echo BASE_URL; ?>/app/controller/clientadd.php" method="post">

        <legend>Novo Solicitante:</legend>

        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" name="name" id="name" />
        </div>
        <div class="form-group">
            <label for="fone">Ramal:</label>
            <input type="text" class="form-control" name="fone" id="fone" />
        </div>
        <div class="form-group">
            <label for="depart">Departamento:</label>
            <select class="form-control" name="depart" id="client">
                <option value="0" selected >selecione o departamento</option>
                <?php foreach ($departs as $depart): ?>
                    <option value="<?php echo $depart['id']; ?>" ><?php echo $depart['initials'] . ' - ' . $depart['name']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="text" class="form-control" name="email" id="email" />
        </div>

        <input type="submit" class="btn btn-success" value="SALVAR" />
        <input type="reset" class="btn btn-warning" value="CANCELAR" />
    </form>

</div>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>