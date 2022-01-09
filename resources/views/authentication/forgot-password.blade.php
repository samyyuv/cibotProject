<x-guest-layout>
  <!-- component -->
  <section class="flex flex-col md:flex-row h-screen items-center">

    <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
    flex items-center justify-center">

      <div class="w-full h-100">


        <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Mot de passe oublié ?</h1>

        <div class="mb-4 text-sm text-gray-600">
          {{ __('Laissez-nous votre email et nous vous enverrons un lien pour modifier votre mot de passe.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form class="mt-6" action="{{ route('password.email') }}" method="POST">
          @csrf

          <div>
            <label class="block text-gray-700" for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Votre adresse e-mail" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autofocus required>
          </div>

          <button type="submit" class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg
              px-4 py-3 mt-6">Modifier le mot de passe</button>
        </form>

      </div>
    </div>

  </section>
</x-guest-layout>