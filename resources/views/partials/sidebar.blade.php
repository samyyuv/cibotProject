<div class="w-4/12 -mx-8 lg:block">
  <div class="px-8 mt-10">
    <h1 class="mb-4 text-xl font-bold text-gray-700">Collections</h1>
    <div class="flex flex-col max-w-sm px-4 py-6 mx-auto bg-white rounded-lg shadow-md">
      <ul>
        @foreach ($collections as $collection)
        <li class="mb-3"><a href="#" class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">-
            {{ $collection->titre }}</a></li>
        @endforeach
      </ul>
    </div>
  </div>
</div>