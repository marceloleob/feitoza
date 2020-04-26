
grecaptcha.ready(function()
{
    var site_key = document.getElementById('site_key').value;

    grecaptcha.execute(site_key, {action: 'contact'}).then(function(token)
    {
        if (token) {
            document.getElementById('recaptcha').value = token;
        }
    });
});

