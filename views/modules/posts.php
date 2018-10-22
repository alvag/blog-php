<?php
/**
* Created by Max Alva
* Date: 2018/10/19
* Time: 21:43:21
*/
?>

<div class="main">

    <h1>Últimas entradas</h1>

    <?php
        $posts = PostController::getAll();
        foreach ($posts as $post):
    ?>

    <article class="post">
        <a href="">
            <h2><?php echo $post->getTitle() ?></h2>
            <p><?php echo substr($post->getDescription(), 0, 180).'...' ?></p>
            <p><?php echo $post->getCategory()->getName() ?></p>
            <p><?php echo $post->getUser()->getFirstName() ?></p>
        </a>
    </article>

    <?php endforeach; ?>

    <div class="more">
        <a href="">Ver todas las entradas</a>
    </div>

</div>
