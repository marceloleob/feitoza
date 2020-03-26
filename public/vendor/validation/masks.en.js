$(document).ready(function()
{
	// binda o campo decimal
	$(document).on('focus', '.decimal', function(e) {
		// adiciona mascara
		$('.decimal').maskMoney(
		{
            allowNegative: false,
            thousands: ',',
            decimal: '.',
            affixesStay: true
		});
    });

	// binda o campo de moeda
	$(document).on('focus', '.money', function(e) {
		// adiciona mascara
		$('.money').maskMoney(
        {
            prefix: '$ ',
            allowNegative: false,
            thousands: ',',
            decimal: '.',
            affixesStay: true
        });
    });

	// binda o campo de data
	$(document).on('focus', '.date', function(e) {
		// adiciona mascara
		$('.date').mask("99/99/9999");
	});

	// binda o campo de ssn
	$(document).on('focus', '.ssn', function(e) {
		// adiciona mascara
		$('.ssn').mask("999-99-9999");
	});

	// binda o campo de cnpj
	$(document).on('focus', '.cnpj', function(e) {
		// adiciona mascara
		$('.cnpj').mask("99.999.999/9999-99");
	});

    // binda o campo de zip
	$(document).on('focus', '.zip', function(e) {
		// adiciona mascara
		$('.zip').mask("99999-999");
	});

	// binda o campo de phone
	$(document).on('focus', '.phone', function(e) {
		// adiciona mascara
		$('.phone').mask("(999) 999-9999")
	});
});
