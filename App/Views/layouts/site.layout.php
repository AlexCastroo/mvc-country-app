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
    

    <nav class="bg-emerald-200 border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">

    <a href="<?= URL_PATH  ?>/page" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="<?= URL_PATH  ?>/assets/images/logo.png" class="h-20" alt="Flowbite Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Cart Model</span>
    </a>
    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
        <h1 class="text-xl my-auto mr-4 text-center font-light leading-none tracking-tight text-emerald-800 md:text-sm lg:text-sm dark:text-white"><?= $_SESSION['usuario'] ?? '' ?></h1>
        <a class="text-white my-auto text-center" href="http://localhost/mvc-country-app/Public/page/login">
            <button type="button" class="text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">Iniciar sesión</button>
        </a>
        <a class="text-white my-auto text-center" href="http://localhost/mvc-country-app/Public/cartproduct/exit">
            <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 mx-4 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Cerrar Sesión</button>
        </a>

        <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
        <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-emerald-200 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
            <a href="<?= URL_PATH  ?>/page" class="block py-2 px-3 md:p-0 text-white bg-emerald-700 rounded md:bg-transparent md:text-emerald-700 md:dark:text-emerald-500" aria-current="page">Home</a>
        </li>
        <li>
            <a href="<?= URL_PATH  ?>/product" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-emerald-700 md:dark:hover:text-emerald-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tienda</a>
        </li>
        <li>
            <a href="<?= URL_PATH  ?>/cartproduct" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-emerald-700 md:dark:hover:text-emerald-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Carrito</a>
        </li>
        <li>
            <a href="<?= URL_PATH  ?>/page/registro" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-emerald-700 md:dark:hover:text-emerald-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">¡Regístrate!</a>
        </li>
        </ul>
    </div>
    </div>

    </nav>

    <?php echo $content ?>
</body>
</html>