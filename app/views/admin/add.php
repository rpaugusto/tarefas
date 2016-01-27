<?php require VIEW_ROOT . '/templates/navadmin.php'; ?>

<form action="<?php echo BASE_URL; ?>/app/controller/useradd.php" method="post">

    <legend>Novo Usuario:</legend>

    <div class="form-group">
        <label for="title">Nome:</label>
        <input type="text" class="form-control" name="name" id="name" />
    </div>
    <div class="form-group">
        <label for="keyword">Login:</label>
        <input type="text" class="form-control" name="login" id="login" />
    </div>
    <div class="form-group">
        <label for="slug">Senha:</label>
        <input type="password" class="form-control" name="passwd" id="passwd" />
    </div>
    <div class="radio">
        <label class="radio-inline">
            <input type="radio" name="level" id="level1" value="1" checked="checked"> Usuario
        </label>
        <label class="radio-inline">
            <input type="radio" name="level" id="level2" value="2"> Tecnico
        </label>
        <label class="radio-inline">
            <input type="radio" name="level" id="level3" value="9"> Administrador
        </label>
    </div>
    <div class="radio">
        <label class="radio-inline">
            <input type="radio" name="active" id="activeTrue" value="1" checked="checked"> Ativo
        </label>
        <label class="radio-inline">
            <input type="radio" name="active" id="activeFalse" value="0"> Inativo
        </label>
    </div>

    <input type="submit" class="btn btn-success" value="SALVAR" />
    <input type="reset" class="btn btn-warning" value="CANCELAR" />
</form>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
