(function($) {

    /**
	 * Validacao da pagina de CONTATOS
	 */
	if ($('#form-contact').length) {
		// validation
		$('#form-contact').validate({
			rules: {
				name: {
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

    /**
	 * Validacao da pagina de LOGIN
	 */
	if ($('#form-login').length) {
		// validation
		$('#form-login').validate({
			rules: {
				email: {
					required: true,
					minlength: 3,
					maxlength: 100,
					email: true,
				},
				password: {
					required: true,
					minlength: 6,
					maxlength: 30,
				},
			}
		});
    }

    /**
	 * Validacao da pagina de ENVIAR TOKEN
	 */
	if ($('#form-password-email').length) {
		// validation
		$('#form-password-email').validate({
			rules: {
				email: {
					required: true,
					minlength: 3,
					maxlength: 100,
					email: true,
				},
			}
		});
    }

    /**
	 * Validacao da pagina de RESETAR SENHA
	 */
	if ($('#form-password-reset').length) {
		// validation
		$('#form-password-reset').validate({
			rules: {
				email: {
					required: true,
					minlength: 3,
					maxlength: 100,
					email: true,
				},
				password: {
					required: true,
					minlength: 6,
					maxlength: 30,
				},
				password_confirm: {
					required: true,
					minlength: 6,
					maxlength: 30,
					equalTo: "#password",
				},
			}
		});
    }


})(window.jQuery);
