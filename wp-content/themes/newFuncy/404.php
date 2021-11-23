

<?php
get_header();
?>

    <!-- Aqui va mi 404 -->

    <div id="contenedor">
        <div id="cabecerae" class="rojo">
            <h1>HAY UN ERROR AL CARGAR LA PÁGINA</h1>
        </div>
        <div id="cuerpoe" >
            <img src="<?php echo get_stylesheet_directory_uri();?>/images/error.png">
        </div>
    </div>

<?php
get_footer();
