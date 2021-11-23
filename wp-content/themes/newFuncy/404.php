<?php
get_header();
?>

    <!-- Aqui va mi 404 -->

    <div id="contenedor">
        <div style="background-color: #ff0000" id="cabecera" class="rojo">
            <h1 style="color: white">HAY UN ERROR AL CARGAR LA PÁGINA</h1>
        </div>
        <div id="cuerpo"">
            <img src="<?php echo get_stylesheet_directory_uri();?>/images/error.png" style="display: block; margin: auto">
        </div>
    </div>

<?php
get_footer();
