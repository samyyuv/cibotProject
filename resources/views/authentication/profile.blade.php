<x-public-view>
  <!-- component -->
  <div>
    <div class="flex h-screen overflow-y-hidden bg-white" x-data="setup()" x-init="$refs.loading.classList.add('hidden')">
      <!-- Loading screen -->
      <div x-ref="loading" class="fixed inset-0 z-50 flex items-center justify-center text-white bg-black bg-opacity-50" style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)">
        {{ __('Loading') }}.....
      </div>

      <div class="flex flex-col flex-1 h-full overflow-hidden">
        <!-- Main content -->
        <div class="flex-1 max-h-full p-5 overflow-hidden overflow-y-scroll">
          <!-- Main content header -->
          <div class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">
            <h1 class="text-2xl font-semibold whitespace-nowrap">{{ __('Edit my profile') }}</h1>
          </div>

          <div class="mt-6 px-6">
            <div class="my-5">
              @foreach ($errors->all() as $error)
              <span class="block text-red-500"> {{ $error }} </span>
              @endforeach
            </div>
            @if(session('success'))
            <span class="block text-red-500 text-4xl">{{ session('success') }}</span>
            @endif
            <form action="{{ route('profile.update') }}" method="post">
              @method('PUT')

              @csrf

              <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                  <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">

                      <!-- Nom -->
                      <div class="col-span-6 sm:col-span-3">
                        <div class="col-span-3 sm:col-span-2">
                          <label for="name" class="block text-lg font-medium text-gray-700">
                            {{ __('Name') }}
                          </label>
                          <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="name" id="name" class="focus:ring-[#006f7e] focus:border-[#006f7e] flex-1 block w-full rounded-md sm:text-lg border-gray-300" value="{{ Auth::user()->name }}">
                          </div>
                        </div>
                      </div>

                      <!-- Email Address -->
                      <div class="col-span-6 sm:col-span-3">
                        <div class="col-span-3 sm:col-span-2">
                          <label for="email" class="block text-lg font-medium text-gray-700">{{ __('Email')}}</label>
                          <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="email" name="email" id="email" class="focus:ring-[#006f7e] focus:border-[#006f7e] flex-1 block w-full rounded-md sm:text-lg border-gray-300" value="{{ Auth::user()->email }}">
                          </div>
                        </div>
                      </div>

                      <!-- Old Mot de passe -->
                      <div class="col-span-6">
                        <div class="col-span-3 sm:col-span-2">
                          <label for="current_password" class="block text-lg font-medium text-gray-700">{{ __('Current Password')}}</label>
                          <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="password" name="current_password" id="current_password" class="focus:ring-[#006f7e] focus:border-[#006f7e] flex-1 block w-full rounded-md sm:text-lg border-gray-300" required placeholder="{{ __('Current Password')}}">
                          </div>
                        </div>
                      </div>

                      <!-- New Mot de passe -->
                      <div class="col-span-6 sm:col-span-3">
                        <div class="col-span-3 sm:col-span-2">
                          <label for="password" class="block text-lg font-medium text-gray-700">{{ __('New Password')}}</label>
                          <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="password" name="password" id="password" class="focus:ring-[#006f7e] focus:border-[#006f7e] flex-1 block w-full rounded-md sm:text-lg border-gray-300" required autocomplete="new-password" placeholder="{{ __('New Password')}}">
                          </div>
                        </div>
                      </div>

                      <!-- Confirmer mot de passe -->
                      <div class="col-span-6 sm:col-span-3">
                        <div class="col-span-3 sm:col-span-2">
                          <label for="password_confirmation" class="block text-lg font-medium text-gray-700">{{ __('Confirm Password')}}</label>
                          <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="focus:ring-[#006f7e] focus:border-[#006f7e] flex-1 block w-full rounded-md sm:text-lg border-gray-300" required placeholder="{{ __('Confirm Password')}}">
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="px-4 py-3 text-right sm:px-6">
                      <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-[#006f7e] hover:bg-[#005d69] focus:bg-[#005d69] focus:outline-none focus:ring-2 focus:ring-offset-2">
                        {{ __('CHANGE MY PASSWORD')}}
                      </button>
                    </div>
                  </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-public-view>