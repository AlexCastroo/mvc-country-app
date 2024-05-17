const productoFormulario = document.getElementById('productoFormulario');
productoFormulario.addEventListener('submit', (e)=>{
    e.preventDefault();
    productoFormularioSubmit();
});

async function productoFormularioSubmit(){
    let producto = {};
    producto.nombre = document.getElementById('nombre').value;
    producto.categoria = document.getElementById('categoria').value;
    producto.stock = document.getElementById('stock').value;
    producto.id = document.getElementById('id').value;

    //let ruta = producto.id > 0 ? 'update' : 'create';

    let response = await  fetch('http://localhost/mvc-country-app/Public/product/create',{
        method: 'POST',
        body: JSON.stringify(producto),
    });

    let reposenseData = await response.json();
    console.log(reposenseData);
}