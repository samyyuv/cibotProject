<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Editer {{ $oeuvre->titre }}
    </h2>
  </x-slot>

  <div class="mt-6 px-6">

    <div class="my-5">
      @foreach ($errors->all() as $error)
      <span class="block text-red-500"> {{ $error }} </span>
      @endforeach
    </div>

    <form action="{{ route('admin.oeuvres.update', $oeuvre) }}" method="post">

      @method('put')
      @csrf
      <x-label for=" titre" value="Titre de l'oeuvre" />
      <x-input id="titre" name="titre" value="{{ $oeuvre->titre }}" />

      <x-label for="sous_titre" value="Titre de l'oeuvre" />
      <x-input id="sous_titre" name="sous_titre" value="{{ $oeuvre->sous_titre }}" />

      <x-label for="description" value="Description du oeuvre" />
      <textarea name="description" id="description" cols="30" rows="10">{{ $oeuvre->description }}</textarea>

      <x-label for="date" value="Date de creation" />
      <x-input id="date" name="date" type="date" value="{{ $oeuvre->date }}" />

      <x-label for="active" value="Active" />
      <x-input type="checkbox" id="active" name="active" />

      <br>
      <br>
      <x-button> Modifier une oeuvre </x-button>
    </form>
  </div>
</x-app-layout>