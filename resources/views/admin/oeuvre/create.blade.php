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
            <h1 class="text-2xl font-semibold whitespace-nowrap">Créer une oeuvre</h1>
          </div>

          <div class="mt-6 px-6">
            <div class="my-5">
              @foreach ($errors->all() as $error)
              <span class="block text-red-500"> {{ $error }} </span>
              @endforeach
            </div>

            <form action="{{ route('admin.oeuvres.store') }}" method="post" enctype="multipart/form-data">
              @csrf

              <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                  <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                    <div class="grid grid-cols-3 gap-6">
                      <div class="col-span-3 sm:col-span-2">
                        <label for="titre" class="block text-lg font-medium text-gray-700">
                          Titre
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                          <input type="text" name="titre" id="titre" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-lg border-gray-300" placeholder="Titre de l'oeuvre">
                        </div>
                      </div>
                    </div>

                    <div class="grid grid-cols-3 gap-6">
                      <div class="col-span-3 sm:col-span-2">
                        <label for="sous_titre" class="block text-lg font-medium text-gray-700">
                          Sous-titre
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                          <input type="text" name="sous_titre" id="sous_titre" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-lg border-gray-300" placeholder="Sous-titre de l'oeuvre">
                        </div>
                      </div>
                    </div>

                    <div>
                      <label for="description" class="block text-lg font-medium text-gray-700">
                        Description
                      </label>
                      <div class="mt-1">
                        <textarea id="description" name="description" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-lg border border-gray-300 rounded-md" placeholder="Description de l'oeuvre"></textarea>
                      </div>
                    </div>

                    <div>
                      <label for="date" class="block text-lg font-medium text-gray-700">
                        Date de creation
                      </label>
                      <div class="mt-1">
                        <input type="date" name="date" id="date" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-lg border-gray-300">
                      </div>
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                      <label for="categorie" class="block text-lg font-medium text-gray-700">Categorie</label>
                      <select id="categorie" name="categorie" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-lg">
                        @foreach ($categories as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->titre }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                      <label for="collection" class="block text-lg font-medium text-gray-700">Collection</label>
                      <select id="collection" name="collection" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-lg">
                        @foreach ($collections as $collection)
                        <option value="{{ $collection->id }}">{{ $collection->titre }}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="flex items-start">
                      <div class="flex items-center h-5">
                        <input id="active" name="active" type="checkbox" checked class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                      </div>
                      <div class="ml-3 text-lg">
                        <label for="active" class="font-medium text-gray-700">Si coché, l'oeuvre sera visible pour tout le monde.</label>
                      </div>
                    </div>

                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                      <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-lg font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        CREER UNE oeuvre
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </main>
      </div>
    </div>
  </div>

</x-app-layout>