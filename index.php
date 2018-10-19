<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog de Videojuegos</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body>
    <!-- start header -->
    <header>

        <div class="logo">
            <a href="index.php">Blog de Videojuegos</a>
        </div>

        <!-- start menu -->
        <nav class="menu">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="index.php">Categoria 1</a></li>
                <li><a href="index.php">Categoría 2</a></li>
                <li><a href="/">Categoría 3</a></li>
                <li><a href="/">Categoría 4</a></li>
                <li><a href="/">Sobre mí</a></li>
                <li><a href="/">Contacto</a></li>
            </ul>
        </nav>
        <div class="clearfix"></div>
        <!-- end menu -->

    </header>
    <!-- end header -->

    <div class="container">
        <!-- start sidebar -->
        <aside class="sidebar">
            <div class="login">
                <h3>Inicia sesión</h3>
                <form action="login.php" method="post">
                    <label for="email">Email</label>
                    <input type="email" name="email">

                    <label for="password">Contraseña</label>
                    <input type="password" name="password">

                    <input type="submit" value="Entrar">
                </form>
            </div>

            <div class="register">
                <h3>Regístrate</h3>
                <form action="register.php" method="post">

                    <label for="firstName">Nombre</label>
                    <input type="text" name="firstName">

                    <label for="lastName">Apellidos</label>
                    <input type="text" name="firstName">

                    <label for="email">Email</label>
                    <input type="email" name="email">

                    <label for="password">Contraseña</label>
                    <input type="password" name="password">

                    <input type="submit" value="Registrar">
                </form>
            </div>
        </aside>
        <!-- end sidebar -->

        <div class="main">

            <h1>Últimas entradas</h1>

            <article class="post">
                <h2>Título de la entrada</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </article>

            <article class="post">
                <h2>Título de la entrada</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </article>

            <article class="post">
                <h2>Título de la entrada</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </article>

            <article class="post">
                <h2>Título de la entrada</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </article>

        </div>

    </div>

    <!-- start footer -->
    <footer>
        <p>Desarrollado por Max Alva &copy; 2018</p>
    </footer>
    <!-- end footer -->
</body>
</html>
