    
    
    <div class="container text-center flex flex-col w-1/4 mx-auto my-52 px-10 py-10 bg-emerald-100 rounded-lg border-2 border-emerald-200">
        <h1 class="mb-4 text-2xl text-center font-extrabold leading-none tracking-tight text-emerald-400 md:text-2xl lg:text-6xl dark:text-white">Registrarse</h1>


    <form method="POST" action="http://localhost/mvc-country-app/Public/user/registro" class="max-w-sm mx-auto">
        <div>
            <label for="small-input" class="block my-2 text-sm font-medium text-emerald-500 dark:text-white">Usuario</label>
            <input type="text" id="usuario" name="usuario" class="block text-center w-full p-2 text-gray-900 border border-emerald-300 rounded-lg bg-emerald-50 text-xs focus:ring-emerald-500 focus:border-emerald-500 dark:bg-emerald-700 dark:border-emerald-600 dark:placeholder-emerald-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500">
        </div>

        <div>
            <label for="small-input" class="block my-2 text-sm font-medium text-emerald-500 dark:text-white">Email</label>
            <input type="email" id="email" name="email" class="block text-center w-full p-2 text-gray-900 border border-emerald-300 rounded-lg bg-emerald-50 text-xs focus:ring-emerald-500 focus:border-emerald-500 dark:bg-emerald-700 dark:border-emerald-600 dark:placeholder-emerald-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500">
        </div>

        <div>
            <label for="small-input" class="block my-2 text-sm font-medium text-emerald-500 dark:text-white">Contraseña</label>
            <input type="password" id="password" name="password" class="block text-center w-full p-2 text-gray-900 border border-emerald-300 rounded-lg bg-emerald-50 text-xs focus:ring-emerald-500 focus:border-emerald-500 dark:bg-emerald-700 dark:border-emerald-600 dark:placeholder-emerald-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500">
        </div>

        <div>
            <label for="small-input" class="block my-2 text-sm font-medium text-emerald-500 dark:text-white">Repite su contraseña</label>
            <input type="password" id="password_repeat" name="password_repeat" class="block text-center w-full p-2 text-gray-900 border border-emerald-300 rounded-lg bg-emerald-50 text-xs focus:ring-emerald-500 focus:border-emerald-500 dark:bg-emerald-700 dark:border-emerald-600 dark:placeholder-emerald-400 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500">
        </div>

            <button type="submit" class="text-white mt-8 bg-emerald-400 hover:bg-emerald-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Iniciar sesion
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </button>

    </form>
    </div>