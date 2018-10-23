<?php
/**
* Created by Max Alva
* Date: 2018/10/19
* Time: 21:01:20
*/
require_once 'controllers/category.controller.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog de Videojuegos</title>
    <link rel="stylesheet" href="./views/assets/css/styles.css">
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
                <?php
                    $categories = CategoryController::getAll();
                    foreach ($categories as $category):
                ?>
                    <li><a href="category.php?id=<?php echo $category->getId() ?>"><?php echo $category->getName() ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
        <div class="clearfix"></div>
        <!-- end menu -->

    </header>

    <!-- start container -->
    <div class="container">
    <!-- end header -->
