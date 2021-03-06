
{{-- JS LIBS / JQUERY --}}
{!! Html::script('vendor/jquery/jquery.min.js', ['defer' => 'defer']) !!}
{!! Html::script('vendor/bootstrap/js/bootstrap.min.js', ['defer' => 'defer']) !!}
{!! Html::script('vendor/owl-carousel/dist/owl.carousel.min.js', ['defer' => 'defer']) !!}
{!! Html::script('vendor/mixitup/all.min.js', ['defer' => 'defer']) !!}

{{-- {!! Html::script('js/libs/jquery.easing.min.js', ['defer' => 'defer']) !!} --}}
{{-- {!! Html::script('js/libs/owl.carousel.min.js', ['defer' => 'defer']) !!} --}}
{{-- {!! Html::script('js/libs/appear.js', ['defer' => 'defer']) !!} --}}
{{-- {!! Html::script('js/libs/wow.js', ['defer' => 'defer']) !!} --}}

{{-- JS LIBS / LIGHTGALLERY --}}
{{-- {!! Html::script('js/libs/picturefill.min.js', ['defer' => 'defer']) !!}
{!! Html::script('js/libs/lightgallery.min.js', ['defer' => 'defer']) !!}
{!! Html::script('js/libs/lg-thumbnail.min.js', ['defer' => 'defer']) !!}
{!! Html::script('js/libs/lg-fullscreen.min.js', ['defer' => 'defer']) !!}
{!! Html::script('js/libs/jquery.mousewheel.min.js', ['defer' => 'defer']) !!} --}}

{{-- JS CUSTOM --}}
{!! Html::script('js/site/main.js', ['defer' => 'defer']) !!}
@yield('js-custom')
