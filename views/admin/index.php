<h1 class="nombre-pagina">Panel de Administracion</h1>

<?php include_once __DIR__ . '/../templates/barra.php'; ?>

<h2>Buscar citas</h2>

<div class="busqueda">
    <form class="formulario">
        <div class="campo">
            <label for="fecha">Fecha</label>
            <input type="date" id="fecha" name="fecha" value="<?= $fecha ?>">
        </div>
    </form>
</div>

<?php if(count($citas) === 0): ?>
    <h2>No hay citas</h2>
<?php endif; ?>

<div id="citas-admin">
    <ul class="citas">
        <?php $idCita = 0;
            foreach($citas as $key => $cita): ?>
        <?php if($idCita !== $cita->id): 
                $total = 0;    
        ?>
                <li>
                    <p>ID: <span><?= $cita->id; ?></span></p>
                    <p>Hora: <span><?= $cita->hora; ?></span></p>
                    <p>Cliente: <span><?= $cita->cliente; ?></span></p>
                    <p>Email: <span><?= $cita->email; ?></span></p>
                    <p>Telefono: <span><?= $cita->telefono; ?></span></p>

                    <h3>Servicios</h3>
        <?php 
        $idCita = $cita->id;
        endif;
            $total += $cita->precio; 
        ?>

                    <p class="servicio"><span><?= $cita->servicio . ' ' . $cita->precio ; ?></span></p>
            <?php 
                $actual = $cita->id;
                $proximo = $citas[$key + 1]->id ?? 0;

                if(esUltimo($actual, $proximo)) :?>
                    <p class="total">Total: <span>$<?= $total ?></span></p>

                    <form action="api/eliminar" method="POST">
                        <input type="hidden" name="id" value="<?= $cita->id?>; ">
                        <input type="submit" class="boton-eliminar" value="Eliminar">
                    </form>
            <?php endif; ?>
            
        <?php endforeach; ?>
    </ul>
</div>

<?php 
    $script = '<script src="build/js/buscador.js"></script>';
?>