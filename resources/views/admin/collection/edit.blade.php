<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Editer {{ $collection->titre }}
    </h2>
  </x-slot>

  <div class="mt-6 px-6">

    <div class="my-5">
      @foreach ($errors->all() as $error)
      <span class="block text-red-500"> {{ $error }} </span>
      @endforeach
    </div>

    <form action="{{ route('admin.collections.update', $collection) }}" method="post" enctype="multipart/form-data">

      @method('put')
      @csrf
      <x-label for="titre" value="Titre de l'collection" />
      <x-input id="titre" name="titre" value="{{ $collection->titre }}" />

      <x-label for="sous_titre" value="Titre de l'collection" />
      <x-input id="sous_titre" name="sous_titre" value="{{ $collection->sous_titre }}" />

      <x-label for="description" value="Description du collection" />
      <textarea name="description" id="description" cols="30" rows="10">{{ $collection->description }}</textarea>

      <br>
      <br>
      <x-button>Modifier un collection </x-button>
    </form>
  </div>
</x-app-layout>