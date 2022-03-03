<x-public-view>
  @include('partialsFront.header')
  <div></div>
  @include('partialsFront.last-art')

  <section class="contactMe py-12 px-4">
    <div class="sm:mt-0">
      <div class="md:grid md:grid-cols-3 md:gap-6 md:pb-24 md:pt-20 md:px-24">
        <div class="md:col-span-1">
          <div class="sm:px-0">
            <h3 class="lg: text-left text-4xl font-medium leading-6 contactTitle pb-3">Contact</h3>
            <div class="hidden sm:block">
              <p class="lg: text-left text-base py-8">Vous avez une question ? Nous vous écoutons.</p>
              <ul class="overflow-hidden">
                @foreach ($contacts as $contact)
                @if ( $contact->active == 1)
                <li>
                  <div class="lg:text-m text-sm flex justify-start items-center pt-3 space-x-2 rounded-md">
                    <span class="pr-2"><i class="far fa-envelope"></i></span>
                    <span> {{ $contact->email }} </span>
                  </div>
                </li>
                <li>
                  <div class="lg:text-m text-sm flex justify-start items-center py-3 space-x-2 rounded-md">
                    <span class="pr-2"><i class="fas fa-phone-alt"></i></span>
                    <span> {{ $contact->telephone }} </span>
                  </div>
                </li>
                @endif
                @endforeach
              </ul>
            </div>
          </div>
        </div>

        <div class="md:col-span-2">
          <div class="my-5">
            @foreach ($errors->all() as $error)
            <span class="block text-red-500"> {{ $error }} </span>
            @endforeach
          </div>

          <form action="{{ route('admin.messages.store') }}" method="POST">
            @csrf
            <div class="overflow-hidden">
              <div>
                <div class="grid grid-cols-6 gap-6 pb-8">
                  <div class="col-span-6 sm:col-span-3">
                    <label for="prenom" class="block text-sm font-semibold">Votre nom *</label>
                    <input type="text" name="prenom" id="prenom" autocomplete="given-name" class="mt-1 focus:ring-gray-500 focus:border-gray-500 block w-full shadow-sm sm:text-sm border-transparent">
                  </div>

                  <div class="col-span-6 sm:col-span-3">
                    <label for="nom" class="block text-sm font-semibold">Votre prénom *</label>
                    <input type="text" name="nom" id="nom" autocomplete="family-name" class="mt-1 focus:ring-gray-500 focus:border-gray-500 block w-full shadow-sm sm:text-sm border-transparent">
                  </div>

                  <div class="col-span-6  sm:col-span-3">
                    <label for="sujet" class="block text-sm font-semibold">Sujet</label>
                    <input type="text" name="sujet" id="sujet" class="mt-1 focus:ring-gray-500 focus:border-gray-500 block w-full shadow-sm sm:text-sm border-transparent">
                  </div>

                  <div class="col-span-6 sm:col-span-3">
                    <label for="email" class="block text-sm font-semibold">Votre email *</label>
                    <input type="email" name="email" id="email" autocomplete="email" class="mt-1 focus:ring-gray-500 focus:border-gray-500 block w-full shadow-sm sm:text-sm border-transparent">
                  </div>

                  <div class="col-span-6">
                    <label for="message" class="block text-sm font-semibold">
                      Message
                    </label>
                    <div class="mt-1">
                      <textarea id="message" name="message" rows="3" class="px-1.5 py-1.5 shadow-sm focus:ring-gray-500 focus:border-gray-500 mt-1 block w-full sm:text-sm border border-transparent" placeholder="Votre message ici"></textarea>
                    </div>
                    <p class="pt-2 text-xs">* Mentions obligatoires</p>
                  </div>
                </div>
                <div class="md:text-right text-center px-8">
                  <button type="submit" class="contactButton">
                    Envoyer
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  @include('partialsFront.footer')
</x-public-view>