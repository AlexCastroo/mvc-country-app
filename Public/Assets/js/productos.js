async function mostrarProductos()
{
    let response = await fetch('http://localhost/mvc-country-app/Public/product/catalogo');
    let responseData = await response.json();
    console.log(responseData);
    
    if(responseData.success)
        {
            const tableBody = document.getElementById('tbody');
            responseData.result.forEach(item => {
                tableBody.insertAdjacentHTML('afterbegin', `<tr id="item_${item.id}" class="odd:bg-cyan-50 even:bg-emerald-100 border-b border-cyan-100">
                <th scope="row" class="px-6 py-4 font-medium bg-dark text-gray-900 whitespace-nowrap dark:text-white">
                        ${item.nombre}
                    </th>
                    <td>${item.categoria}</td>
                    <td>${item.stock}</td>
                    <td>${item.precio}/Kg</td>
                    <td>
                        <a href="/mvc-country-app/Public/product/increment/?id=${item.id}" 
                            <button type="button" class="text-green-800 hover:text-white border border-green-800 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">+</button>
                        </a>

                        <a href="/mvc-country-app/Public/product/decrement/?id=${item.id}" 
                            <button type="button" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">-</button>
                        </a>
                        <button onclick="eliminarProducto(${item.id})" type="button" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Eliminar</button>
                        <button onclick="anadirAlCarrito(${item.id})" type="button" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Añadir</button>

                    </td>
                </tr>`)
            });
        }

}

mostrarProductos();
async function anadirAlCarrito(id)
{
    let response = await fetch('http://localhost/mvc-country-app/Public/cartproduct/addCart', {
        method: 'POST',
        body: JSON.stringify({ id }),
    });
    let responseData = await response.json();
    console.log(responseData);
    if(responseData.success)
    {
        const carrito = document.getElementById('tbody_cart');
        const total = document.getElementById('total_cart');
        carrito.innerHTML = '';
        total.innerHTML = responseData.result.sub_total + '€';
        responseData.result.productos.forEach(item => {
            carrito.insertAdjacentHTML('afterbegin', `<tr id="item_${item.id}" class="bg-emerald-100 border-b border-emerald-200">
                <th scope="row" class="px-6 py-4 font-medium bg-dark text-gray-900 whitespace-nowrap dark:text-white">
                        ${item.nombre}
                </th>
                <td>${item.categoria}</td>
                <td>${item.precio}</td>
                <td>${item.cart_qty} uds</td>
                <td>${item.total}€</td>
                <td>
                    <button onclick="anadirAlCarrito(${item.id})" type="button" class="text-green-800 hover:text-white border border-green-800 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">+</button>
                    <button onclick="restarProductoCart(${item.id})" type="button" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">-</button>
                </td>
            </tr>`)
            
        });
    }
}

async function restarProductoCart(id)
{
    let response = await fetch('http://localhost/mvc-country-app/Public/cartproduct/restCart', {
        method: 'POST',
        body: JSON.stringify({ id }),
    });
    let responseData = await response.json();
    console.log(responseData);
    if(responseData.success)
        {
            const carrito = document.getElementById('tbody_cart');
            const total = document.getElementById('total_cart');
            carrito.innerHTML = '';
            total.innerHTML = responseData.result.sub_total + '€';
            responseData.result.productos.forEach(item => {
                carrito.insertAdjacentHTML('afterbegin', `<tr id="item_${item.id}" class="bg-emerald-100 border-b border-emerald-200">
                    <th scope="row" class="px-6 py-4 font-medium bg-dark text-gray-900 whitespace-nowrap dark:text-white">
                            ${item.nombre}
                    </th>
                    <td>${item.nombre}</td>
                    <td>${item.categoria}</td>
                    <td>${item.stock}</td>
                    <td>${item.cart_qty} uds</td>
                    <td>${item.total}€</td>
                    <td>
                        <button onclick="anadirAlCarrito(${item.id})" type="button" class="text-green-800 hover:text-white border border-green-800 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">+</button>
                        <button onclick="restarProductoCart(${item.id})" type="button" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">-</button>
                    </td>
                </tr>`)
                
            });
        }
}

async function eliminarProducto(id)
{
    let response = await fetch('http://localhost/mvc-country-app/Public/product/delete', {
        method: 'POST',
        body:JSON.stringify({ id }),
    });

    let responseData = await response.json();
    console.log(responseData);
    mostrarProductos();
}



