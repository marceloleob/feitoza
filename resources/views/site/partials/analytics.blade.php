
@if (App::environment('production'))

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id={!! config('constants.GOOGLE_ANALYTICS_ID') !!}"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', "{!! config('constants.GOOGLE_ANALYTICS_ID') !!}");
</script>

@endif
