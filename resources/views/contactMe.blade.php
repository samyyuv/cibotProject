<x-public-view>

  <div class="hidden md:block" aria-hidden="true">
    <div class="py-3">
      <div class="border-b border-gray-200 text-5xl font-bold ml-2">Contactez-nous</div>
    </div>
  </div>

  <div class="m-5">
    <div class="sm:mt-0">
      <div class="md:grid md:grid-cols-3 md:gap-6 md:bg-gradient-to-b from-amber-100 to-cyan-200 pb-6">
        <div class="md:col-span-1">
          <div class="md:pt-10 md:px-3 sm:px-0">
            <h3 class="lg:pl-5 text-center text-2xl font-medium leading-6 text-gray-900">Information du contact</h3>
            <p class="lg:pl-5 text-center mt-4 text-sm text-gray-600">Vous avez une question ? Nous vous écoutons.</p>
            <ul class="p-2 overflow-hidden">
              @foreach ($contacts as $contact)
              @if ( $contact->active == 1)
              <li>
                <div class="lg:text-lg text-sm flex justify-center items-center p-3 space-x-2 rounded-md">
                  <span><i class="far fa-envelope"></i></span>
                  <span> {{ $contact->email }} </span>
                </div>
              </li>
              <li>
                <div class="lg:text-lg text-sm flex justify-center items-center p-3 space-x-2 rounded-md">
                  <span><i class="fas fa-phone-alt"></i></span>
                  <span> {{ $contact->telephone }} </span>
                  </a>
                </div>
              </li>
              @endif
              @endforeach
              <div class="flex content-evenly p-3">
                <li class="w-1/2">
                  <a href="https://www.facebook.com/elisabethcibotsculpteur" class="lg:text-2xl flex justify-center items-center space-x-2 rounded-md hover:bg-gray-100 text-center">
                    <span><i class="fab fa-facebook-square"></i></span>
                  </a>
                </li>
                <li class="w-1/2">
                  <a href="https://www.instagram.com/elisabeth_cibot/" class="lg:text-2xl flex justify-center items-center space-x-2 rounded-md hover:bg-gray-100 text-center">
                    <span><i class="fab fa-instagram"></i></span>
                  </a>
                </li>
              </div>
            </ul>
          </div>
        </div>

        <div class="md:mr-5 md:col-span-2 md:mt-7">
          <div class="my-5">
            @foreach ($errors->all() as $error)
            <span class="block text-red-500"> {{ $error }} </span>
            @endforeach
          </div>

          <form action="{{ route('admin.messages.store') }}" method="POST">
            @csrf
            <div class="shadow overflow-hidden sm:rounded-md">
              <div class="px-4 py-5 bg-white sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                  <div class="col-span-6 sm:col-span-3">
                    <label for="prenom" class="block text-sm font-semibold text-gray-700">Prenom</label>
                    <input type="text" name="prenom" id="prenom" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  </div>

                  <div class="col-span-6 sm:col-span-3">
                    <label for="nom" class="block text-sm font-semibold text-gray-700">Nom</label>
                    <input type="text" name="nom" id="nom" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  </div>

                  <div class="col-span-6 sm:col-span-3">
                    <label for="email" class="block text-sm font-semibold text-gray-700">Email</label>
                    <input type="email" name="email" id="email" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  </div>

                  <div class="col-span-6 sm:col-span-3">
                    <div class="flex justify-between">
                      <label for="telephone" class="block text-sm font-semibold text-gray-700">Telephone</label>
                      <span class="text-xs text-gray-500">*Optional</span>
                    </div>
                    <input type="text" name="telephone" id="telephone" autocomplete="tel" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  </div>

                  <div class="col-span-6 ">
                    <label for="sujet" class="block text-sm font-semibold text-gray-700">Sujet</label>
                    <input type="text" name="sujet" id="sujet" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  </div>

                  <div class="col-span-6">
                    <label for="message" class="block text-sm font-semibold text-gray-700">
                      Message
                    </label>
                    <div class="mt-1">
                      <textarea id="message" name="message" rows="3" class="px-1.5 py-1.5 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="  Votre message ici"></textarea>
                    </div>
                  </div>
                </div>
                <div class="px-4 py-3 text-right sm:px-6">
                  <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Envoyer
                  </button>
                </div>

              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-public-view>