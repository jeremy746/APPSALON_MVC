<div class="campo">
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre" placeholder="Nombre del servicio" value="<?= s($servicio->nombre) ?>">
</div>

<div class="campo">
    <label for="precio">Precio</label>
    <input type="number" id="precio" name="precio" placeholder="Precio del servicio" min="0" value="<?= s($servicio->precio) ?>">
</div>