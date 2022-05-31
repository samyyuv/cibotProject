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
            <h1 class="text-2xl font-semibold whitespace-nowrap">{{ __('Edit') }} "{{ $user->name }}"</h1>
          </div>

          <div class="mt-6 px-6">
            <div class="my-5">
              @foreach ($errors->all() as $error)
              <span class="block text-red-500"> {{ $error }} </span>
              @endforeach
            </div>

            <form action="{{ route('admin.users.update', $user) }}" method="post">
              @method('put')
              @csrf

              <div class="mt-5 mb-8 md:mt-0 md:col-span-2">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                  <div class="mb-5 px-4 py-5 bg-white space-y-6 sm:p-6">
                    <!-- Nom -->
                    <div class="grid grid-cols-3 gap-6">
                      <div class="col-span-3 sm:col-span-2">
                        <label for="name" class="block text-lg font-medium text-gray-700">
                          {{__('Name')}}
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                          <input type="text" name="name" id="name" class="focus:ring-[#006f7e] focus:border-[#006f7e] flex-1 block w-full rounded-md sm:text-lg border-gray-300" placeholder="{{__('Name')}}" value="{{ $user->name }}">
                        </div>
                      </div>
                    </div>

                    <!-- Email Address -->
                    <div class=" grid grid-cols-3 gap-6">
                      <div class="col-span-3 sm:col-span-2">
                        <label for="email" class="block text-lg font-medium text-gray-700">{{__('Email Address')}}</label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                          <input type="email" name="email" id="email" class="focus:ring-[#006f7e] focus:border-[#006f7e] flex-1 block w-full rounded-md sm:text-lg border-gray-300" placeholder="{{__('Email')}}" value="{{ $user->email }}">
                        </div>
                      </div>
                    </div>

                    <!-- Role -->
                    <div class="flex items-start">
                      <div class="flex items-center h-5">
                        <input id="admin" name="admin" type="checkbox" class="focus:ring-[#006f7e] h-4 w-4 text-[#006f7e] border-gray-300 rounded" {{$user->is_admin ? 'checked' : '' }}>
                      </div>
                      <div class="ml-3 text-lg">
                        <label for="admin" class="font-medium text-gray-700">{{__('If checked, the user will become admin')}}.</label>
                      </div>
                    </div>

                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                      <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-lg font-medium rounded-md text-white bg-[#006f7e] hover:bg-[#005d69] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#006f7e]">
                        {{__('EDIT A USER')}}
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