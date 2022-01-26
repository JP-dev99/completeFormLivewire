<header class="w-full fixed z-30 bg-black dark:bg-black dark:text-white">
    <div class="container mx-auto flex flex-wrap p-2">
        <div class="w-full flex py-2 justify-between items-center">
            <div class=" text-white font-bold text-center">
                <img src="https://static.wixstatic.com/media/2550a0_77aa51c3666b407da2f0e2de70e600c8~mv2.png/v1/fill/w_408,h_100,al_c,q_85,usm_2.00_1.00_0.00/C%C3%B3pia%20de%20logo_sintetica_branca%20(2)_edite.webp" alt="Logo.png" width=150 height=150>
            </div>
                @if (Route::has('login'))
                    <div class="space-x-4 bg-white border border-white rounded px-2 py-1">
                        @auth
                            <a
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="font-medium text-red-500 hover:text-blue-100 focus:outline-none focus:underline transition ease-in-out duration-150"
                            >
                                Sair
                            </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                            </form>
                                @if (Route::has('register'))
                                   <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Registrar novo admin</a>
                                @endif
                        @else
                            <a href="{{ route('login') }}" class="font-medium text-white hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Entrar</a>

                        @endauth
                    </div>
                @endif
            </div>
        </div>
</header>