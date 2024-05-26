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
    <?php echo $content ?>
    <br>
    <a href="http://localhost/mvc-country-app/Public/cartproduct/exit">
        <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Cerrar Sesión</button>
    </a>
</body>
</html>