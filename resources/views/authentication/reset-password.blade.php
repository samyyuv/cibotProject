<x-guest-layout>

  <!-- Validation Errors -->
  <x-auth-validation-errors class="mb-4" :errors="$errors" />

  <!-- component -->
  <section class="flex flex-col md:flex-row h-screen items-center justify-center">

    <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
        flex items-center justify-center">

      <div class="w-full h-100">

        <form class="mt-6" action="{{ route('password.update') }}" method="POST">
          @csrf

          <!-- Password Reset Token -->
          <input type="hidden" name="token" value="{{ $request->route('token') }}">

          <!-- Email Address -->
          <div class="mt-4">
            <label class="block text-gray-700" for="email">{{ __('Email') }}</label>
            <input type="email" name="email" id="email" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-[#005d69] focus:bg-white focus:outline-none" required autofocus>
          </div>

          <!-- Mot de passe -->
          <div class="mt-4">
            <label class="block text-gray-700">{{ __('Password') }}</label>
            <input type="password" name="password" id="password" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-[#005d69] focus:bg-white focus:outline-none" required>
          </div>

          <!-- Confirmer mot de passe -->
          <div class="mt-4">
            <label class="block text-gray-700">{{ __('Confirm Password') }}</label>
            <input type="password_confirmation" name="password_confirmation" id="password_confirmation" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-[#005d69] focus:bg-white focus:outline-none" required>
          </div>

          <button type="submit" class="w-full block bg-[#006f7e] hover:bg-[#005d69] focus:bg-[#005d69] text-white font-semibold rounded-lg
              px-4 py-3 mt-6"> {{ __('Reset Password') }}
          </button>
        </form>

      </div>
    </div>

  </section>
</x-guest-layout>