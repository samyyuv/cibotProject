<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Elisabeth Cibot</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://kit.fontawesome.com/5fc9c8ed9e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body class="font-sans antialiased">


    <div class="flex flex-col flex-1 h-full overflow-hidden">
        @auth
        <!-- Navbar -->
        <header class="flex-shrink-0 border-b">
            <div class="flex items-center justify-end p-2">
                <!-- Navbar right -->
                <div class="relative flex items-center space-x-3">
                    <!-- avatar button -->
                    <div class="relative" x-data="{ isOpen: false }">
                        <button @click="isOpen = !isOpen" class="p-1 bg-gray-200 rounded-full focus:outline-none focus:ring">
                            <i class="fas fa-users-cog" style="font-size:2rem; color:red;"></i> </button>
                        <!-- green dot -->
                        <div class=" absolute right-0 p-1 bg-green-400 rounded-full bottom-3 animate-ping">
                        </div>
                        <div class="absolute right-0 p-1 bg-green-400 border border-white rounded-full bottom-3"></div>

                        <!-- Dropdown card -->
                        <div @click.away="isOpen = false" x-show.transition.opacity="isOpen" class="absolute mt-3 transform -translate-x-full bg-white rounded-md shadow-lg min-w-max">
                            <div class="flex flex-col p-4 space-y-1 font-medium border-b">
                                <span class="text-gray-800">{{ Auth::user()->name }}</span>
                                <span class="text-sm text-gray-400">{{ Auth::user()->email }}</span>
                            </div>
                            <ul class="flex flex-col p-2 my-2 space-y-1">
                                <li>
                                    <a href="#" class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Mon Profile</a>
                                </li>
                            </ul>
                            <div class="flex items-center justify-center p-4 text-blue-700 underline border-t">

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="#" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Se deconnecter') }}
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @endauth

        <main>
            {{ $slot }}
        </main>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
<script>
    const setup = () => {
        return {
            loading: true,
            isSidebarOpen: false,
            toggleSidbarMenu() {
                this.isSidebarOpen = !this.isSidebarOpen
            },
            isSettingsPanelOpen: false,
            isSearchBoxOpen: false,
        }
    }
</script>

</html>