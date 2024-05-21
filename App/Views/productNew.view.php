<form action="" id="productoFormulario">
    <input name="" id="id" value="<?= $parameters['product']['id'] ?? '2' ?>">
    <div>
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" value="<?= $parameters['product']['nombre'] ?? '' ?>">
    </div>
    <div>
        <label for="categoria">Categoria</label>
        <input type="text" id="categoria" value="<?= $parameters['product']['categoria'] ?? '' ?>">
    </div>
    <div>
        <label for="stock">Stock</label>
        <input type="text" id="stock" value="<?= $parameters['product']['stock'] ?? '' ?>">
    </div>
    <button type="submit">GUARDAR</button>
</form>

<script src="<?= URL_PATH ?>/Assets/js/productNew.js"></script>