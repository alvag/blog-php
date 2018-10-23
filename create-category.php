<?php
/**
* Created by Max Alva
* Date: 2018/10/22
* Time: 06:25:06
*/

require_once './models/user.model.php';
session_start();
require_once './check-auth.php';
require_once './views/modules/header.php';
require_once './views/modules/sidebar.php';
require_once './helpers/utils.helper.php';
?>

<div class="main">

    <h1>Crear Categorías</h1>

    <form action="./actions/save-category.php" method="POST" style="margin-top: 20px">
        <label for="name">Nombre</label>
        <input type="text" name="name">
        <?php if(hasError('category_errors', "name")): ?>
            <div class="alert alert-error">Ingrese el nombre de la categoría.</div>
        <?php endif;
            unset($_SESSION['category_errors']);
        ?>

        <input class="btn btn-primary" type="submit" value="Guardar">
    </form>

</div>


<?php require_once 'views/modules/footer.php'; ?>
