<x-guest-layout>
  <!-- Session Status -->
  <x-auth-session-status class="mb-4" :status="session('status')" />

  <!-- Validation Errors -->
  <x-auth-validation-errors class="mb-4" :errors="$errors" />
  <!-- component -->
  <section class="flex flex-col md:flex-row h-screen items-center">

    <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
        flex items-center justify-center">

      <div class="w-full h-100">


        <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Se connecter a votre compte</h1>

        <form class="mt-6" action="{{ route('register') }}" method="POST">
          @csrf

          <!-- Nom -->
          <div>
            <label class="block text-gray-700" for="name">Nom</label>
            <input type="text" name="name" id="name" placeholder="Entrez votre nom et prenom" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autofocus required>
          </div>

          <!-- Email Address -->
          <div class="mt-4">
            <label class="block text-gray-700" for="email">Adresse email</label>
            <input type="email" name="email" id="email" placeholder="Entrer une adresse e-mail" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" required>
          </div>

          <!-- Mot de passe -->
          <div class="mt-4">
            <label class="block text-gray-700">Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="Entrer mot de passe" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                focus:bg-white focus:outline-none" required autocomplete="new-password">
          </div>

          <!-- Confirmer mot de passe -->
          <div class="mt-4">
            <label class="block text-gray-700">Mot de passe</label>
            <input type="password_confirmation" name="password_confirmation" id="password_confirmation" placeholder="Rentrer mot de passe" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                focus:bg-white focus:outline-none" required>
          </div>


          <div class="text-right mt-2">
            <a href="{{ route('login') }}" class="text-sm font-semibold text-gray-700 hover:text-blue-700 focus:text-blue-700">{{ __('Déjà enregistré ?') }}</a>
          </div>

          <button type="submit" class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg
              px-4 py-3 mt-6">S'enregistrer</button>
        </form>

      </div>
    </div>

  </section>
</x-guest-layout>