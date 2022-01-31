<header class="fixed z-30 w-full bg-black dark:bg-black dark:text-white">
    <div class="container flex flex-wrap p-2 mx-auto">
        <div class="flex items-center justify-between w-full py-2">
            <div class="flex">
                <a href="/form">
                <img src="https://static.wixstatic.com/media/2550a0_77aa51c3666b407da2f0e2de70e600c8~mv2.png/v1/fill/w_408,h_100,al_c,q_85,usm_2.00_1.00_0.00/C%C3%B3pia%20de%20logo_sintetica_branca%20(2)_edite.webp"
                    alt="Logo.png" width=150 height=150>
                </a>
            </div>
            @if (Route::has('login'))
                <div class="flex">
                    @auth
                        <div class="flex justify-center">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="px-4 py-2 text-purple-100 bg-purple-700 rounded-full">
                                    Registrar admin
                                </a>
                        </div>

                        <div class="flex justify-center ml-4">

                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="px-4 py-2 text-red-100 bg-red-500 rounded-full">
                                Sair
                            </a>
                        </div>
                @endif
            @else
                <a href="{{ route('login') }}" class="px-4 py-2 mr-2 text-indigo-100 bg-indigo-500 rounded-full">Entrar</a>
            @endauth
        </div>
        @endif
    </div>
    </div>
</header>
