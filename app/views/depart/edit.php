<?php require VIEW_ROOT . '/templates/navadmin.php'; ?>

<form action="<?php echo BASE_URL; ?>/app/controller/departedit.php" method="post">

    <legend>Editar Departamento:</legend>

    <div class="form-group">
        <label for="name">Departamento / Nucleo:</label>
        <input class="form-control" type="text" name="name" id="name" autocomplete="off" value="<?php echo $depart['id']; ?>"/>
    </div>
    <div class="form-group">
        <label for="initials">Sigla</label>
        <input type="text" class="form-control" name="initials" id="initials" autocomplete="off" value="<?php echo $depart['id']; ?>" />
    </div>
    <input type="hidden" name="id" id="id" value="<?php echo $depart['id']; ?>" />
    <input type="submit" class="btn btn-success" value="SALVAR" />
    <input type="reset" class="btn btn-warning" value="CANCELAR" />
</form>


<?php require VIEW_ROOT . '/templates/footer.php'; ?>