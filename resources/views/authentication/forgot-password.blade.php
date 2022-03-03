<x-guest-layout>
  <!-- component -->
  <section class="flex flex-col md:flex-row h-screen items-center  justify-center">

    <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
    flex items-center justify-center">

      <div class="w-full h-100">


        <h1 class="text-xl md:text-2xl text-[#006f7e] font-bold leading-tight mt-12">{{ __('Forgot your password?') }}</h1>

        <div class="mb-4 text-sm text-gray-600">
          {{ __('No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form class="mt-6" action="{{ route('password.email') }}" method="POST">
          @csrf

          <div>
            <label class="block text-gray-700" for="email">{{ __('Email') }}</label>
            <input type="email" name="email" id="email" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-[#005d69] focus:bg-white focus:outline-none" autofocus required>
          </div>

          <button type="submit" class="w-full block bg-[#006f7e] hover:bg-[#005d69] focus:bg-[#005d69] text-white font-semibold rounded-lg
              px-4 py-3 mt-6"> {{ __('Email Password Reset Link') }}</button>
        </form>

      </div>
    </div>

  </section>
</x-guest-layout>