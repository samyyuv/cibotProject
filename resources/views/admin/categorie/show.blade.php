<x-app-layout>
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
            <h1 class="text-2xl font-semibold whitespace-nowrap"> {{ $categorie->titre }}</h1>
            <div class="flex justify-center ml-5">
              <a href="{{ route('admin.categories.edit', $categorie) }}" class='bg-yellow-300 hover:bg-yellow-500 px-2 py-3 rounded'><i class="fas fa-edit" style="font-size:1.5rem;"></i></a>
              <a href="#" class="bg-red-500 hover:bg-red-800 ml-2 px-2 py-3 rounded" onclick="event.preventDefault(); document.getElementById('destroy-categorie-form').submit();">
                <i class="fas fa-trash-alt" style="font-size:1.5rem;"></i>
                <form action="{{ route('admin.categories.destroy', $categorie) }}" method="post" id='destroy-categorie-form'>
                  @csrf
                  @method('delete')
                </form>
              </a>
            </div>

          </div>
          <!-- component -->
          <div class="relative container mx-auto bg-white px-4">
            <article class="max-w-prose mx-auto py-8">
              <h1 class="text-xl font-bold mb-3">{{ $categorie->titre }}</h1>

              <p class="mt-6 text-justify text-base pb-3">{{ $categorie->description }}</p>
              <div class="container grid grid-cols-3 gap-2 mx-auto">
                @foreach ($categorie->photos as $photo)
                <div class="w-full rounded">
                  <img src="{{ asset('/storage/' . $photo->photo) }}" alt="image">
                </div>
                @endforeach
              </div>

            </article>
          </div>
        </main>
      </div>
      <div class="hidden w-3/12 -mx-8 lg:block">
        <div class="px-8 mt-10">
          <h1 class="mb-4 text-xl font-bold text-gray-700">{{ __('Art objects') }}</h1>
          <div class="flex flex-col max-w-sm px-4 py-6 bg-white rounded-lg shadow-md">
            <ul>
              @if ($categorie->oeuvres->count() > 0)
              @foreach ($categorie->oeuvres as $oeuvre)
              <li><a href="{{ route('admin.oeuvres.show', $oeuvre) }}" class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">
                  - {{ $oeuvre->titre }}
                </a></li>
              @endforeach
              @else
              <span>{{ __('There are no art objects in this category') }}</span>
              @endif
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>