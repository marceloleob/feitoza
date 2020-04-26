
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
		accept: '<i class="jam jam-close-circle-f"></i> The uploaded file must be an image!',
		required: '<i class="jam jam-close-circle-f"></i> This field is required',
		remote: '<i class="jam jam-close-circle-f"></i> This data is already registered.',
		email: '<i class="jam jam-close-circle-f"></i> The email must be in the format: "email@example.com".',
		url: '<i class="jam jam-close-circle-f"></i> Please enter a valid url.',
		date: '<i class="jam jam-close-circle-f"></i> Please enter a valid date.',
		dateISO: '<i class="jam jam-close-circle-f"></i> Please enter a valid url (ISO).',
		number: '<i class="jam jam-close-circle-f"></i> Please enter a valid number.',
		digits: '<i class="jam jam-close-circle-f"></i> Only numbers allowed.',
		creditcard: '<i class="jam jam-close-circle-f"></i> Please enter a valid credit card number.',
		equalTo: '<i class="jam jam-close-circle-f"></i> Should be equal to the previous field.',
		maxlength: $.validator.format('<i class="jam jam-close-circle-f"></i> Maximum {0} characters.'),
		minlength: $.validator.format('<i class="jam jam-close-circle-f"></i> Minimum de {0} characters.'),
		rangelength: $.validator.format('<i class="jam jam-close-circle-f"></i> Please enter a value between {0} and {1} characters.'),
		range: $.validator.format('<i class="jam jam-close-circle-f"></i> Please enter a value between {0} and {1} characters.'),
		max: $.validator.format('<i class="jam jam-close-circle-f"></i> Please enter a value less than or equal to {0}.'),
        min: $.validator.format('<i class="jam jam-close-circle-f"></i> Please enter a value greater than or equal to {0}.'),
        step: $.validator.format('<i class="jam jam-close-circle-f"></i> Please enter a multiple of {0}.')
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
    }, '<i class="jam jam-close-circle-f"></i> Only letters can be entered.');

	/**
	 * Bloqueia letras
	 */
    jQuery.validator.addMethod("numbersOnly", function (value, element) {
        return this.optional(element) || /^[0-9)()]+$/i.test(value);
    }, '<i class="jam jam-close-circle-f"></i> Only numbers can be entered.');

	/**
	 * Somente telefone (US)
	 */
    jQuery.validator.addMethod("phoneOnly", function (value, element) {
        return this.optional(element) || /^(\([0-9]{3}\) |[0-9]{3}-)[0-9]{3}-[0-9]{4}$/i.test(value);
    }, '<i class="jam jam-close-circle-f"></i> Only phone number can be entered.');

	/**
	 * Bloqueia letras
	 */
    jQuery.validator.addMethod("decimalOnly", function (value, element) {
        return this.optional(element) || /^\d+,\d{2}$/i.test(value);
    }, '<i class="jam jam-close-circle-f"></i> Only decimal numbers can be entered.');

	/**
	 * Somente url
	 */
	jQuery.validator.addMethod("urlOnly", function(value, element) {
		return this.optional(element) || /^[a-zA-Z0-9!@#$%^&*)(]+$/i.test(value);
    }, '<i class="jam jam-close-circle-f"></i> Please enter a valid url.');

    /**
	 * Somente email
	 */
	jQuery.validator.addMethod("emailOnly", function(value, element) {
		//return this.optional(element) || /[a-z]+@[a-z]+\.[a-z]+/.test(value);
		return this.optional(element) || /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test(value);
    }, '<i class="jam jam-close-circle-f"></i> Please enter a valid e-mail.');
});
