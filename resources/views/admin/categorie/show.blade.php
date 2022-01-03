<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ $categorie->titre }}
    </h2>
  </x-slot>

  <div class="mt-6 px-6">
    <div>{{ $categorie->description }}</div>
  </div>

  <a href="{{ route('admin.categories.edit', $categorie) }}" class='bg-yellow-500 px-2 py-3 rounded block'>Editer</a>
  <a href="#" class="bg-red-500 px-2 py-3 rounded block" onclick="event.preventDefault(); document.getElementById('destroy-categorie-form').submit();">
    Supprimer
    <form action="{{ route('admin.categories.destroy', $categorie) }}" method="post" id='destroy-categorie-form'>
      @csrf
      @method('delete')
    </form>
  </a>
</x-app-layout>