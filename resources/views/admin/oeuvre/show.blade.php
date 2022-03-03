<x-app-layout>
  <style>
    .pt-\[17\%\] {
      padding-top: 17%;
    }

    .mt-\[-10\%\] {
      margin-top: -10%;
    }

    .pt-\[56\.25\%\] {
      padding-top: 56.25%;
    }
  </style>
  <!-- component -->
  <div>
    <div class="flex h-screen overflow-y-hidden bg-white" x-data="setup()" x-init="$refs.loading.classList.add('hidden')">
      <!-- Loading screen -->
      <div x-ref="loading" class="fixed inset-0 z-50 flex items-center justify-center text-white bg-black bg-opacity-50" style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)">
        {{ __('Loading') }}.....
      </div>

      <div class="flex flex-col flex-1 h-full overflow-hidden">
        <!-- Main content -->
        <main class="flex-1 max-h-full p-5 overflow-hidden overflow-y-scroll">
          <!-- Main content header -->
          <div class="flex flex-col items-start pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">
            <h1 class="text-2xl font-semibold whitespace-nowrap"> {{ $oeuvre->titre }}</h1>
            <div class="flex justify-center ml-5">
              <a href="{{ route('admin.oeuvres.edit', $oeuvre) }}" class='bg-yellow-300 hover:bg-yellow-500 px-2 py-3 rounded'><i class="fas fa-edit" style="font-size:1.5rem;"></i></a>
              <a href="#" class="bg-red-500 hover:bg-red-800 ml-2 px-2 py-3 rounded" onclick="event.preventDefault(); document.getElementById('destroy-oeuvre-form').submit();">
                <i class="fas fa-trash-alt" style="font-size:1.5rem;"></i>
                <form action="{{ route('admin.oeuvres.destroy', $oeuvre) }}" method="post" id='destroy-oeuvre-form'>
                  @csrf
                  @method('delete')
                </form>
              </a>
            </div>

          </div>
          <!-- component -->
          <main class="container mx-auto bg-white px-4">

            <article class="max-w-prose mx-auto py-8">
              <div class="my-3">
                <div class="flex justify-between mt-4">

                  <h1 class="text-xl font-bold mb-3">{{ $oeuvre->titre }}</h1>
                  <p>{{ $oeuvre->categorie->titre}} </p>
                </div>

                <p class="mt-6 text-justify text-base">{{ $oeuvre->description }}</p>
              </div>
              <div class="container grid grid-cols-3 gap-2 mx-auto">
                @foreach ($oeuvre->photos as $photo)
                <div class="w-full rounded">
                  <img src="{{ asset('/storage/' . $photo->photo) }}" alt="image">
                </div>
                @endforeach
              </div>
            </article>
          </main>
      </div>
    </div>
  </div>
</x-app-layout>