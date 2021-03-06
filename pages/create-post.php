<?php
/**
* Created by Max Alva
* Date: 2018/10/22
* Time: 22:21:48
*/

require  $_SERVER['DOCUMENT_ROOT'].'/config/routes_config.php';
require DIR_MODULES.'header.php';
require DIR_MODULES.'sidebar.php';
require CHECK_AUTH;
?>

<div class="main">

    <h1>Crear Entradas</h1>
    <p>Añade una nueva entrada al blog.</p>

    <form action="<?=DIR_ACTIONS.'save-post.php'?>" method="POST" style="margin-top: 20px">
        <label for="title">Titulo</label>
        <input type="text" name="title" value="<?php echo getValueSession('post_form', 'title') ?>">
        <?php if(hasError('post_errors', "title")): ?>
            <div class="alert alert-error">Ingresa el título de la entrada.</div>
        <?php endif; ?>

        <label for="description">Descripción</label>
        <textarea style="width:95%" rows="10" name="description" value="<?php echo getValueSession('post_form', 'description') ?>"></textarea>
        <?php if(hasError('post_errors', "description")): ?>
            <div class="alert alert-error">Ingresa la descripción de la entrada.</div>
        <?php endif; ?>

        <label for="category">Categoría</label>
        <select name="category_id">
            <?php $category = CategoryController::getAll();
                foreach ($categories as $category):
            ?>
                <option value="<?=$category->getId() ?>"><?=$category->getName() ?></option>
            <?php endforeach; ?>

        </select>

        <input class="btn btn-primary" type="submit" value="Guardar">

        <?php
        unset($_SESSION['post_errors']);
        unset($_SESSION['post_form']);
        ?>
    </form>

</div>

<?php require_once DIR_MODULES.'footer.php'; ?>
