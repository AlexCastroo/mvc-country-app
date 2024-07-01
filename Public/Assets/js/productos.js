async function mostrarProductos()
{
    let response = await fetch('http://localhost/mvc-country-app/Public/product/catalogo');
    let responseData = await response.json();
    console.log(responseData);
    
    if(responseData.success)
        {
            const tableBody = document.getElementById('tbody');
            responseData.result.forEach(item => {
                tableBody.insertAdjacentHTML('afterbegin', `<div class="flex flex-col w-80 bg-emerald-100 bg-opacity-25 border border-emerald-200 rounded-lg items-center">
                        <img class="object-cover w-full rounded-t-lg h-40 md:h-full md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="./assets/images/${item.nombre}.jpg" alt="" />
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">${item.nombre}</h5>
                        <div class="flex flex-row gap-2 px-6 py-4">
                            
                                <a href="">
                                <span class="inline-flex border bg-opacity-50 text-white font-normal items-center rounded-md bg-sky-100 px-2 py-1 text-xs font-medium">
                                    <svg class="w-4 h-4 mr-1 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z" clip-rule="evenodd"/>
                                        <path d="M7.2 8.809H4V19.5h3.2V8.809Z"/>
                                    </svg>
                                    ${item.categoria}</span>
                                </a>
                                <a href="">
                                <span class="inline-flex border bg-opacity-50 text-white font-normal items-center rounded-md bg-sky-100 px-2 py-1 text-xs font-medium">
                                    <svg class="w-4 h-4 mr-1 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z" clip-rule="evenodd"/>
                                        <path d="M7.2 8.809H4V19.5h3.2V8.809Z"/>
                                    </svg>
                                    ${item.precio}€/kg</span>
                                </a>
                                <a href="">
                                <span class="inline-flex border bg-opacity-50 text-white font-normal items-center rounded-md bg-sky-100 px-2 py-1 text-xs font-medium">
                                    <svg class="w-4 h-4 mr-1 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z" clip-rule="evenodd"/>
                                        <path d="M7.2 8.809H4V19.5h3.2V8.809Z"/>
                                    </svg>
                                    ${item.stock}</span>
                                </a>
                            
                        </div>

                        <button onclick="anadirAlCarrito(${item.id})" type="button" class="text-white w-3/4 bg-green-700 hover:bg-green-800 w-full focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Añadir a la Cesta</button>

                        <div class="flex inline-flex w-full mt-4 items-center justify-center rounded-b-lg bg-emerald-100">
                            <a href="/mvc-country-app/Public/product/increment/?id=${item.id}" 
                                <button type="button" class="rounded-b-lg text-green-800 hover:text-white hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium text-sm px-5 py-2.5 text-center">+</button>
                            </a>

                            <a href="/mvc-country-app/Public/product/decrement/?id=${item.id}" 
                                <button type="button" class="text-red-700 hover:text-white hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium text-sm px-5 py-2.5 text-center">-</button>
                            </a>
                            <button onclick="eliminarProducto(${item.id})" type="button" class="w-full rounded-b-lg bg-red-200 text-red-700 hover:bg-red-600 hover:text-white focus:outline-none font-normal text-sm px-5 py-2.5 text-center">Eliminar producto</button>

                        </div>
                        



                    
                    
                    </div>`)});

            /* 
<a class="flex flex-col mb-4 items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full rounded-t-lg h-40 md:h-full md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="./assets/img/${item.nombre} alt="" />
            <div class="flex flex-col justify-between p-4 leading-normal">
      
                  <div class="flex flex-col justify-between p-4 leading-normal">
                  <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">${item.nombre}</h5>
                      <div class="grid grid-cols-3">
                          <div>${item.categoria}</div>
                          <div>${item.temporada}</div>
                      </div>
                                  
                  </div>
              </div>
            </a>
            -----
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
            });*/
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



