<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Créer une oeuvre') }}
    </h2>
  </x-slot>

  <div class="mt-6 px-6">

    <div class="my-5">
      @foreach ($errors->all() as $error)
      <span class="block text-red-500">{{ $error }}</span>
      @endforeach
    </div>

    <form action="{{ route('admin.oeuvres.store') }}" method="post">

      @csrf

      <x-label for="titre" value="Titre de la oeuvre" />
      <x-input id="titre" name="titre" />

      <x-label for="description" value="Description de la oeuvre" />
      <textarea name="description" id="description" cols="30" rows="10"></textarea>

      <x-label for="sous_titre" value="Sous-titre de la oeuvre" />
      <x-input id="sous_titre" name="sous_titre" />

      <x-label for="date" value="Date de creation" />
      <x-input id="date" name="date" type="date" />

      <x-label for="categorie" value="Titre de la categorie" />
      <select name="categorie" id="categorie">
        @foreach ($categories as $categorie)
        <option value="{{ $categorie->id }}">{{ $categorie->titre }}</option>
        @endforeach
      </select>

      <x-label for="collection" value="Titre de la collection" />
      <select name="collection" id="collection">
        @foreach ($collections as $collection)
        <option value="{{ $collection->id }}">{{ $collection->titre }}</option>
        @endforeach
      </select>

      <x-label for="active" value="Active" />
      <x-input type="checkbox" id="active" name="active" />
      <br>
      <br>

      <x-button> Créer une oeuvre </x-button>
    </form>
  </div>

</x-app-layout>