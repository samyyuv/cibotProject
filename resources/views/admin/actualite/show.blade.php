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
        Loading.....
      </div>

      <div class="flex flex-col flex-1 h-full overflow-hidden">
        <!-- Main content -->
        <main class="flex-1 max-h-full p-5 overflow-hidden overflow-y-scroll">
          <!-- Main content header -->
          <div class="flex flex-col items-start pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">
            <h1 class="text-2xl font-semibold whitespace-nowrap"> {{ $actualite->titre }}</h1>
            <div class="flex justify-center ml-5">
              <a href="{{ route('admin.actualites.edit', $actualite) }}" class='bg-yellow-300 hover:bg-yellow-500 px-2 py-3 rounded'><i class="fas fa-edit" style="font-size:1.5rem;"></i></a>
              <a href="#" class="bg-red-500 hover:bg-red-800 ml-2 px-2 py-3 rounded" onclick="event.preventDefault(); document.getElementById('destroy-actualite-form').submit();">
                <i class="fas fa-trash-alt" style="font-size:1.5rem;"></i>
                <form action="{{ route('admin.actualites.destroy', $actualite) }}" method="post" id='destroy-actualite-form'>
                  @csrf
                  @method('delete')
                </form>
              </a>
            </div>

          </div>
          <!-- component -->
          <main class="relative container mx-auto bg-white px-4">
            <div class="relative -mx-4 top-0 pt-[17%] overflow-hidden">
              <img class="absolute inset-0 object-cover object-top w-full h-full filter blur" src="" alt="" />
            </div>

            <div class="mt-[-10%] w-1/2 mx-auto">
              <div class="relative pt-[56.25%] overflow-hidden rounded-2xl">
                <img class="w-full h-full absolute inset-0 object-cover" src="" alt="" />
              </div>
            </div>

            <article class="max-w-prose mx-auto py-8">
              <h1 class="text-xl font-bold mb-3">{{ $actualite->titre }}</h1>

              <p class="mt-6 text-justify text-base">{{ $actualite->description }}</p>
            </article>
          </main>
      </div>
    </div>
  </div>
</x-app-layout>