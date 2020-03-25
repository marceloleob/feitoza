
{{-- JS LIBS / JQUERY --}}
{!! Html::script('vendor/jquery/jquery.min.js', ['defer' => 'defer']) !!}
{!! Html::script('vendor/bootstrap/js/bootstrap.min.js', ['defer' => 'defer']) !!}
{!! Html::script('vendor/metismenu/metisMenu.min.js', ['defer' => 'defer']) !!}


{{-- JS CUSTOM --}}
{!! Html::script('js/admin/main.js', ['defer' => 'defer']) !!}

@yield('js-custom')
