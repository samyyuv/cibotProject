<x-guest-layout>
  <!-- Session Status -->
  <x-auth-session-status class="mb-4" :status="session('status')" />

  <!-- Validation Errors -->
  <x-auth-validation-errors class="mb-4" :errors="$errors" />
  <!-- component -->
  <section class="flex flex-col md:flex-row h-screen items-center justify-center">

    <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
        flex items-center justify-center">

      <div class="w-full h-100">

        <h1 class="text-xl md:text-2xl text-[#006f7e] font-bold leading-tight mt-12">{{ __('Login') }}</h1>

        <form class="mt-6" action="{{ route('login') }}" method="POST">
          @csrf
          <div>
            <label class="block text-gray-700" for="email">{{ __('E-Mail Address') }}</label>
            <input type="email" name="email" id="email" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-[#005d69] focus:bg-white focus:outline-none" autofocus autocomplete required>
          </div>

          <div class="mt-4">
            <label class="block text-gray-700">{{ __('Password') }}</label>
            <input type="password" name="password" id="password" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-[#005d69]
                focus:bg-white focus:outline-none" required autocomplete="current-password">
          </div>

          <div class="text-right mt-2">
            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="text-sm font-semibold text-gray-700 hover:text-[#006f7e] focus:text-[#006f7e]">{{ __('Forgot your password?') }}</a>
            @endif
          </div>

          <!-- Remember Me -->
          <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
              <input id="remember_me" type="checkbox" class="bg-gray-200 border focus:border-[#005d69] rounded shadow-sm focus:border-[#005d69] focus:ring focus:ring-[#006f7e] focus:ring-opacity-50" name="remember">
              <span class="ml-2 text-sm font-semibold text-gray-700">{{ __('Remember me') }}</span>
            </label>
          </div>

          <button type="submit" class="w-full block bg-[#006f7e] hover:bg-[#005d69] focus:bg-[#005d69] text-white font-semibold rounded-lg
              px-4 py-3 mt-6">{{ __('Log in') }}</button>
        </form>

        <hr class="my-6 border-gray-300 w-full">

        <p class="mt-8"><a href="{{ route('register') }}" class="text-[#006f7e] hover:text-[#005d69] font-semibold"> {{ __('Register') }}</a></p>


      </div>
    </div>

  </section>
</x-guest-layout>