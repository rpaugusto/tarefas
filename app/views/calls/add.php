<?php require VIEW_ROOT . '/templates/navadmin.php'; ?>

<div class="col-md-12">

    <form action="<?php echo BASE_URL; ?>/app/controller/calladd.php" method="post">

        <legend>Novo Chamado:</legend>

        <div class="form-group">
            <label for="title">Solicitante:</label>
            <select class="form-control" name="client" id="client">
                <option value="0" selected >selecione o departamento</option>
                <?php foreach ($clients as $client): ?>
                    <option value="<?php echo $client['id']; ?>" ><?php echo $client['name']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Departamento:</label>
            <select class="form-control" name="depart" id="depart">
                <option value="0" selected >selecione o departamento</option>
                <?php foreach ($departs as $depart): ?>
                    <option value="<?php echo $depart['id']; ?>" ><?php echo $depart['initials'] . ' - ' . $depart['name']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="body">Problema Encontrado:</label>
            <textarea name="desc" class="form-control" id="desc" cols="30" rows="10"></textarea>
        </div>
        <input type="hidden" name="user" id="user" value="<?php echo $_SESSION['udi']; ?>" />
        <input type="submit" class="btn btn-success" value="SALVAR" />
        <input type="reset" class="btn btn-warning" value="CANCELAR" />
    </form>

</div>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>