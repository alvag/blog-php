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

    <?php if (isset($_SESSION['user'])): ?>
        <?php $user = $_SESSION['user']; ?>
        <div class="logged-in">
            <h3><?php echo 'Bienvenido '.$user->getFirstName(); ?></h3>

            <a class="btn btn-success" href="logout.php">Crear Entradas</a>
            <a class="btn btn-success" href="logout.php">Crear Categorías</a>
            <a class="btn btn-warning" href="logout.php">Mis datos</a>
            <a class="btn btn-danger" href="logout.php">Cerrar Sesión</a>
        </div>

    <?php else: ?>

        <div class="login">
            <h3>Inicia sesión</h3>

            <?php if (isset($_SESSION['login_success'])): ?>
                <?php if ($_SESSION['login_success'] == FALSE): ?>
                    <div class="alert alert-error">
                        Usuario o contraseña incorrectos.
                    </div>
                <?php endif ?>
            <?php endif ?>

            <form action="login.php" method="post">
                <label for="email">Email</label>
                <input type="email" name="email" value="<?php echo getValueSession('login_form', 'email') ?>">
                <?php if(hasError('login_errors', "email")): ?>
                    <div class="alert alert-error">Ingrese un email válido válido.</div>
                <?php endif; ?>

                <label for="password">Contraseña</label>
                <input type="password" name="password">
                <?php if(hasError('login_errors', "password")): ?>
                    <div class="alert alert-error">La contraseña es requerida.</div>
                <?php endif; ?>

                <input class="btn btn-primary" type="submit" value="Entrar">
            </form>
        </div>

        <div class="register">
            <h3>Regístrate</h3>

            <?php if (isset($_SESSION['register_success'])): ?>
                <?php if ($_SESSION['register_success']): ?>
                    <div class="alert alert-success">
                        Registro exitoso.
                    </div>
                <?php else: ?>
                    <div class="alert alert-error">
                        Error al registrar usuario.
                    </div>
                <?php endif ?>
            <?php endif ?>

            <form action="register.php" method="post">

                <label for="firstName">Nombre</label>
                <input type="text" name="firstName" value="<?php echo getValueSession('register_form', 'firstName') ?>">
                <?php if(hasError('register_errors', "firstName")): ?>
                    <div class="alert alert-error">Ingrese un nombre válido.</div>
                <?php endif; ?>

                <label for="lastName">Apellidos</label>
                <input type="text" name="lastName" value="<?php echo getValueSession('register_form', 'lastName') ?>">
                <?php if(hasError('register_errors', "lastName")): ?>
                    <div class="alert alert-error">Ingrese un apellido válido.</div>
                <?php endif; ?>

                <label for="email">Email</label>
                <input type="email" name="email" value="<?php echo getValueSession('register_form', 'email') ?>">
                <?php if(hasError('register_errors', "email")): ?>
                    <div class="alert alert-error">Ingrese un email válido válido.</div>
                <?php endif; ?>

                <label for="password">Contraseña</label>
                <input type="password" name="password">
                <?php if(hasError('register_errors', "password")): ?>
                    <div class="alert alert-error">La contraseña es requerida.</div>
                <?php endif; ?>

                <?php
                    unset($_SESSION['register_errors']);
                    unset($_SESSION['register_form']);
                    unset($_SESSION['register_success']);
                    unset($_SESSION['login_errors']);
                    unset($_SESSION['login_form']);
                    unset($_SESSION['login_success']);
                ?>

                <input class="btn btn-primary" type="submit" value="Registrar">
            </form>
        </div>

    <?php endif; ?>

</aside>
<!-- end sidebar -->
