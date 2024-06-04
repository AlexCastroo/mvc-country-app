<script src="<?= URL_PATH ?>/Assets/js/cartProduct.js"></script>
<script src="<?= URL_PATH ?>/Assets/js/productos.js"></script>


<div class="container flex flex-col w-2/4 mx-auto px-10 py-10 text-center bg-emerald-800 rounded-lg border-2 border-emerald-600">
        <h1 class="mb-4 text-2xl text-center font-extrabold leading-none tracking-tight text-emerald-400 md:text-2xl lg:text-6xl dark:text-white">Carrito de <?= $_SESSION['usuario'] ?? '' ?></h1>

    <div class="container flex-col justify-center text-center ">
        <table id="tabla_carrito" class="text-sm text-center rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-teal-50 uppercase bg-teal-950 dark:bg-gray-700 dark:text-gray-400">
            <tr scope="col" class="px-6 py-3">
                <th scope="col" class="px-6 py-3">NOMBRE</th>
                <th scope="col" class="px-6 py-3">CATEGORIA</th>
                <th scope="col" class="px-6 py-3">PRECIO</th>
                <th scope="col" class="px-6 py-3">QTY</th>
                <th scope="col" class="px-6 py-3">TOTAL</th>
                <th></th>
            </tr>
            <tbody id="tbody_cart">

            </tbody>
        </table>

        <label class="text-2xl text-centerfont-bold text-emerald-200">Total:</label>
        <label id="total_cart" type="text" class="text-2xl text-center font-bold text-emerald-200"></label>

    </div>
</div>
</div>
