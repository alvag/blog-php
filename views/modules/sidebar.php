<?php
/**
* Created by Max Alva
* Date: 2018/10/19
* Time: 21:15:14
*/

include_once 'helpers/utils.helper.php';
?>
<!-- start sidebar -->
<aside class="sidebar">
    <div class="login">
        <h3>Inicia sesión</h3>
        <form action="login.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email">

            <label for="password">Contraseña</label>
            <input type="password" name="password">

            <input class="btn" type="submit" value="Entrar">
        </form>
    </div>

    <div class="register">
        <h3>Regístrate</h3>
        <form action="register.php" method="post">

            <label for="firstName">Nombre</label>
            <input type="text" name="firstName">
            <?php if(hasError("errors_register", "firstName")): ?>
                <div class="alert alert-error">Ingrese un nombre válido.</div>
            <?php endif; ?>

            <label for="lastName">Apellidos</label>
            <input type="text" name="lastName">
            <?php if(hasError("errors_register", "lastName")): ?>
                <div class="alert alert-error">Ingrese un apellido válido.</div>
            <?php endif; ?>

            <label for="email">Email</label>
            <input type="email" name="email">
            <?php if(hasError("errors_register", "email")): ?>
                <div class="alert alert-error">Ingrese un email válido válido.</div>
            <?php endif; ?>

            <label for="password">Contraseña</label>
            <input type="password" name="password">
            <?php if(hasError("errors_register", "password")): ?>
                <div class="alert alert-error">La contraseña es requerida.</div>
            <?php endif; ?>

            <input class="btn" type="submit" name="submit" value="Registrar">
        </form>
    </div>
</aside>
<!-- end sidebar -->
