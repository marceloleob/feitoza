(function($) {

    // validacao do formulario de contato
	if ($('#form-contact').length) {
		// validation
		$('#form-contact').validate({
			rules: {
				firstname: {
					required: true,
					minlength: 2,
					maxlength: 100,
				},
				lastname: {
					required: true,
					minlength: 2,
					maxlength: 100,
				},
				email: {
					required: true,
					minlength: 3,
					maxlength: 100,
					email: true,
				},
				phone: {
					required: true,
					minlength: 14,
					maxlength: 15,
				},
				subject: {
					required: true,
					minlength: 2,
					maxlength: 100,
				},
				text: {
					required: true,
					minlength: 5,
					maxlength: 2000,
				}
			}
		});
    }

})(window.jQuery);
