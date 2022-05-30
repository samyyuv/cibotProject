<section class="biographie">

  <h1>{{ __('Biography') }}</h1>

  <div class="biographie-btn menu-btns">
    <ul class="biographie-dropdown dropdown" id="bio-drop">
      <li id="presentation" class="btn"><a href="{{ url('/biographie/presentation') }}">{{ __('Presentation') }}</a> <i class="fa-solid fa-chevron-down"></i></li>
      <li id="distinctions" class="btn"><a href="{{ url('/biographie/distinctions') }}">{{ __('Awards') }}</a> <i class="fa-solid fa-chevron-down"></i></li>
      <li id="realisations-monumentales" class="btn"><a href="{{ url('/biographie/realisations-monumentales') }}">{{ __('Monuments') }}</a> <i class="fa-solid fa-chevron-down"></i></li>
      <li id="expositions-personnelles" class="btn"><a href="{{ url('/biographie/expositions-personnelles') }}">{{ __('Solo exhibitions') }}</a> <i class="fa-solid fa-chevron-down"></i></li>
      <li id="expositions-collectives" class="btn"><a href="{{ url('/biographie/expositions-collectives') }}">{{ __('Collective exhibitions') }}</a> <i class="fa-solid fa-chevron-down"></i></li>
      <li id="evenements" class="btn"><a href="{{ url('/biographie/evenements') }}">{{ __('Events') }}</a> <i class="fa-solid fa-chevron-down"></i></li>
      <li id="en-permanence" class="btn"><a href="{{ url('/biographie/en-permanence') }}">{{ __('Galleries') }}</a> <i class="fa-solid fa-chevron-down"></i></li>
      <li id="critiques" class="btn"><a href="{{ url('/biographie/critiques') }}">{{ __('Critics') }}</a> <i class="fa-solid fa-chevron-down"></i></li>
      <li id="documents-video" class="btn"><a href="{{ url('/biographie/documents-video') }}">{{ __('Videos') }}</a> <i class="fa-solid fa-chevron-down"></i></li>
    </ul>
  </div>