<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ $oeuvre->titre }}
    </h2>
  </x-slot>

  <div class="mt-6 px-6">
    <div>{{ $oeuvre->description }}</div>
  </div>

  <a href="{{ route('admin.oeuvres.edit', $oeuvre) }}" class='bg-yellow-500 px-2 py-3 rounded block'>Editer</a>
  <a href="#" class="bg-red-500 px-2 py-3 rounded block" onclick="event.preventDefault(); document.getElementById('destroy-oeuvre-form').submit();">
    Supprimer
    <form action="{{ route('admin.oeuvres.destroy', $oeuvre) }}" method="post" id='destroy-oeuvre-form'>
      @csrf
      @method('delete')
    </form>
  </a>
</x-app-layout>