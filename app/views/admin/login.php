<?php require_once VIEW_ROOT . '/templates/header.php'; ?>

<form class="form-signin"  action="<?php echo BASE_URL; ?>/app/controller/login.php" method="post" >
    <h2 class="form-signin-heading">
        Identifique-se!
    </h2>
    <input type="text" id="user" name="user" class="form-control" placeholder="usuario" required autofocus autocomplete="off">
    <input type="password" id="passwd" name="passwd" class="form-control" placeholder="senha" required>
    <input type="submit" class="btn btn-primary" value="Entrar" />
</form>

<?php require_once VIEW_ROOT . '/templates/footer.php'; ?>