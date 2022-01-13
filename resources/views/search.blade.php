<x-app-layout>
  <!-- component -->
  <div>
    <div class="flex h-screen overflow-y-hidden bg-white" x-data="setup()" x-init="$refs.loading.classList.add('hidden')">
      <!-- Loading screen -->
      <div x-ref="loading" class="fixed inset-0 z-50 flex items-center justify-center text-white bg-black bg-opacity-50" style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)">
        Loading.....
      </div>

      <div class="flex flex-col flex-1 h-full overflow-hidden">
        <!-- Main content -->
        <main class="flex-1 max-h-full p-5 overflow-hidden overflow-y-scroll">
          <!-- Main content header -->
          <div class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">
            <h1 class="text-2xl font-semibold whitespace-nowrap">Résultats de recherche: </h1>
          </div>

          @if($actualites->isNotEmpty() && $oeuvres->isNotEmpty() && $categories->isNotEmpty() && $collections->isNotEmpty())

          @if($actualites->isNotEmpty())
          <h3 class="mt-6 text-xl">Actualites</h3>
          <div class="flex flex-col mt-6">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="overflow-hidden border-b border-gray-200 rounded-md shadow-md">
                  <table class="min-w-full overflow-x-scroll divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                      <tr>
                        <th scope="col" class="px-6 py-3 text-lg font-medium tracking-wider text-left text-gray-500 uppercase">
                          ID
                        </th>
                        <th scope="col" class="px-6 py-3 text-lg font-medium tracking-wider text-left text-gray-500 uppercase">
                          Status
                        </th>
                        <th scope="col" class="px-6 py-3 text-lg font-medium tracking-wider text-left text-gray-500 uppercase">
                          Titre
                        </th>
                        <th scope="col" class="px-6 py-3 text-lg font-medium tracking-wider text-left text-gray-500 uppercase">
                          Position
                        </th>
                        <th scope="col" class="px-6 py-3 text-lg font-medium tracking-wider text-left text-gray-500 uppercase">
                          Modif
                        </th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      @foreach ($actualites as $actualite)
                      <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                        <td class="px-6 py-4 text-lg text-gray-500 whitespace-nowrap"> {{ $actualite->id }}
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">
                          @if ( $actualite->active == 1)
                          <span class="inline-flex px-2 text-lg font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                            Active
                          </span>
                          @else
                          <span class="inline-flex px-2 text-lg font-semibold leading-5 text-red-800 bg-red-100 rounded-full">
                            Inactive
                          </span>
                          @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="flex items-center">
                            <div class="flex-shrink-0 w-10 h-10">
                              <img class="w-10 h-10 rounded-full" src="{{ asset('/storage/' . $actualite->photo) }}" alt="" />
                            </div>
                            <div class="ml-4">
                              <div class="text-lg font-medium text-gray-900"><a href="{{ route('admin.actualites.show', $actualite) }}">{{ $actualite->titre }}</a></div>
                              <div class="text-lg text-gray-500">{{ $actualite->created_at->format('d M Y')}}</div>
                            </div>
                          </div>
                        </td>
                        <td class="px-6 py-4 text-lg text-gray-500 whitespace-nowrap"> {{ $actualite->position }}
                        </td>
                        <td class="px-6 py-4 flex justify-start">

                          <a href="{{ route('admin.actualites.edit', $actualite) }}" class='bg-yellow-300 hover:bg-yellow-500 px-2 py-2 rounded'><i class="fas fa-edit"></i></a>
                          <a href="#" class="bg-red-500 ml-5 px-2 py-2 rounded hover:bg-red-800" onclick="event.preventDefault(); document.getElementById('form-{{$actualite->id}}').submit();">
                            <i class="fas fa-trash-alt"></i>
                            <form action="{{ route('admin.actualites.destroy', ['actualite'=>$actualite->id]) }}" method="post" id='form-{{$actualite->id}}'>
                              @csrf
                              @method('delete')
                            </form>
                          </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          @endif

          @if($oeuvres->isNotEmpty())
          <h3 class="mt-6 text-xl">Oeuvres</h3>
          <div class="flex flex-col mt-6">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="overflow-hidden border-b border-gray-200 rounded-md shadow-md">
                  <table class="min-w-full overflow-x-scroll divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                      <tr>
                        <th scope="col" class="px-6 py-3 text-lg font-medium tracking-wider text-left text-gray-500 uppercase">
                          ID
                        </th>
                        <th scope="col" class="px-6 py-3 text-lg font-medium tracking-wider text-left text-gray-500 uppercase">
                          Status
                        </th>
                        <th scope="col" class="px-6 py-3 text-lg font-medium tracking-wider text-left text-gray-500 uppercase">
                          Titre
                        </th>
                        <th scope="col" class="px-6 py-3 text-lg font-medium tracking-wider text-left text-gray-500 uppercase">
                          Collection
                        </th>
                        <th scope="col" class="px-6 py-3 text-lg font-medium tracking-wider text-left text-gray-500 uppercase">
                          Categorie
                        </th>
                        <th scope="col" class="px-6 py-3 text-lg font-medium tracking-wider text-left text-gray-500 uppercase">
                          Modif
                        </th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      @foreach ($oeuvres as $oeuvre)
                      <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                        <td class="px-6 py-4 text-lg text-gray-500 whitespace-nowrap"> {{ $oeuvre->id }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          @if ( $oeuvre->active == 1)
                          <span class="inline-flex px-2 text-lg font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                            Active
                          </span>
                          @else
                          <span class="inline-flex px-2 text-lg font-semibold leading-5 text-red-800 bg-red-100 rounded-full">
                            Inactive
                          </span>
                        </td>
                        @endif
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="flex items-center">
                            <div class="flex-shrink-0 w-10 h-10">
                              <img class="w-10 h-10 rounded-full" src="{{ asset('/storage/' . $oeuvre->photo->photo) }}" alt="" />
                            </div>
                            <div class="ml-4">
                              <div class="text-lg font-medium text-gray-900"><a href="{{ route('admin.oeuvres.show', $oeuvre) }}">{{ $oeuvre->titre }}</a></div>
                              <div class="text-lg text-gray-500">Date de creation: {{ $oeuvre->date->format('Y-m-d') }}</div>
                            </div>
                          </div>
                        </td>
                        <td class="px-6 py-4">
                          <div class="w-full flex-shrink-0  h-10"> {{ $oeuvre->collection->titre }}
                          </div>
                        </td>
                        <td class="px-6 py-4">
                          <div class="flex-shrink-0 w-full h-10"> {{ $oeuvre->categorie->titre }}
                          </div>
                        </td>
                        <td class="px-6 py-4 flex justify-start">
                          <a href="{{ route('admin.oeuvres.edit', $oeuvre) }}" class='bg-yellow-300 hover:bg-yellow-500 px-2 py-2 rounded'><i class="fas fa-edit"></i></a>
                          <a href="#" class="bg-red-500 ml-5 px-2 py-2 rounded hover:bg-red-800" onclick="event.preventDefault(); document.getElementById('form-{{$oeuvre->id}}').submit();">
                            <i class="fas fa-trash-alt"></i>
                            <form action="{{ route('admin.oeuvres.destroy', ['oeuvre'=>$oeuvre->id]) }}" method="post" id='form-{{$oeuvre->id}}'>
                              @csrf
                              @method('delete')
                            </form>
                          </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          @endif

          @if($categories->isNotEmpty())
          <h3 class="mt-6 text-xl">Categories</h3>
          <div class="flex flex-col mt-6">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="overflow-hidden border-b border-gray-200 rounded-md shadow-md">
                  <table class="min-w-full overflow-x-scroll divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                      <tr>
                        <th scope="col" class="px-6 py-3 text-lg font-medium tracking-wider text-left text-gray-500 uppercase">
                          ID
                        </th>
                        <th scope="col" class="px-6 py-3 text-lg font-medium tracking-wider text-left text-gray-500 uppercase">
                          Titre
                        </th>
                        <th scope="col" class="px-6 py-3 text-lg font-medium tracking-wider text-left text-gray-500 uppercase">
                          Photos
                        </th>
                        <th scope="col" class="px-6 py-3 text-lg font-medium tracking-wider text-left text-gray-500 uppercase">
                          Modif
                        </th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      @foreach ($categories as $categorie)
                      <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                        <td class="px-6 py-4 text-lg text-gray-500 whitespace-nowrap"> {{ $categorie->id }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="flex items-center">
                            <div class="ml-4">
                              <div class="text-lg font-medium text-gray-900"><a href="{{ route('admin.categories.show', $categorie) }}">{{ $categorie->titre }}</a></div>
                              <div class="text-lg text-gray-500">{{ $categorie->created_at->format('d M Y')}}</div>
                            </div>
                          </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <img class="w-10 h-10 rounded-full" src="{{ asset('/storage/' . $categorie->photo->photo) }}" alt="" />
                        <td class="px-6 py-4 flex justify-start">

                          <a href="{{ route('admin.categories.edit', $categorie) }}" class='bg-yellow-300 hover:bg-yellow-500 px-2 py-2 rounded'><i class="fas fa-edit"></i></a>
                          <a href="#" class="bg-red-500 ml-5 px-2 py-2 rounded hover:bg-red-800" onclick="event.preventDefault(); document.getElementById('form-{{$categorie->id}}').submit();">
                            <i class="fas fa-trash-alt"></i>
                            <form action="{{ route('admin.categories.destroy', ['categorie'=>$categorie->id]) }}" method="post" id='form-{{$categorie->id}}'>
                              @csrf
                              @method('delete')
                            </form>
                          </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          @endif

          @if($collections->isNotEmpty())
          <h3 class="mt-6 text-xl">Collections</h3>
          <div class="flex flex-col mt-6">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="overflow-hidden border-b border-gray-200 rounded-md shadow-md">
                  <table class="min-w-full overflow-x-scroll divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                      <tr>
                        <th scope="col" class="px-6 py-3 text-lg font-medium tracking-wider text-left text-gray-500 uppercase">
                          ID
                        </th>
                        <th scope="col" class="px-6 py-3 text-lg font-medium tracking-wider text-left text-gray-500 uppercase">
                          Titre
                        </th>
                        <th scope="col" class="px-6 py-3 text-lg font-medium tracking-wider text-left text-gray-500 uppercase">
                          Photos
                        </th>
                        <th scope="col" class="px-6 py-3 text-lg font-medium tracking-wider text-left text-gray-500 uppercase">
                          Modif
                        </th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      @foreach ($collections as $collection)
                      <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                        <td class="px-6 py-4 text-lg text-gray-500 whitespace-nowrap"> {{ $collection->id }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="flex items-center">
                            <div class="ml-4">
                              <div class="text-lg font-medium text-gray-900"><a href="{{ route('admin.collections.show', $collection) }}">{{ $collection->titre }}</a></div>
                              <div class="text-lg text-gray-500">{{ $collection->created_at->format('d M Y')}}</div>
                            </div>
                          </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <img class="w-10 h-10 rounded-full" src="{{ asset('/storage/' . $collection->photo->photo) }}" alt="" />

                        <td class="px-6 py-4 flex justify-start">

                          <a href="{{ route('admin.collections.edit', $collection) }}" class='bg-yellow-300 hover:bg-yellow-500 px-2 py-2 rounded'><i class="fas fa-edit"></i></a>
                          <a href="#" class="bg-red-500 ml-5 px-2 py-2 rounded hover:bg-red-800" onclick="event.preventDefault(); document.getElementById('form-{{$collection->id}}').submit();">
                            <i class="fas fa-trash-alt"></i>
                            <form action="{{ route('admin.collections.destroy', ['collection'=>$collection->id]) }}" method="post" id='form-{{$collection->id}}'>
                              @csrf
                              @method('delete')
                            </form>
                          </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          @endif

          @else
          <h3 class="mt-6 text-xl">
            Malheureusement votre recherche n'a abouti à aucun résultat.
          </h3>
          @endif

        </main>

      </div>

    </div>
  </div>
</x-app-layout>