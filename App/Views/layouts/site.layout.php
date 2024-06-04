<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= URL_PATH ?>/Assets/css/styles.css">
    <script href="<?= URL_PATH ?>/Assets/js/products.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
<h1 class="mb-4 text-xl text-center font-extrabold leading-none tracking-tight text-emerald-100 md:text-xl lg:text-xl dark:text-white">Bienvenido <?= $_SESSION['usuario'] ?? '' ?></h1>

    <?php echo $content ?>
    <br>
    <a class="text-white text-center" href="http://localhost/mvc-country-app/Public/product">
        <button type="button" class="text-white bg-emerald-400 hover:bg-emerald-600 focus:outline-none focus:ring-4 focus:ring-emerald-500 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2">Tienda</button>
    </a>

    <a class="text-white text-center" href="http://localhost/mvc-country-app/Public/cartproduct/exit">
        <button type="button" class="text-white text-center bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Cerrar Sesión</button>
    </a>
</body>
</html>