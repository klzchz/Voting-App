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
            <a class="ml-4" href="#">
                <img src="{{asset('img/logo.svg')}}" alt="logo">
            </a>
            <div class="flex items-center">
                @if (Route::has('login'))
                    <div class="px-6 py-4 ">
                        @auth
                        
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
    
                                <a href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                            </a>
                            </form>
                        
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000" 
                alt="avatar" class="w-8 h-8 rounded-full mr-2" />
            </div>
        </header>

        <main class="container mx-auto max-w-custom flex" >
            <div class="w-70 mr-5" >
               Add idea form goes here . Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nesciunt, commodi quisquam qui ullam reiciendis tempora exercitationem similique odio corrupti. Non, voluptatibus aut quidem molestiae sapiente eos quia amet doloremque, nisi vitae quasi quisquam itaque corrupti autem. Ipsa, enim doloribus!
            </div>
            <div class="w-175">
                <nav class="flex items-center  justify-between text-xs">
                    <ul class="flex  uppercase  font-semibold  space-x-10">
                        <li>
                            <a href="#" class="">All ideas (87)</a>

                        </li>
                        
                    </ul>
                </nav>
            </div>
        </main>
        
    </body>
</html>
