<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Editer {{ $categorie->titre }}
    </h2>
  </x-slot>

  <div class="mt-6 px-6">

    <div class="my-5">
      @foreach ($errors->all() as $error)
      <span class="block text-red-500"> {{ $error }} </span>
      @endforeach
    </div>

    <form action="{{ route('admin.categories.update', $categorie) }}" method="post" enctype="multipart/form-data">

      @method('put')
      @csrf
      <x-label for="titre" value="Titre de l'categorie" />
      <x-input id="titre" name="titre" value="{{ $categorie->titre }}" />

      <x-label for="sous_titre" value="Titre de l'categorie" />
      <x-input id="sous_titre" name="sous_titre" value="{{ $categorie->sous_titre }}" />

      <x-label for="description" value="Description du categorie" />
      <textarea name="description" id="description" cols="30" rows="10">{{ $categorie->description }}</textarea>


      <br>
      <br>
      <x-button> Modifier une categorie </x-button>
    </form>
  </div>
</x-app-layout>