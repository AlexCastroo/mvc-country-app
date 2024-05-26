
    <div class="container flex-col justify-center text-center w-2/4">
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
    
        <label class="text-2xl font-bold text-emerald-200">Total:</label>
        <label id="total_cart" type="text" class="text-2xl font-bold text-emerald-200"></label>

    </div>
 
</div>
<script src="<?= URL_PATH ?>/Assets/js/cartProduct.js"></script>