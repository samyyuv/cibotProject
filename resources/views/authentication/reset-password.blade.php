<x-guest-layout>

  <!-- Validation Errors -->
  <x-auth-validation-errors class="mb-4" :errors="$errors" />

  <!-- component -->
  <section class="flex flex-col md:flex-row h-screen items-center">

    <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
        flex items-center justify-center">

      <div class="w-full h-100">

        <form class="mt-6" action="{{ route('password.update') }}" method="POST">
          @csrf

          <!-- Password Reset Token -->
          <input type="hidden" name="token" value="{{ $request->route('token') }}">

          <!-- Email Address -->
          <div class="mt-4">
            <label class="block text-gray-700" for="email">Adresse email</label>
            <input type="email" name="email" id="email" placeholder="Entrer une adresse e-mail" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" required autofocus>
          </div>

          <!-- Mot de passe -->
          <div class="mt-4">
            <label class="block text-gray-700">Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="Entrer mot de passe" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                focus:bg-white focus:outline-none" required>
          </div>

          <!-- Confirmer mot de passe -->
          <div class="mt-4">
            <label class="block text-gray-700">Mot de passe</label>
            <input type="password_confirmation" name="password_confirmation" id="password_confirmation" placeholder="Rentrer mot de passe" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                focus:bg-white focus:outline-none" required>
          </div>

          <button type="submit" class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg
              px-4 py-3 mt-6"> {{ __('Reset Password') }}
          </button>
        </form>

      </div>
    </div>

  </section>
</x-guest-layout>