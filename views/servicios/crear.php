<h1 class="nombre-pagina">Nuevo servicio</h1>
<p class="descripcion-pagina">Llena todos los campos para añadir un nuevo servicio</p>

<?php include_once __DIR__ . '/../templates/barra.php' ?>
<?php include_once __DIR__ . '/../templates/alertas.php' ?>

<form action="/servicios/crear" method="POST" class="formulario">
    <?php include 'formulario.php' ?>

    <input type="submit" class="boton" value="Crear servicio">
</form>