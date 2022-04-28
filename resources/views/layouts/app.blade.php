<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laracasts Voting</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans bg-gray-background text-gray-900 text-sm">
    <header class="flex items-center justify-between px-8 py-4">
        <a class="ml-4" href="/">
            <img src="{{ asset('img/logo.svg') }}" alt="logo">
        </a>
        <div class="flex items-center">
            @if (Route::has('login'))
                <div class="px-6 py-4 ">
                    @auth

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="route('logout')" onclick="event.preventDefault();
                                                                        this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log
                            in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000" alt="avatar"
                class="w-8 h-8 rounded-full mr-2" />
        </div>
    </header>

    <main class="container mx-auto max-w-custom flex">
        <div class="w-70 mr-5">
            <div 
                class="bg-white border-2 border-blue rounded-xl mt-16"
                style="border-image-source:linear-gradient(to bottom,rgba(50,138,241,0.22),rgba(99,123,255,0));
                       border-image-slice:1;
                       background-image:linear-gradient(to bottom,#fff,#fff),
                       linear-gradient(to bottom ,rgba(30, 113, 190, 0.22),rgba(17, 93, 192, 0));
                       background-origin:border-box;
                       background-clip:content-box,border-box;"
                       
            >
                <div class="text-center px-6 py-2  pt-6">
                    <h3 class="font-semibold text-base">Add an Idea </h3>
                    <p class="text-xs mt-4">Let us know what you would like and we'll take a look over !</p>
                </div>

                <form action="#" method="POST" class="space-y-4 px-4 py-6">
                    <div>
                        <input type="text"
                            class="w-full text-sm bg-gray-100 rounded-xl border-none placeholder-gray-900 px-4 py-2"
                            placeholder="Your Idea ">
                    </div>

                    <div>
                        <select name="category_add" id="category_add"
                            class="w-full rounded-xl bg-gray-100 text-sm mt-2 text-gray-900 border-none px-4 py-2">
                            <option value="Category One">Category One</option>
                            <option value="Category Two">Category Two</option>
                            <option value="Category Three">Category Three</option>
                            <option value="Category Four">Category Four</option>
                        </select>
                    </div>
                    <div>
                        <textarea name="idea" id="idea" cols="30" rows="4"
                            class="w-full bg-gray-100 
                            rounded-xl placeholder-gray-900 text-sm px-4 py-2 border-none"
                            placeholder="Describe your Idea !"></textarea>
                    </div>
                    <div class="flex items-center justify-between space-x-3">
                        <button type="button"
                            class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200
                                    font-semibold rounded-xl border border-gray-200 hover:border-gray-400
                                    transition duration-150 ease-in px-6 py-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500 h-4 w-4 -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                      </svg>
                            <span class="ml-1">Attach</span>
                        </button>
                        <button type="submit"
                        class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue
                                font-semibold rounded-xl border border-blue hover:bg-blue-hover
                                transition duration-150 ease-in px-6 py-3 text-white">
                        <span class="ml-1">Submit</span>
                    </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="w-175">
            <nav class="flex items-center  justify-between text-xs">
                <ul class="flex  uppercase  font-semibold border-b-4 pb-3  space-x-10">
                    <li><a href="#" class="border-b-4 pb-3 border-blue">All ideas (87)</a></li>
                    <li><a href="#"
                            class="border-b-4 pb-3 transition duration-150 ease-in hover:border-blue">Considering
                            (6)</a></li>
                    <li><a href="#" class="border-b-4 pb-3 transition duration-150 ease-in hover:border-blue">In
                            Progress (1)</a></li>
                </ul>

                <ul class="flex  uppercase  font-semibold border-b-4 pb-3  space-x-10">
                    <li><a href="#"
                            class="border-b-4 pb-3 transition duration-150 ease-in hover:border-blue ">Implemented
                            (10)</a></li>
                    <li><a href="#" class="border-b-4 pb-3 transition duration-150 ease-in hover:border-blue">Closed
                            (55)</a></li>
                </ul>
            </nav>
            <div class="mt-8">
                {{ $slot }}
            </div>
        </div>
    </main>
</body>

</html>
