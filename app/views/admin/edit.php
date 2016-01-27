<?php require VIEW_ROOT . '/templates/navadmin.php'; ?>

<form action="<?php echo BASE_URL; ?>/app/controller/useredit.php" method="post">

    <legend>Editando</legend>
    
    <div class="form-group">
        <label for="id">Codigo:</label>
        <input type="text" class="form-control" name="key" id="key" value="<?php echo $user['id']; ?>" disabled=""/>
    </div>
    <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" class="form-control" name="name" id="name" value="<?php echo $user['login']; ?>" autocomplete="off" />
    </div>
    <div class="form-group">
        <label for="login">Login:</label>
        <input type="text" class="form-control" name="login" id="login" value="<?php echo $user['login']; ?>" disabled=""/>
    </div>    
    <div class="radio">
        <label class="radio-inline">
            <input type="radio" name="level" id="level1" value="1" <?php echo (($user['level'] == 1 ) ? 'checked=""' : ''); ?> /> Usuario
        </label>
        <label class="radio-inline">
            <input type="radio" name="level" id="level2" value="2" <?php echo (($user['level'] == 2 ) ? 'checked=""' : ''); ?> /> Tecnico
        </label>
        <label class="radio-inline">
            <input type="radio" name="level" id="level3" value="9" <?php echo (($user['level'] == 9 ) ? 'checked=""' : ''); ?> /> Administrador
        </label>
    </div>
    
    <input type="hidden" value="<?php echo $user['id']; ?>" name="id" />
    <input type="submit" class="btn btn-success" value="SALVAR" />
    <input type="reset" class="btn btn-warning" value="CANCELAR" />
</form>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>

