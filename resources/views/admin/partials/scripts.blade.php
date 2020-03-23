
{{-- JS LIBS / JQUERY --}}
{!! Html::script('vendor/jquery/jquery.min.js', ['defer' => 'defer']) !!}
{!! Html::script('vendor/bootstrap/js/bootstrap.bundle.min.js', ['defer' => 'defer']) !!}
{!! Html::script('vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js', ['defer' => 'defer']) !!}
{!! Html::script('vendor/adminlte/dist/js/adminlte.min.js') !!}

{{-- JS CUSTOM --}}
{!! Html::script('js/admin/main.js', ['defer' => 'defer']) !!}
@yield('js-custom')
