const productoFormulario = document.getElementById('productoFormulario');
productoFormulario.addEventListener('submit', (e) => {
    e.preventDefault();
    productoFormularioSubmit();
});

async function productoFormularioSubmit() {
    let producto = {};
    producto.id = document.getElementById('id').value;
    producto.nombre = document.getElementById('nombre').value;
    producto.categoria = document.getElementById('categoria').value;
    producto.stock = document.getElementById('stock').value;
    producto.precio = document.getElementById('precio').value;

    //let ruta = producto.id > 0 ? 'update' : 'create';

    try {
        let response = await fetch('http://localhost/mvc-country-app/Public/product/create', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(producto)
        });
        /*
        // Verificar si la respuesta no es JSON
        const contentType = response.headers.get("content-type");
        if (contentType && contentType.includes("application/json")) {
            let responseData = await response.json();
            console.log(responseData);
        } else {
            let textResponse = await response.text();
            console.error("Error: La respuesta no es JSON.", textResponse);
        }
        */
    } catch (error) {
        console.error("Error en la solicitud fetch:", error);
    }
}
