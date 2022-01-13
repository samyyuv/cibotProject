<!-- component -->
<div>
  <div class="flex h-screen overflow-y-hidden bg-white" x-data="setup()" x-init="$refs.loading.classList.add('hidden')">
    <!-- Loading screen -->
    <div x-ref="loading" class="fixed inset-0 z-50 flex items-center justify-center text-white bg-black bg-opacity-50" style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)">
      Loading.....
    </div>

    <!-- Sidebar backdrop -->
    <div x-show.in.out.opacity="isSidebarOpen" class="fixed inset-0 z-10 bg-black bg-opacity-20 lg:hidden" style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)"></div>

    <!-- Sidebar -->
    <aside x-transition:enter="transition transform duration-300" x-transition:enter-start="-translate-x-full opacity-30  ease-in" x-transition:enter-end="translate-x-0 opacity-100 ease-out" x-transition:leave="transition transform duration-300" x-transition:leave-start="translate-x-0 opacity-100 ease-out" x-transition:leave-end="-translate-x-full opacity-0 ease-in" class="fixed inset-y-0 z-10 flex flex-col flex-shrink-0 w-64 max-h-screen overflow-hidden transition-all transform bg-white border-r shadow-lg lg:z-auto lg:static lg:shadow-none" :class="{'-translate-x-full lg:translate-x-0 lg:w-14': !isSidebarOpen}">
      <!-- sidebar header -->
      <div class="flex items-center justify-between flex-shrink-0 p-2" :class="{'lg:justify-center': !isSidebarOpen}">
        <span class="p-2 text-l font-semibold leading-8 tracking-wider uppercase whitespace-nowrap">
          <a href="{{ route('admin.dashboard') }}">Menu</a> <span :class="{'lg:hidden': !isSidebarOpen}"></span>
        </span>
        <button @click="toggleSidbarMenu()" class="p-2 rounded-md lg:hidden">
          <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <!-- Sidebar links -->
      <nav class="flex-1 overflow-hidden hover:overflow-y-auto">
        <ul class="p-2 overflow-hidden">
          <li>
            <a href="{{ route('admin.actualites.index') }}" class="flex items-center p-5 space-x-2 rounded-md hover:bg-gray-100" :class="{'justify-center': !isSidebarOpen}">
              <span><i class="far fa-newspaper" style="font-size:1.5rem;"></i></span>
              <span class="text-2xl" :class="{ 'lg:hidden': !isSidebarOpen }">Actualités</span>
            </a>
          </li>

          <li>
            <a href="{{ route('admin.collections.index') }}" class="flex items-center p-5 space-x-2 rounded-md hover:bg-gray-100" :class="{'justify-center': !isSidebarOpen}">
              <span><i class="fas fa-cubes" style="font-size:1.5rem;"></i></span>
              <span class="text-2xl" :class="{ 'lg:hidden': !isSidebarOpen }">Collections</span>
            </a>
          </li>

          <li>
            <a href="{{ route('admin.oeuvres.index') }}" class="flex items-center p-5 space-x-2 rounded-md hover:bg-gray-100" :class="{'justify-center': !isSidebarOpen}">
              <span><i class="far fa-gem" style="font-size:1.5rem;"></i></span>
              <span class="text-2xl" :class="{ 'lg:hidden': !isSidebarOpen }">Oeuvres</span>
            </a>
          </li>

          <li>
            <a href="{{ route('admin.categories.index') }}" class="flex items-center p-5 space-x-2 rounded-md hover:bg-gray-100" :class="{'justify-center': !isSidebarOpen}">
              <span><i class="fas fa-sitemap" style="font-size:1.5rem;"></i></span>
              <span class="text-2xl" :class="{ 'lg:hidden': !isSidebarOpen }">Catégories</span>
            </a>
          </li>

          <li>
            <a href="{{ route('admin.users.index') }}" class="flex items-center p-5 space-x-2 rounded-md hover:bg-gray-100" :class="{'justify-center': !isSidebarOpen}">
              <span><i class="fas fa-user" style="font-size:1.5rem;"></i></span>
              <span class="text-2xl" :class="{ 'lg:hidden': !isSidebarOpen }">User</span>
            </a>
          </li>

          <!-- Sidebar Links... -->
        </ul>
      </nav>
      <!-- Sidebar footer -->
      <div class="flex-shrink-0 p-2 border-t max-h-14">
        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button onclick="event.preventDefault();
        this.closest('form').submit();" class="flex items-center justify-center w-full px-4 py-2 space-x-1 font-medium tracking-wider uppercase bg-gray-100 border rounded-md focus:outline-none focus:ring">
            <span>
              <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
              </svg>
            </span>
            <div class="flex items-center justify-center p-4 text-blue-700 underline border-t">

            </div>
            <span :class="{'lg:hidden': !isSidebarOpen}">
              {{ __('Se deconnecter') }}
            </span>
          </button>
        </form>
      </div>
    </aside>