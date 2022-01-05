<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Créer une photo') }}
    </h2>
  </x-slot>

  <div class="mt-6 px-6">

    <div class="my-5">
      @foreach ($errors->all() as $error)
      <span class="block text-red-500">{{ $error }}</span>
      @endforeach
    </div>

    <form action="{{ route('admin.photos.store') }}" method="post">

      @csrf

      <x-label for="titre" value="Titre de la photo" />
      <x-input id="titre" name="titre" />

      <x-label for="oeuvre" value="Titre de la oeuvre" />
      <select name="oeuvre" id="oeuvre">
        @foreach ($oeuvres as $oeuvre)
        <option value="{{ $oeuvre->id }}">{{ $oeuvre->titre }}</option>
        @endforeach
      </select>

      <x-label for="active" value="Active" />
      <x-input type="checkbox" id="active" name="active" />
      <br>
      <br>

      <x-button> Créer une photo </x-button>
    </form>
  </div>

</x-app-layout>