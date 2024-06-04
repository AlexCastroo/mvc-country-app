
<div class="container flex flex-col w-1/4 mx-auto my-2 px-10 py-10 bg-emerald-100 rounded-lg border-2 border-emerald-200">
    <h1 class="mb-4 text-2xl text-center font-extrabold leading-none tracking-tight text-emerald-500 md:text-2xl lg:text-6xl dark:text-white">Añadir producto</h1>

    <form action="" id="productoFormulario">
        <div>
            <label for="small-input" class="block mb-2 text-sm font-medium text-emerald-500 dark:text-white">ID</label>
            <input type="text" id="id" value="<?= $parameters['product']['id'] ?? '' ?>" class="block w-full p-2 text-gray-900 border border-emerald-300 rounded-lg bg-emerald-50 text-xs focus:ring-emerald-500 focus:border-emerald-500 dark:bg-emerald-700 dark:border-emerald-600 dark:placeholder-emerald-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500">
        </div>

        <div>
            <label for="small-input" class="block mb-2 text-sm font-medium text-emerald-500 dark:text-white">Nombre</label>
            <input type="text" id="nombre" value="<?= $parameters['product']['nombre'] ?? '' ?>" class="block w-full p-2 text-gray-900 border border-emerald-300 rounded-lg bg-emerald-50 text-xs focus:ring-emerald-500 focus:border-emerald-500 dark:bg-emerald-700 dark:border-emerald-600 dark:placeholder-emerald-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500">
        </div>

        <div>
            <label for="small-input" class="block mb-2 text-sm font-medium text-emerald-500 dark:text-white">Categoria</label>
            <input type="text" id="categoria" value="<?= $parameters['product']['categoria'] ?? '' ?>" class="block w-full p-2 text-gray-900 border border-emerald-300 rounded-lg bg-emerald-50 text-xs focus:ring-emerald-500 focus:border-emerald-500 dark:bg-emerald-700 dark:border-emerald-600 dark:placeholder-emerald-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500">
        </div>

        <div>
            <label for="small-input" class="block mb-2 text-sm font-medium text-emerald-500 dark:text-white">Stock</label>
            <input type="text" id="stock" value="<?= $parameters['product']['stock'] ?? '' ?>" class="block w-full p-2 text-gray-900 border border-emerald-300 rounded-lg bg-emerald-50 text-xs focus:ring-emerald-500 focus:border-emerald-500 dark:bg-emerald-700 dark:border-emerald-600 dark:placeholder-emerald-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500">
        </div>

        <div>
            <label for="small-input" class="block mb-2 text-sm font-medium text-emerald-500 dark:text-white">Precio</label>
            <input type="text" id="precio" value="<?= $parameters['product']['precio'] ?? '' ?>" class="block w-full p-2 text-gray-900 border border-emerald-300 rounded-lg bg-emerald-50 text-xs focus:ring-emerald-500 focus:border-emerald-500 dark:bg-emerald-700 dark:border-emerald-600 dark:placeholder-emerald-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500">
        </div>

        <button type="submit" class="text-white my-10 w-full bg-emerald-600 hover:bg-emerald-800 focus:outline-none focus:ring-4 focus:ring-emerald-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">Guardar</button>
    </form>

    <a href="http://localhost/mvc-country-app/Public/product/" class="text-center">
        <h4 class="mb-4  text-center font-extrabold leading-none tracking-tight text-emerald-500 ">Volver a la tienda</h4>
    </a>

<script src="<?= URL_PATH ?>/Assets/js/productNew.js"></script>