<header class="fixed z-30 w-full bg-black dark:bg-black dark:text-white">
    <div class="container flex flex-wrap p-2 mx-auto">
        <div class="flex items-center justify-between w-full py-2">
            <div class="flex">
                <img src="https://static.wixstatic.com/media/2550a0_77aa51c3666b407da2f0e2de70e600c8~mv2.png/v1/fill/w_408,h_100,al_c,q_85,usm_2.00_1.00_0.00/C%C3%B3pia%20de%20logo_sintetica_branca%20(2)_edite.webp"
                    alt="Logo.png" width=150 height=150>
            </div>
            @if (Route::has('login'))
                <div class="flex">
                    <div class="px-2 py-1 space-x-4 bg-white border border-white rounded">
                        @auth
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="font-medium text-red-500 transition duration-150 ease-in-out hover:text-blue-100 focus:outline-none focus:underline">
                                Sair
                            </a>
                        </div>
                        <div class="px-2 py-1 bg-white border border-white rounded">

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="font-medium text-indigo-600 transition duration-150 ease-in-out hover:text-indigo-500 focus:outline-none focus:underline">Registrar
                                    novo admin</a>
                            @endif
                        @else
                            <a href="{{ route('login') }}"
                                class="font-medium text-gray-900 transition duration-150 ease-in-out hover:text-indigo-500 focus:outline-none focus:underline">Entrar</a>

                        @endauth
                    </div>
                </div>
            @endif
        </div>
    </div>
</header>
