<?php require VIEW_ROOT . '/templates/navadmin.php'; ?>

<div class="col-md-12">

    <form action="<?php echo BASE_URL; ?>/app/controller/actionadd.php" method="post">

        <legend>Registro de atendimento:</legend>

        <div class="form-group">
            <label for="body">Solução adotada:</label>
            <textarea name="desc" class="form-control" id="desc" cols="30" rows="10"></textarea>
        </div>
        <input type="hidden" name="user" id="user" value="<?php echo $_SESSION['udi']; ?>" />
        <input type="hidden" name="call" id="call" value="<?php echo $_GET['id']; ?>" />
        <input type="submit" class="btn btn-success" value="SALVAR" />
        <input type="reset" class="btn btn-warning" value="CANCELAR" />
    </form>

</div>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>