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
            <h1 class="text-2xl font-semibold whitespace-nowrap">{{__('To edit')}} "{{ $actualite->titre }}"</h1>
          </div>

          <div class="mt-6 px-6 edit">
            <div class="my-5">
              @foreach ($errors->all() as $error)
              <span class="block text-red-500"> {{ $error }} </span>
              @endforeach
            </div>

            <form action="{{ route('admin.actualites.update', $actualite) }}" method="post" enctype="multipart/form-data">
              @method('put')
              @csrf

              <div class="mt-5 mb-8 md:mt-0 md:col-span-2">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                  <div class="mb-5 px-4 py-5 bg-white space-y-6 sm:p-6">

                    <div class="grid grid-cols-3 gap-6">
                      <div class="col-span-3 sm:col-span-2">
                        <label for="titre" class="block text-lg font-medium text-gray-700">
                          {{ __('Title') }} FR
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                          <input type="text" name="titre" id="titre" class="focus:ring-[#92d6d6] focus:border-[#92d6d6] flex-1 block w-full rounded-md sm:text-lg border-gray-300" value="{{ $actualite->titre }}">
                        </div>
                      </div>
                    </div>

                    <div>
                      <label for="description" class="block text-lg font-medium text-gray-700">
                        {{ __('Description') }} FR
                      </label>
                      <div class="mt-1">
                        <textarea id="description" name="description" rows="3" class="px-1.5 py-1.5 shadow-sm focus:ring-[#92d6d6] focus:border-[#92d6d6] mt-1 block w-full sm:text-lg border border-gray-300 rounded-md" placeholder="{{__('Description of the news')}}">{{ $actualite->description }}</textarea>
                      </div>
                    </div>

                    <div class="grid grid-cols-3 gap-6">
                      <div class="col-span-3 sm:col-span-2">
                        <label for="titre_en" class="block text-lg font-medium text-gray-700">
                          {{ __('Title') }} EN
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                          <input type="text" name="titre_en" id="titre_en" class="focus:ring-[#92d6d6] focus:border-[#92d6d6] flex-1 block w-full rounded-md sm:text-lg border-gray-300" value="{{ $actualite->titre_en }}">
                        </div>
                      </div>
                    </div>

                    <div>
                      <label for="description_en" class="block text-lg font-medium text-gray-700">
                        {{ __('Description') }} EN
                      </label>
                      <div class="mt-1">
                        <textarea id="description_en" name="description_en" rows="3" class="px-1.5 py-1.5 shadow-sm focus:ring-[#92d6d6] focus:border-[#92d6d6] mt-1 block w-full sm:text-lg border border-gray-300 rounded-md" placeholder="{{__('Description of the news')}}">{{ $actualite->description_en }}</textarea>
                      </div>
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                      <label for="position" class="block text-lg font-medium text-gray-700">Position</label>
                      <select id="position" name="position" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-[#92d6d6] focus:border-[#92d6d6] sm:text-lg">
                        @for($i = 1; $i <= $totalActualites; $i++) <option value="{{ $i }}" {{ $actualite->position === $i ? 'selected' : ''}}>{{ $i }}</option>
                          @endfor
                      </select>
                    </div>

                    <div>
                      <label class="block text-lg font-medium text-gray-700">
                        {{ __('Photo') }}
                      </label>
                      <div class="container grid grid-cols-2 gap-2 mx-auto">
                        <img src="{{ asset('/storage/' . $actualite->photo) }}" alt="image">
                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                          <div class="space-y-1 text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                              <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex text-lg text-gray-600">
                              <label for="photo" class="relative cursor-pointer bg-white rounded-md font-medium text-[#92d6d6] hover:text-[#92d6d6] focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-[#92d6d6]">
                                <span>{{ __('Replace the main photo') }}</span>
                                <input id="photo" name="photo" type="file" class="sr-only">
                              </label>
                            </div>
                            <div class="col-md-12">
                              <img id="blah" src="#" alt="" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div>
                      <label class="block text-lg font-medium text-gray-700">
                        {{ __('Photos extra') }}
                      </label>
                      <div class="container grid grid-cols-3 gap-2 mx-auto">
                        @foreach ($actualite->photos as $photo)
                        <div class="w-full rounded flex flex-col items-end">
                          <label>
                            <input id="checkInput" type="checkbox" name="delete-{{$photo->id}}" value="delete-{{$photo->id}}">
                            <div class="bg-red-500 px-2 py-2 rounded hover:bg-red-800 trash"><i class="fas fa-trash-alt"></i></div>
                          </label>
                          <img src="{{ asset('/storage/' . $photo->photo) }}" alt="image">
                        </div>
                        @endforeach
                      </div>
                    </div>

                    <div class="grid grid-cols-3 gap-6">
                      <div class="col-span-3 sm:col-span-2">
                        <label for="titl_seo" class="block text-lg font-medium text-gray-700">
                          {{__('SEO Title')}} </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                          <input type="text" name="titl_seo" id="titl_seo" class="focus:ring-[#92d6d6] focus:border-[#92d6d6] flex-1 block w-full rounded-none rounded-md sm:text-lg border-gray-300" placeholder="{{__('SEO Title')}}" value="{{ $actualite->titl_seo }}">
                        </div>
                      </div>
                    </div>

                    <div>
                      <label for="description_seo" class="block text-lg font-medium text-gray-700">
                        {{__('Description of SEO')}} </label>
                      <div class="mt-1">
                        <textarea id="description_seo" name="description_seo" rows="3" class="px-1.5 py-1.5 shadow-sm focus:ring-[#92d6d6] focus:border-[#92d6d6] mt-1 block w-full sm:text-lg border border-gray-300 rounded-md" placeholder="{{__('Description of SEO')}}">{{ $actualite->description_seo }}</textarea>
                      </div>
                    </div>

                    <div class="flex items-start">
                      <div class="flex items-center h-5">
                        <input id="active" name="active" type="checkbox" class="focus:ring-[#92d6d6] h-4 w-4 text-[#92d6d6] border-gray-300 rounded" {{$actualite->active ? 'checked' : '' }}>
                      </div>
                      <div class="ml-3 text-lg">
                        <label for="active" class="font-medium text-gray-700">{{__('If checked, the news will be visible to everyone')}}.</label>
                      </div>
                    </div>

                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                      <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-lg font-medium rounded-md text-white bg-[#92d6d6] hover:bg-[#08a398] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#92d6d6]">
                        {{__('EDIT NEWS')}}
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
    photo.onchange = evt => {
      const [file] = photo.files
      if (file) {
        blah.src = URL.createObjectURL(file)
      }
    }
  </script>
</x-app-layout>