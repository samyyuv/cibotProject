<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Editer {{ $actualite->titre }}
    </h2>
  </x-slot>

  <div class="mt-6 px-6">

    <div class="my-5">
      @foreach ($errors->all() as $error)
      <span class="block text-red-500"> {{ $error }} </span>
      @endforeach
    </div>

    <form action="actualite" method="post" enctype="multipart/form-data">

      @method('put')
      @csrf
      <x-label for="titre" value="Titre de l'actualite" />
      <x-input id="titre" name="titre" value="{{ $actualite->titre }}" />

      <x-label for="description" value="Description du actualite" />
      <textarea name="description" id="description" cols="30" rows="10">{{ $actualite->description }}</textarea>

      <x-label for="titl_seo" value="Titre du SEO" />
      <x-input id="titl_seo" name="titl_seo" value="{{ $actualite->titl_seo }}" />

      <x-label for="description_seo" value="Description du SEO" />
      <textarea name="description_seo" id="description_seo" cols="30" rows="10">{{ $actualite->description_seo }}</textarea>

      <x-label for="activation" value="actualite active" />
      <x-input type="checkbox" id="activation" name="active" />

      <br>
      <br>
      <x-button> Modifier une actualité </x-button>
    </form>
  </div>
</x-app-layout>