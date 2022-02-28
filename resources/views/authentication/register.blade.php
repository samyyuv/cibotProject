<x-guest-layout>
  <!-- Session Status -->
  <x-auth-session-status class="mb-4" :status="session('status')" />

  <!-- Validation Errors -->
  <x-auth-validation-errors class="mb-4" :errors="$errors" />
  <!-- component -->
  <section class="flex flex-col md:flex-row h-screen items-center  justify-center">

    <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12 flex items-center justify-center">

      <div class="w-full h-100">


        <h1 class="text-xl md:text-2xl text-[#006f7e] font-bold leading-tight mt-12"> {{ __('Create Account') }}</h1>

        <form class="mt-6" action="{{ route('register') }}" method="POST">
          @csrf

          <!-- Nom -->
          <div>
            <label class="block text-gray-700" for="name">{{ __('Name') }}</label>
            <input type="text" name="name" id="name" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-[#005d69] focus:bg-white focus:outline-none" autofocus required>
          </div>

          <!-- Email Address -->
          <div class=" mt-4">
            <label class="block text-gray-700" for="email">{{ __('Email') }}</label>
            <input type="email" name="email" id="email" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-[#005d69] focus:bg-white focus:outline-none" required>
          </div>

          <!-- Mot de passe -->
          <div class=" mt-4">
            <label class="block text-gray-700">{{ __('Password') }}</label>
            <input type="password" name="password" id="password" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-[#005d69] focus:bg-white focus:outline-none" required autocomplete=" new-password">
          </div>

          <!-- Confirmer mot de passe -->
          <div class="mt-4">
            <label class="block text-gray-700">{{ __('Confirm Password') }}</label>
            <input type="password" name="password_confirmation" id="password_confirmation" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-[#005d69] focus:bg-white focus:outline-none" required>
          </div>


          <div class="text-right mt-2">
            <a href="{{ route('login') }}" class="text-sm font-semibold text-gray-700 hover:text-[#006f7e] focus:text-[#006f7e]"> {{ __('Already registered?') }}</a>
          </div>

          <button type="submit" class="w-full block bg-[#006f7e] hover:bg-[#005d69] focus:bg-[#005d69] text-white font-semibold rounded-lg
              px-4 py-3 mt-6"> {{ __('Register') }}
          </button>
        </form>

      </div>
    </div>

  </section>
</x-guest-layout>