<?php
/**
* Created by Max Alva
* Date: 2018/10/22
* Time: 06:25:06
*/
require_once  $_SERVER['DOCUMENT_ROOT'].'/config/routes_config.php';
require_once DIR_MODULES.'header.php';
require_once DIR_MODULES.'sidebar.php';
require_once CHECK_AUTH;
?>

<div class="main">

    <h1>Crear Categorías</h1>

    <form action="<?=DIR_ACTIONS.'save-category.php' ?>" method="POST" style="margin-top: 20px">
        <label for="name">Nombre</label>
        <input type="text" name="name">
        <?php if(hasError('category_errors', "name")): ?>
            <div class="alert alert-error">Ingresa el nombre de la categoría.</div>
        <?php endif; ?>

        <input class="btn btn-primary" type="submit" value="Guardar">

        <?php unset($_SESSION['category_errors']); ?>
    </form>

</div>

<?php require_once DIR_MODULES.'footer.php'; ?>
