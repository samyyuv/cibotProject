<x-app-layout>
    <!-- component -->
    <div>
        <div class="flex h-screen overflow-y-hidden bg-white" x-data="setup()" x-init="$refs.loading.classList.add('hidden')">
            <!-- Loading screen -->
            <div x-ref="loading" class="fixed inset-0 z-50 flex items-center justify-center text-white bg-black bg-opacity-50" style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)">
                {{ __('Loading') }}.....
            </div>

            <div class="flex flex-col flex-1 h-full overflow-hidden">
                <!-- Main content -->
                <main class="flex-1 max-h-full p-5 overflow-hidden overflow-y-scroll">
                    <!-- Main content header -->
                    <div class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">
                        <h1 class="text-2xl font-semibold whitespace-nowrap">Dashboard</h1>

                    </div>

                    <!-- Start Content -->
                    <div class="grid grid-cols-1 gap-5 mt-6 sm:grid-cols-2 lg:grid-cols-4">
                        <a href="{{ route('admin.actualites.index') }}">
                            <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                                <div class="flex items-start justify-between">
                                    <div class="flex flex-col space-y-2">
                                        <span class="text-gray-400">Total de Actualités</span>
                                        <span class="text-lg font-semibold">{{ $actualites->count() }}
                                        </span>
                                    </div>
                                    <div class="p-10 bg-gray-200 rounded-md"></div>
                                </div>
                                <div>
                                    <span class="inline-block px-2 text-sm text-white bg-[#006f7e] rounded">{{ $actualitesDernierMois->count() }}</span>
                                    <span>le dernier mois</span>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('admin.categories.index') }}">
                            <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                                <div class="flex items-start justify-between">
                                    <div class="flex flex-col space-y-2">
                                        <span class="text-gray-400">Total de Categories</span>
                                        <span class="text-lg font-semibold">{{ $categories->count() }}
                                        </span>
                                    </div>
                                    <div class="p-10 bg-gray-200 rounded-md"></div>
                                </div>
                                <div>
                                    <span class="inline-block px-2 text-sm text-white bg-[#006f7e] rounded">{{ $categoriesDernierMois->count() }}</span>
                                    <span>le dernier mois</span>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('admin.collections.index') }}">
                            <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                                <div class="flex items-start justify-between">
                                    <div class="flex flex-col space-y-2">
                                        <span class="text-gray-400">Total de Collections</span>
                                        <span class="text-lg font-semibold">{{ $collections->count() }}
                                        </span>
                                    </div>
                                    <div class="p-10 bg-gray-200 rounded-md"></div>
                                </div>
                                <div>
                                    <span class="inline-block px-2 text-sm text-white bg-[#006f7e] rounded">{{ $collectionsDernierMois->count() }}</span>
                                    <span>le dernier mois</span>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('admin.oeuvres.index') }}">
                            <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                                <div class="flex items-start justify-between">
                                    <div class="flex flex-col space-y-2">
                                        <span class="text-gray-400">Total de Oeuvres</span>
                                        <span class="text-lg font-semibold">{{ $oeuvres->count() }}
                                        </span>
                                    </div>
                                    <div class="p-10 bg-gray-200 rounded-md"></div>
                                </div>
                                <div>
                                    <span class="inline-block px-2 text-sm text-white bg-[#006f7e] rounded">{{ $oeuvresDernierMois->count() }}</span>
                                    <span>le dernier mois</span>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('admin.users.index') }}">
                            <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                                <div class="flex items-start justify-between">
                                    <div class="flex flex-col space-y-2">
                                        <span class="text-gray-400">Total de Users</span>
                                        <span class="text-lg font-semibold">{{ $users->count() }}
                                        </span>
                                    </div>
                                    <div class="p-10 bg-gray-200 rounded-md"></div>
                                </div>
                                <div>
                                    <span class="inline-block px-2 text-sm text-white bg-[#006f7e] rounded">{{ $usersDernierMois->count() }}</span>
                                    <span>le dernier mois</span>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('admin.contacts.index') }}">
                            <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                                <div class="flex items-start justify-between">
                                    <div class="flex flex-col space-y-2">
                                        <span class="text-gray-400">Contact Me Data</span>
                                        <span class="text-lg font-semibold">{{ $users->count() }}
                                        </span>
                                    </div>
                                    <div class="p-10 bg-gray-200 rounded-md"></div>
                                </div>
                                <div>
                                    <span class="inline-block px-2 text-sm text-white bg-[#006f7e] rounded">{{ $contactsMeDernierMois->count() }}</span>
                                    <span>le dernier mois</span>
                                </div>
                            </div>
                        </a>
                    </div>



                    <h3 class="mt-6 text-xl">Users</h3>
                    <div class="flex flex-col mt-6">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                <div class="overflow-hidden border-b border-gray-200 rounded-md shadow-md">
                                    <table class="min-w-full overflow-x-scroll divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                    Nom
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                    Utilisateur depuis
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                    Role
                                                </th>
                                                <th scope="col" class="relative px-6 py-3">
                                                    <span class="sr-only">Edit</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach ($users as $user)
                                            <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div>
                                                        <div class="text-sm font-medium text-gray-900">{{ $user->name }}</div>
                                                        <div class="text-sm text-gray-500">{{ $user->email }}</div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-900">{{ $user->created_at->format('d M Y') }}</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    @if ( $user->is_admin == 1)
                                                    <span class="inline-flex px-2 text-lg font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                                        Admin
                                                    </span>
                                                    @else
                                                    <span class="inline-flex px-2 text-lg font-semibold leading-5 text-red-800 bg-red-100 rounded-full">
                                                        User
                                                    </span>
                                                    @endif
                                                <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                                    <a href="{{ route('admin.users.edit', $user) }}" class="text-[#006f7e] hover:text-[#005d69]">Edit</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <!-- Main footer -->


            </div>

        </div>
    </div>
</x-app-layout>