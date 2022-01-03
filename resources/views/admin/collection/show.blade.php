<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ $collection->title }}
    </h2>
  </x-slot>

  <div class="mt-6 px-6">
    <div>{{ $collection->description }}</div>
  </div>

  <a href="{{ route('admin.collections.edit', $collection) }}" class='bg-yellow-500 px-2 py-3 rounded block'>Editer</a>
  <a href="#" class="bg-red-500 px-2 py-3 rounded block" onclick="event.preventDefault(); document.getElementById('destroy-collection-form').submit();">
    Supprimer
    <form action="{{ route('admin.collections.destroy', $collection) }}" method="post" id='destroy-collection-form'>
      @csrf
      @method('delete')
    </form>
  </a>
</x-app-layout>