async function mostrarProductos()
{
    let response = await fetch('http://localhost/mvc-country-app/Public/product/catalogo');
    let responseData = await response.json();
    console.log(responseData);
    
    if(responseData.success)
        {
            const tableBody = document.getElementById('tbody');
            responseData.result.forEach(item => {
                tableBody.insertAdjacentHTML('afterbegin', `<tr id="item_${item.id}">
                    <td>${item.id}</td>
                    <td>${item.nombre}</td>
                    <td>${item.stock}</td>
                    <td>
                    <a href="/mvc-country-app/Public/product/increment/?id=${item.id}" 
                        <button">+</button>
                    </a>
                    <a href="/mvc-country-app/Public/product/decrement/?id=${item.id}" 
                        <button">-</button>
                    </a>
                    <button onclick="eliminarProducto(${item.id})">Eliminar</button>
                    <button onclick="anadirAlCarrito(${item.id})">Add to Cart</button>
                    
                    </td>
                </tr>`)
            });
        }

}

mostrarProductos();

async function anadirAlCarrito(id)
{
    let response = await fetch('http://localhost/mvc-country-app/Public/cartproduct', {
        method: 'POST',
        body: JSON.stringify({ id }),
    });
    let responseData = await response.json();
    console.log(responseData);
    if(responseData)
    {
        const carrito = document.getElementById('tbody_cart');

            carrito.insertAdjacentHTML('afterbegin', `<tr id="item_${responseData.id}">
                <td>${responseData.id}</td>
                <td>${responseData.nombre}</td>
                <td>${responseData.stock}</td>
                <td></td>
            </tr>`)

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



