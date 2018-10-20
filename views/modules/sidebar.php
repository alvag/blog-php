<?php
/**
* Created by Max Alva
* Date: 2018/10/19
* Time: 21:15:14
*/
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

            <label for="lastName">Apellidos</label>
            <input type="text" name="lastName">

            <label for="email">Email</label>
            <input type="email" name="email">

            <label for="password">Contraseña</label>
            <input type="password" name="password">

            <input class="btn" type="submit" name="submit" value="Registrar">
        </form>
    </div>
</aside>
<!-- end sidebar -->
