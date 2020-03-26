
/**
 * Seta um padrao para os retornos do validate
 *
 */
$.validator.setDefaults(
{
    errorElement: 'span',
    errorClass: 'help-block',

    highlight: function(element)
    {
        $(element).closest('.form-group').addClass('has-error').removeClass('has-success');
    },
    unhighlight: function(element)
    {
        $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
    },
    errorPlacement: function(error, element)
    {
        if (element.prop('type') === 'checkbox' || element.prop('type') === 'radio' || element.prop('type') === 'file' || element.prop('type') === 'select-one') {
            error.insertAfter(element.parent());
        } else {
            error.insertAfter(element);
        }
    }
});

/**
 * Seta um padrao para todas as mensagens de erro
 *
 */
$.extend($.validator, {
    messages: {
        accept: '<i class="fa fa-times fa-fw"></i> O arquivo enviado deve ser uma imagem!',
        required: '<i class="fa fa-times fa-fw"></i> Campo obrigatório',
        remote: '<i class="fa fa-times fa-fw"></i> Este dado já está cadastrado',
        email: '<i class="fa fa-times fa-fw"></i> Este não é um e-mail válido',
        url: '<i class="fa fa-times fa-fw"></i> Digite uma url válida',
        date: '<i class="fa fa-times fa-fw"></i> Digite uma data válida',
        dateISO: '<i class="fa fa-times fa-fw"></i> Digite uma url válida (ISO)',
        number: '<i class="fa fa-times fa-fw"></i> Digite um número válido',
        digits: '<i class="fa fa-times fa-fw"></i> Só é permitido números',
        creditcard: '<i class="fa fa-times fa-fw"></i> Digite um número de cartão de créditos válido',
        equalTo: '<i class="fa fa-times fa-fw"></i> Deve ser igual ao campo anterior',
        maxlength: $.validator.format('<i class="fa fa-times fa-fw"></i> Máximo de {0} caracteres'),
        minlength: $.validator.format('<i class="fa fa-times fa-fw"></i> Mínimo de {0} caracteres'),
        rangelength: $.validator.format('<i class="fa fa-times fa-fw"></i> Digite um valor entre {0} e {1} caracteres'),
        range: $.validator.format('<i class="fa fa-times fa-fw"></i> Digite um valor entre {0} e {1} caracteres'),
        max: $.validator.format('<i class="fa fa-times fa-fw"></i> Insira um valor menor ou igual a {0}'),
        min: $.validator.format('<i class="fa fa-times fa-fw"></i> Insira um valor maior ou igual a {0}'),
        step: $.validator.format('<i class="fa fa-times fa-fw"></i> Digite um múltiplo de {0}.')
    }
});


