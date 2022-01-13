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
            <h1 class="text-2xl font-semibold whitespace-nowrap">Modifier "{{ $oeuvre->titre }}"</h1>
          </div>

          <div class="mt-6 px-6">
            <div class="my-5">
              @foreach ($errors->all() as $error)
              <span class="block text-red-500"> {{ $error }} </span>
              @endforeach
            </div>

            <form action="{{ route('admin.oeuvres.update', $oeuvre) }}" method="post" enctype="multipart/form-data">
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
                          <input type="text" name="titre" id="titre" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-lg border-gray-300" value="{{ $oeuvre->titre }}">
                        </div>
                      </div>
                    </div>

                    <div class=" grid grid-cols-3 gap-6">
                      <div class="col-span-3 sm:col-span-2">
                        <label for="sous_titre" class="block text-lg font-medium text-gray-700">
                          Sous-titre
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                          <input type="text" name="sous_titre" id="sous_titre" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-lg border-gray-300" value="{{ $oeuvre->sous_titre }}">
                        </div>
                      </div>
                    </div>

                    <div>
                      <label for=" description" class="block text-lg font-medium text-gray-700">
                        Description
                      </label>
                      <div class="mt-1">
                        <textarea id="description" name="description" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-lg border border-gray-300 rounded-md" placeholder="Description de l'oeuvre">{{ $oeuvre->description }}</textarea>
                      </div>
                    </div>

                    <div>
                      <label for="date" class="block text-lg font-medium text-gray-700">
                        Date de creation
                      </label>
                      <div class="mt-1">
                        <input type="date" name="date" id="date" value="{{ $oeuvre->created_at->format('Y-m-d') }}" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-lg border-gray-300">
                      </div>
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                      <label for="collection" class="block text-lg font-medium text-gray-700">Collection</label>
                      <select id="collection" name="collection" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-lg">
                        @foreach ($collections as $collection)
                        <option value="{{ $collection->id }}" {{ $oeuvre->collection_id === $collection->id ? 'selected' : '' }}>{{ $collection->titre }}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                      <label for="categorie" class="block text-lg font-medium text-gray-700">Categorie</label>
                      <select id="categorie" name="categorie" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-lg">
                        @foreach ($categories as $categorie)
                        <option value="{{ $categorie->id }}" {{ $oeuvre->categorie_id === $categorie->id ? 'selected' : '' }}>{{ $categorie->titre }}</option>
                        @endforeach
                      </select>
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
                            <label for="photos" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                              <span>Uploader une photo</span>
                              <input multiple id="photos" name="photos[]" type="file" class="sr-only">
                            </label>
                            <p class="pl-1">ou glisser-déposer</p>
                          </div>
                          <div class="col-md-12">
                            <div class="mt-1 text-center ">
                              <div class="preview-image grid grid-cols-4 gap-4"> </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="flex items-start">
                        <div class="flex items-center h-5">
                          <input id="active" name="active" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$oeuvre->active ? 'checked' : '' }}>
                        </div>
                        <div class="ml-3 text-lg">
                          <label for="active" class="font-medium text-gray-700">Si coché, l'oeuvre sera visible pour tout le monde.</label>
                        </div>
                      </div>

                      <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-lg font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                          MODIFIER UNE OEUVRE
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
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <script type="text/javascript">
    $(function() {
      // Multiple images preview with JavaScript
      var previewImages = function(input, imgPreviewPlaceholder) {
        if (input.files) {
          var filesAmount = input.files.length;
          for (i = 0; i < filesAmount; i++) {
            var reader = new FileReader();
            reader.onload = function(event) {
              $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
            }
            reader.readAsDataURL(input.files[i]);
          }
        }
      };
      $('#photos').on('change', function() {
        previewImages(this, 'div.preview-image');
      });
    });
  </script>
</x-app-layout>