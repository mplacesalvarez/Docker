<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>MiTema</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>

<body>

<?php get_header() ?>

<div id="cuerpo">
    <h1>Posts</h1>
    <?php
    get_header();
    if (have_posts()) :
        while (have_posts()) :
            ?>
            <div>
                <?php
                the_post(); ?>
                <div><?php the_post_thumbnail(); ?></div>
                <div><br>
                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                    <?php the_excerpt(); ?>
                    <br>
                </div>
            </div>
            <br>
            <br>
            <br>
        <?php

        endwhile;
    endif;
    ?>

</div>

<?php get_footer() ?>
</body>
</html>

