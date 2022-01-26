<header class="w-full fixed z-30 bg-black dark:bg-black dark:text-white">
    <div class="container mx-auto flex flex-wrap p-2">
        <div class="w-full flex py-2 justify-between items-center">
            <div class=" text-white font-bold text-center">Formulário</div>
                @if (Route::has('login'))
                    <div class="space-x-4 bg-black">
                        @auth
                            <a
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="font-medium text-blue-600 hover:text-blue-100 focus:outline-none focus:underline transition ease-in-out duration-150"
                            >
                                Log out
                            </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                            </form>
                                @if (Route::has('register'))
                                   <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Register</a>
                                @endif
                        @else
                            <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Log in</a>

                        @endauth
                    </div>
                @endif
            </div>
        </div>
</header>