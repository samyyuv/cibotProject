<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Créer une Categorie') }}
    </h2>
  </x-slot>

  <div class="mt-6 px-6">

    <div class="my-5">
      @foreach ($errors->all() as $error)
      <span class="block text-red-500">{{ $error }}</span>
      @endforeach
    </div>

    <form action="{{ route('admin.categories.store') }}" method="post">

      @csrf

      <x-label for="titre" value="Titre de la categorie" />
      <x-input id="titre" name="titre" />

      <x-label for="description" value="Description de la categorie" />
      <textarea name="description" id="description" cols="30" rows="10"></textarea>

      <x-label for="sous_titre" value="Sous-titre de la categorie" />
      <x-input id="sous_titre" name="sous_titre" />
      <br>
      <br>

      <x-button> Créer une categorie </x-button>
    </form>
  </div>

</x-app-layout>