<?php
/**
* Created by Max Alva
* Date: 2018/10/23
* Time: 06:19:00
*/

require_once  $_SERVER['DOCUMENT_ROOT'].'/config/routes_config.php';
require_once DIR_MODULES.'header.php';
require_once DIR_MODULES.'sidebar.php';
require_once DIR_HELPERS.'UtilsHelper.php';
require_once SESSION_START;
require_once CHECK_AUTH;
?>

<div class="main">

    <h1>Actualizar mis datos</h1>

    <form action="<?=DIR_ACTIONS.'update-user.php' ?>" method="POST" style="margin-top: 20px">

    <label for="firstName">Nombre</label>
    <input type="text" name="firstName" value="<?php echo getValueSession('account_form', 'firstName') ?>">
    <?php if(hasError('account_errors', "firstName")): ?>
        <div class="alert alert-error">Ingrese un nombre válido.</div>
    <?php endif; ?>

    <label for="lastName">Apellidos</label>
    <input type="text" name="lastName" value="<?php echo getValueSession('account_form', 'lastName') ?>">
    <?php if(hasError('account_errors', "lastName")): ?>
        <div class="alert alert-error">Ingrese un apellido válido.</div>
    <?php endif; ?>

    <label for="email">Email</label>
    <input type="email" name="email" value="<?php echo getValueSession('account_form', 'email') ?>">
    <?php if(hasError('account_errors', "email")): ?>
        <div class="alert alert-error">Ingrese un email válido válido.</div>
    <?php endif; ?>

    <?php
        unset($_SESSION['account_errors']);
        unset($_SESSION['account_form']);
    ?>

    <input class="btn btn-primary" type="submit" value="Actualizar">
    </form>

</div>

<?php require_once DIR_MODULES.'footer.php'; ?>
