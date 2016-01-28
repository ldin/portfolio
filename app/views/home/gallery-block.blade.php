
@section('header')
    @parent
    {{ HTML::style('/css/gallery.css') }}

    <!-- Add fancyBox -->
    <link rel="stylesheet" href="/module/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />

    <style type="text/css">
    /*.fancybox-title-outside-wrap{background-color: rgba(0,0,0,0.5); padding: 10px;}*/
    .fancybox-overlay{background: #ffffff}
    </style>
@stop



    
      <!-- Контейнер с адаптиными блоками -->
      <div class="masonry">
          <!-- Адаптивные блоки с содержанием -->

          @foreach($galleries as $image)
            <div class="item">
              <a class="fancybox" rel="gallery" href="/{{ $image->image }}" title="{{ $image->text }}">
                {{ HTML::image($image->small_image, $image->alt) }}
              </a>
              <br>
              {{ $image->text }}
            </div>
          @endforeach

          <!-- Конец адаптивных блоков с содержанием -->
       
      </div>
      <!-- Конец контейнера с адаптивными блоками -->



@section('scripts')
    @parent

  <!-- Add mousewheel plugin (this is optional) -->
  <script type="text/javascript" src="/module/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

  <!-- Add fancyBox -->
  <script type="text/javascript" src="/module/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

  <script type="text/javascript">

    $(document).ready(function() {
      $(".fancybox").fancybox({
          padding : 0,
          fitToView: false,
          helpers : {
            title : {
              type: 'outside'
            },
            thumbs  : {
              width : 50,
              height  : 50
            }
          }
      });
    });

  </script>



@stop
