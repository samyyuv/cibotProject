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
            <h1 class="text-2xl font-semibold whitespace-nowrap">Modifier "{{ $contact->name }}"</h1>
          </div>

          <div class="mt-6 px-6">
            <div class="my-5">
              @foreach ($errors->all() as $error)
              <span class="block text-red-500"> {{ $error }} </span>
              @endforeach
            </div>

            <form action="{{ route('admin.contacts.update', $contact) }}" method="post">
              @method('put')
              @csrf

              <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                  <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                    <!-- Nom -->
                    <div class="grid grid-cols-3 gap-6">
                      <div class="col-span-3 sm:col-span-2">
                        <label for="name" class="block text-lg font-medium text-gray-700">
                          Nom
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                          <input type="text" name="name" id="name" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-lg border-gray-300" placeholder="Nom de contact" value="{{ $contact->name }}">
                        </div>
                      </div>
                    </div>

                    <!-- Email Address -->
                    <div class="grid grid-cols-3 gap-6">
                      <div class="col-span-3 sm:col-span-2">
                        <label for="email" class="block text-lg font-medium text-gray-700">Adresse email</label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                          <input type="email" name="email" id="email" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-lg border-gray-300" placeholder="Email de contact" value="{{ $contact->email }}">
                        </div>
                      </div>
                    </div>

                    <!-- Telephone -->
                    <div class="grid grid-cols-3 gap-6">
                      <div class="col-span-3 sm:col-span-2">
                        <label for="telephone" class="block text-lg font-medium text-gray-700">
                          Telephone
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                          <input type="text" name="telephone" id="telephone" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-lg border-gray-300" placeholder="Telephone de contact" value="{{ $contact->telephone }}">
                        </div>
                      </div>
                    </div>

                    <div class="flex items-start">
                      <div class="flex items-center h-5">
                        <input id="active" name="active" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$contact->active ? 'checked' : '' }}>
                      </div>
                      <div class="ml-3 text-lg">
                        <label for="active" class="font-medium text-gray-700">Si coché, l'information de contact sera visible pour tout le monde.</label>
                      </div>
                    </div>

                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                      <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-lg font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        MODIFIER L'INFO DE CONTACT
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