$(document).ready(function()
{
	/**
	 * Bloqueia numeros
	 */
	jQuery.validator.addMethod("lettersOnly", function(value, element) {
        return this.optional(element) || /^[a-zâêôãõáéíóúà ]+$/i.test(value);
        //return this.optional(element) || /^[a-zA-Z]+$/i.test(value);
    }, '<i class="fa fa-times fa-fw"></i> &Eacute; permitido digitar somente letras.');

	/**
	 * Bloqueia letras
	 */
    jQuery.validator.addMethod("numbersOnly", function (value, element) {
        return this.optional(element) || /^[0-9]+$/i.test(value);
    }, '<i class="fa fa-times fa-fw"></i> &Eacute; permitido digitar somente n&uacute;meros.');

	/**
	 * Somente telefone
	 */
    jQuery.validator.addMethod("phoneOnly", function (value, element) {
        return this.optional(element) || /(\([1-9][0-9]\)?|[1-9][0-9])\s?([9]{1})?([0-9]{4})-?([0-9]{4})/i.test(value);
    }, '<i class="fa fa-times fa-fw"></i> Este n&uacute;mero de telefone n&atilde;o &eacute; v&aacute;lido.');

	/**
	 * Bloqueia letras
	 */
    jQuery.validator.addMethod("decimalOnly", function (value, element) {
        return this.optional(element) || /^\d+,\d{2}$/i.test(value);
    }, '<i class="fa fa-times fa-fw"></i> &Eacute; permitido digitar somente n&uacute;meros decimais.');

	/**
	 * Somente url
	 */
	jQuery.validator.addMethod("urlOnly", function(value, element) {
		return this.optional(element) || /^[a-zA-Z0-9!@#$%^&*)(]+$/i.test(value);
    }, '<i class="fa fa-times fa-fw"></i> Digite um link v&aacute;lido.');

    /**
	 * Somente email
	 */
	jQuery.validator.addMethod("emailOnly", function(value, element) {
		return this.optional(element) || /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test(value);
    }, '<i class="fa fa-times fa-fw"></i> Digite um e-mail v&aacute;lido.');

    /**
	 * Somente datas validas
	 */
    jQuery.validator.addMethod("date", function(value, element) {
        return this.optional(element) || /^(((((0[1-9])|(1\d)|(2[0-8]))\/((0[1-9])|(1[0-2])))|((31\/((0[13578])|(1[02])))|((29|30)\/((0[1,3-9])|(1[0-2])))))\/((20[0-9][0-9])|(19[0-9][0-9])))|((29\/02\/(19|20)(([02468][048])|([13579][26]))))$/.test(value);
    }, '<i class="fa fa-times fa-fw"></i> Digite uma data v&aacute;lido.');

    /**
	 * Valida os campos de CPF
	 */
	jQuery.validator.addMethod('cpfOnly',

        function (value, element)
        {
			value = jQuery.trim(value);
			value = value.replace('.', '');
			value = value.replace('.', '');
			cpf   = value.replace('-', '');

			while (cpf.length < 11) {
				cpf = "0" + cpf;
			}

			var expReg = /^0+$|^1+$|^2+$|^3+$|^4+$|^5+$|^6+$|^7+$|^8+$|^9+$/;
			var a = [];
			var b = new Number;
			var c = 11;

			for (i = 0; i < 11; i++) {

				a[i] = cpf.charAt(i);

				if (i < 9) {
					b += (a[i] * --c);
				}
			}

			if ((x = b % 11) < 2) {
				a[9] = 0;
			} else {
				a[9] = 11 - x;
			}

			b = 0;
			c = 11;

			for (y = 0; y < 10; y++) {
				b += (a[y] * c--);
			}

			if ((x = b % 11) < 2) {
				a[10] = 0;
			} else {
				a[10] = 11 - x;
			}

			if ((cpf.charAt(9) != a[9]) || (cpf.charAt(10) != a[10]) || cpf.match(expReg)) {
				return this.optional(element) || false;
			}

			return this.optional(element) || true;

		},
		'<i class="fa fa-times fa-fw"></i> Informe um CPF v&aacute;lido'
	);

	/**
	 * Valida os campos de CNPJ
	 */
	jQuery.validator.addMethod('cnpjOnly',

        function (cnpj, element)
        {
			cnpj = jQuery.trim(cnpj);

			// DEIXA APENAS OS NÚMEROS
			cnpj = cnpj.replace('/', '');
			cnpj = cnpj.replace('.', '');
			cnpj = cnpj.replace('.', '');
			cnpj = cnpj.replace('-', '');

			var numeros, digitos, soma, i, resultado, pos, tamanho, digitos_iguais;

			digitos_iguais = 1;

			if (cnpj.length < 14 && cnpj.length < 15) {
				return this.optional(element) || false;
			}
			for (i = 0; i < cnpj.length - 1; i++) {
				if (cnpj.charAt(i) != cnpj.charAt(i + 1)) {
					digitos_iguais = 0;
					break;
				}
			}

			if (!digitos_iguais) {
				tamanho = cnpj.length - 2
				numeros = cnpj.substring(0, tamanho);
				digitos = cnpj.substring(tamanho);
				soma = 0;
				pos = tamanho - 7;

				for (i = tamanho; i >= 1; i--) {
					soma += numeros.charAt(tamanho - i) * pos--;
					if (pos < 2) {
						pos = 9;
					}
				}
				resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
				if (resultado != digitos.charAt(0)) {
					return this.optional(element) || false;
				}
				tamanho = tamanho + 1;
				numeros = cnpj.substring(0, tamanho);
				soma = 0;
				pos = tamanho - 7;
				for (i = tamanho; i >= 1; i--) {
					soma += numeros.charAt(tamanho - i) * pos--;
					if (pos < 2) {
						pos = 9;
					}
				}
				resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;

				if (resultado != digitos.charAt(1)) {
					return this.optional(element) || false;
				}

				return this.optional(element) || true;

			} else {

				return this.optional(element) || false;
			}

		},
		'<i class="fa fa-times fa-fw"></i> Informe um CNPJ v&aacute;lido'
	);
});
