


<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="https://flowbite.com" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">4ntiguament3</span>
        </a>
        <div class="flex items-center space-x-6 rtl:space-x-reverse">
            <a href="tel:5541251234" class="text-sm  text-gray-500 dark:text-white hover:underline">(57) 312 8658195</a>

            <a href="{{ route('login') }}" class="text-sm  text-blue-600 dark:text-blue-500 hover:underline">Login</a>

            <a href="{{ route('register') }}" class="text-blue-600 hover:text-pink-400 transition duration-300">Registrar</a>
        </div>
    </div>
</nav>
<nav class="bg-gray-50 dark:bg-gray-700">
    <div class="max-w-screen-xl px-4 py-3 mx-auto">
        <div class="flex items-center">
            <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                <li>
                    <a href="{{ route('welcome') }}" class="text-gray-900 dark:text-white hover:underline" aria-current="page">inicio</a>
                </li>
                <li>
                    <a href="{{ route('posts.index') }}" class="text-gray-900 dark:text-white hover:underline">Blog</a>
                </li>
                <li>
                    <a href="{{ route('nosotros') }}" class="text-gray-900 dark:text-white hover:underline">Nosotros</a>
                </li>
                <li>
                    <a href="{{ route('contacto') }}" class="text-gray-900 dark:text-white hover:underline">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>






