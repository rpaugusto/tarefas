
<?php require VIEW_ROOT . '/templates/navadmin.php'; ?>


<div class="col-md-10">
    <form action="<?php echo BASE_URL; ?>/app/controller/userpasswd.php" method="post">
        <div class="panel panel-primary">
            <div class="panel panel-heading">
                <strong> Alterando senha: </strong>
            </div>
            <div class="panel panel-collapse">
                <ul class="nav nav-pills nav-stacked">
                    <li role="presentation" >
                        <a>
                            <div class="form-group">
                                <label for="slug">Nova Senha:</label>
                                <input type="password" class="form-control" name="passwd" id="passwd" />
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="panel panel-footer">
                <input type="hidden" value="<?php echo $user['id']; ?>" name="id" />
                <input type="submit" class="btn btn-success" value="SALVAR" />
                <input type="reset" class="btn btn-warning" value="CANCELAR" />
            </div>
        </div>
    </form>
</div>

<!-- MENU DE CONTROLE ESPECIFICO POR USUARIO - BARRA LATERAL -->

<?php require VIEW_ROOT . '/templates/sectionuser.php'; ?>

<!-- MENU DE CONTROLE ESPECIFICO POR USUARIO - BARRA LATERAL -->

<?php require VIEW_ROOT . '/templates/footer.php'; ?>