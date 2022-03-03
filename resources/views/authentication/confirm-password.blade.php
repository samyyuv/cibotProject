<x-guest-layout>

  <!-- component -->
  <section class="flex flex-col md:flex-row h-screen items-center  justify-center">

    <div class="mb-4 text-sm text-gray-600">
      {{ __('Ceci est une espace securisé de l'application. S'il vous plaît confirmer votre mot de passe avant de continuer.') }}
    </div>

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form class="mt-6" action="{{ route('password.confirm') }}" method="POST">
      @csrf

      <!-- Mot de passe -->
      <div class="mt-4">
        <label class="block text-gray-700">Mot de passe</label>
        <input type="password" name="password" id="password" placeholder="Entrer mot de passe" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                focus:bg-white focus:outline-none" required autocomplete="current-password">
      </div>

      <button type="submit" class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg
              px-4 py-3 mt-6">Confirmer</button>
    </form>

    </div>
    </div>

  </section>
</x-guest-layout>