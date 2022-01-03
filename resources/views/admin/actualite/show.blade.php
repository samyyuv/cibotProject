<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ $actualite->title }}
    </h2>
  </x-slot>

  <div class="mt-6 px-6">
    <div>{{ $actualite->description }}</div>
  </div>

  <a href="{{ route('admin.actualites.edit', $actualite) }}" class='bg-yellow-500 px-2 py-3 rounded block'>Editer</a>
  <a href="#" class="bg-red-500 px-2 py-3 rounded block" onclick="event.preventDefault(); document.getElementById('destroy-actualite-form').submit();">
    Supprimer
    <form action="{{ route('admin.actualites.destroy', $actualite) }}" method="post" id='destroy-actualite-form'>
      @csrf
      @method('delete')
    </form>
  </a>
</x-app-layout>