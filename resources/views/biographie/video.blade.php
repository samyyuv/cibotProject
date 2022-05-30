<x-public-view>
  @include('biographie.menuBiographie')
  <div class="biographie-presentation video">
    <div>
      <h2>{{ __('Videos') }}</h2>
      <div>
        <iframe src="https://player.vimeo.com/video/107467775" frameborder="0" title="Elisabeth Cibot - 50 sculptures &agrave; la Cour des Comptes Europ&eacute;enne" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        <iframe src="http://www.dailymotion.com/embed/video/x160vhx" frameborder="0" allowfullscreen></iframe>
        <iframe src="http://www.dailymotion.com/embed/video/xyra9t" frameborder="0" allowfullscreen></iframe>
        <iframe src="http://www.dailymotion.com/embed/video/x11k789" frameborder="0" allowfullscreen></iframe>
        <iframe src="https://player.vimeo.com/video/70107054" frameborder="0" title="LA VALNURESE" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        <iframe src="https://player.vimeo.com/video/38087036" frameborder="0" title="La statue du Pape Jean-Paul II, sculpteur : Elisabeth Cibot" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      </div>
    </div>
  </div>
  </section>
  {{--@include('partialsFront.latestWorksSlide')--}}
</x-public-view>