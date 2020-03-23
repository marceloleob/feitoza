<!DOCTYPE html>
<html>

@include('auth.partials.head')

<body class="hold-transition login-page">

    @yield('body')

    {!! Html::script('vendor/jquery/jquery.min.js', ['defer' => 'defer']) !!}
    {!! Html::script('vendor/bootstrap/js/bootstrap.min.js', ['defer' => 'defer']) !!}

    @yield('js-custom')
</body>
</html>
