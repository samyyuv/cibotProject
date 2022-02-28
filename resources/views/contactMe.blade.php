<section class="contactMe md:py-24 py-12 px-4" id="contactMe">
  <div class="sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6 md:px-24">
      <div class="md:col-span-1">
        <div class="sm:px-0">
          <h3 class="lg: text-left text-4xl font-medium leading-6 contactTitle pb-3">{{ __('Contact') }}</h3>
          <div class="hidden sm:block">
            <p class="lg: text-left text-base py-8">{{ __('Do you have a question? We are listening.') }}</p>
          </div>
        </div>
      </div>

      <div class="md:col-span-2">
        <div class="my-5">

        </div>

        <form class="contacForm" action="{{ route('admin.messages.store') }}" method="POST">
          @csrf
          <div class="overflow-hidden">
            <div>
              <div class="grid grid-cols-6 gap-6 pb-8">
                <div class="col-span-6 sm:col-span-3">
                  <label for="prenom" class="block text-sm font-semibold">{{ __('First last name') }} *</label>
                  <input type="text" name="prenom" id="prenom" autocomplete="given-name" class="mt-1 focus:ring-gray-500 focus:border-gray-500 block w-full shadow-sm sm:text-sm border-transparent">
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label for="nom" class="block text-sm font-semibold">{{ __('First name') }} *</label>
                  <input type="text" name="nom" id="nom" autocomplete="family-name" class="mt-1 focus:ring-gray-500 focus:border-gray-500 block w-full shadow-sm sm:text-sm border-transparent">
                </div>

                <div class="col-span-6  sm:col-span-3">
                  <label for="sujet" class="block text-sm font-semibold">{{ __('Subject') }}</label>
                  <input type="text" name="sujet" id="sujet" class="mt-1 focus:ring-gray-500 focus:border-gray-500 block w-full shadow-sm sm:text-sm border-transparent">
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label for="email" class="block text-sm font-semibold">{{ __('E-mail') }} *</label>
                  <input type="email" name="email" id="email" autocomplete="email" class="mt-1 focus:ring-gray-500 focus:border-gray-500 block w-full shadow-sm sm:text-sm border-transparent">
                </div>

                <div class="col-span-6">
                  <label for="message" class="block text-sm font-semibold">
                    {{ __('Message') }}
                  </label>
                  <div class="mt-1">
                    <textarea id="message" name="message" rows="3" class="px-1.5 py-1.5 shadow-sm focus:ring-gray-500 focus:border-gray-500 mt-1 block w-full sm:text-sm border border-transparent" placeholder="Votre message ici"></textarea>
                  </div>
                  <p class="pt-2 text-xs">{{ __('Mandatory information') }}* </p>
                </div>
              </div>
              <div class="md:text-right text-center px-8">
                <a type="submit" id="contactButton">
                  {{ __('Send') }}
                </a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>