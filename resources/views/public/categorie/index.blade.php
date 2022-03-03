<x-app-layout>
  <!-- component -->
  <div class="overflow-x-hidden bg-gray-100">
    <div class="px-6 py-8">
      <div class="container flex justify-between mx-auto">
        <div class="w-full lg:w-8/12">
          <div class="flex items-center justify-between">
            <h1 class="text-xl font-bold text-gray-700 md:text-2xl">Categorie</h1>
            <div>
              <select class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option>Latest</option>
                <option>Last Week</option>
              </select>
            </div>
          </div>
          @foreach ($categories as $categorie)
          <div class="mt-6">
            <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
              <div class="flex items-center justify-between">
                <span class="font-light text-gray-600">
                  {{ $categorie->created_at->format('d M Y')}}
                </span>
                <a href="#" class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">Collection about ?</a>
              </div>
              <div class="mt-2"><a href="#" class="text-2xl font-bold text-gray-700 hover:underline">
                  {{ $categorie->titre }}
                </a>
                <p class="mt-2 text-gray-600">
                  {{ Str::limit($categorie->description, 200) }}
                </p>
              </div>
              <div class="flex items-center justify-between mt-4">
                <a href="{{ route('categories.show', $categorie) }}" class="text-blue-500 hover:underline">Voir plus</a>
                <div><a href="#" class="flex items-center">

                  </a>

                </div>
              </div>
            </div>
          </div>
          @endforeach
          <div class="mt-8">
            <div class="flex">
              <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-500 bg-white rounded-md cursor-not-allowed">
                previous
              </a>

              <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                1
              </a>

              <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                2
              </a>

              <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                3
              </a>

              <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                Next
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</x-app-layout>