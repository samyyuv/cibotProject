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
            <h1 class="text-2xl font-semibold whitespace-nowrap">Modifier "{{ $categorie->titre }}"</h1>
          </div>

          <div class="mt-6 px-6">
            <div class="my-5">
              @foreach ($errors->all() as $error)
              <span class="block text-red-500"> {{ $error }} </span>
              @endforeach
            </div>

            <form action="{{ route('admin.categories.update', $categorie) }}" method="post" enctype="multipart/form-data">
              @method('put')
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
                          <input type="text" name="titre" id="titre" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-lg border-gray-300" value="{{ $categorie->titre }}">
                        </div>
                      </div>
                    </div>

                    <div class="grid grid-cols-3 gap-6">
                      <div class="col-span-3 sm:col-span-2">
                        <label for="sous_titre" class="block text-lg font-medium text-gray-700">
                          Sous-titre
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                          <input type="text" name="sous_titre" id="sous_titre" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-lg border-gray-300" value="{{ $categorie->sous_titre }}">
                        </div>
                      </div>
                    </div>

                    <div>
                      <label for="description" class="block text-lg font-medium text-gray-700">
                        Description
                      </label>
                      <div class="mt-1">
                        <textarea id="description" name="description" rows="3" class="px-1.5 py-1.5 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-lg border border-gray-300 rounded-md" placeholder="Description de l'actualite">{{ $categorie->description }}</textarea>
                      </div>
                    </div>

                    <div>
                      <label class="block text-lg font-medium text-gray-700">
                        Photo
                      </label>
                      <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                        <div class="space-y-1 text-center">
                          <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                          <div class="flex text-lg text-gray-600">
                            <label for="photo" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                              <span>Uploader une photo</span>
                              <input id="photo" name="photo" type="file" class="sr-only">
                            </label>
                            <p class="pl-1">ou glisser-déposer</p>
                          </div>
                          <img id="blah" src="#" alt="" />
                        </div>
                      </div>
                    </div>

                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                      <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-lg font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        MODIFIER UNE CATÉGORIE
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
  <script type="text/javascript">
    photo.onchange = evt => {
      const [file] = photo.files
      if (file) {
        blah.src = URL.createObjectURL(file)
      }
    }
  </script>
</x-app-layout>