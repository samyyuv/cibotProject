<x-guest-layout>

  <!-- component -->
  <section class="flex flex-col md:flex-row h-screen items-center  justify-center">

    <div class="mb-4 text-sm text-gray-600">
      {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form class="mt-6" action="{{ route('password.confirm') }}" method="POST">
      @csrf

      <!-- Mot de passe -->
      <div class="mt-4">
        <label class="block text-gray-700"> {{ __('Password') }}</label>
        <input type="password" name="password" id="password" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-[#92d6d6]
                focus:bg-white focus:outline-none" required autocomplete="current-password">
      </div>

      <button type="submit" class="w-full block bg-[#92d6d6] hover:bg-[#08a398] focus:bg-[#08a398] text-white font-semibold rounded-lg
              px-4 py-3 mt-6"> {{ __('Confirm') }}</button>
    </form>

    </div>
    </div>

  </section>
</x-guest-layout>