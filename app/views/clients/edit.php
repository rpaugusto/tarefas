<?php require VIEW_ROOT . '/templates/navadmin.php'; ?>

<div class="col-md-12">

    <form action="<?php echo BASE_URL; ?>/app/controller/clientedit.php" method="post">

        <legend>Editando:</legend>

        <div class="form-group">
            <label for="key">Codigo:</label>
            <input type="text" class="form-control" name="key" id="key" disabled value="<?php echo $client['id']; ?>" />
        </div>
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" name="name" id="name" autocomplete="off" value="<?php echo $client['name']; ?>" />
        </div>
        <div class="form-group">
            <label for="fone">Ramal:</label>
            <input type="text" class="form-control" name="fone" id="fone" autocomplete="off" value="<?php echo $client['fone']; ?>" />
        </div>
        <div class="form-group">
            <label for="depart">Departamento:</label>
            <select class="form-control" name="depart" id="client">
                <option value="0" >selecione o departamento</option>
                <?php foreach ($departs as $depart): ?>
                    <option value="<?php echo $depart['id']; ?>" <?php echo (($client['depart_id'] == $depart['id'] ) ? 'selected' : ''); ?> ><?php echo $depart['initials'] . ' - ' . $depart['name']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="text" class="form-control" name="email" id="email" autocomplete="off" value="<?php echo $client['email']; ?>" />
        </div>
        
        <input type="hidden" value="<?php echo $client['id']?>" name="id" id="id" />
        <input type="submit" class="btn btn-success" value="SALVAR" />
        <input type="reset" class="btn btn-warning" value="CANCELAR" />
    </form>

</div>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>