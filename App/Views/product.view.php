<h1 class="mb-4 text-4xl text-center font-extrabold leading-none tracking-tight text-emerald-100 md:text-5xl lg:text-6xl dark:text-white">Cart Model<span class="text-emerald-200 dark:text-emerald-200"> - MVC</span></h1>

<div class="container w-full flex flex-row w-2/4">
    <div class="container flex flex-col justify-center w-2/4 mx-2">
        <table class="text-sm text-center rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-emerald-50 uppercase bg-emerald-950 dark:bg-gray-700 dark:text-gray-400">
                <tr scope="col" class="px-6 py-3">
                    <th scope="col" class="px-6 py-3">Producto</th>
                    <th scope="col" class="px-6 py-3">Categoria</th>
                    <th scope="col" class="px-6 py-3">Stock</th>
                    <th scope="col" class="px-6 py-3">Precio</th>
                    <th scope="col" class="px-6 py-3"></th>
                </tr>
            </thead>
            <tbody id="tbody">

            </tbody>
        </table>
        <a href="http://localhost/mvc-country-app/Public/product/new">
            <button type="button" class="w-full my-2 text-yellow-400 hover:text-white border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">Añadir nuevo producto</button>
        </a>
        <a class="text-white text-center" href="http://localhost/mvc-country-app/Public/cartproduct">
            <button type="button" class="text-white w-full bg-emerald-400 hover:bg-emerald-600 focus:outline-none focus:ring-4 focus:ring-emerald-500 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2">Ver carrito</button>
        </a>
    </div>

<script src="<?= URL_PATH ?>/Assets/js/productos.js"></script>