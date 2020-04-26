<?php

return [

	/*
    |--------------------------------------------------------------------------
    | Validation - Translate (PT-BR)
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

	'errors'               => 'Erros encontrados:',
	'google'               => 'O Google acredita que você seja um robô!',

    'accepted'             => 'O campo <strong>:attribute</strong> deve ser aceito.',
    'active_url'           => 'O campo <strong>:attribute</strong> deve conter uma URL válida.',
    'after'                => 'O campo <strong>:attribute</strong> deve conter uma data posterior a :date.',
    'after_or_equal'       => 'O campo <strong>:attribute</strong> deve conter uma data superior ou igual a :date.',
    'alpha'                => 'O campo <strong>:attribute</strong> deve conter apenas letras.',
    'alpha_dash'           => 'O campo <strong>:attribute</strong> deve conter apenas letras, números e traços.',
    'alpha_num'            => 'O campo <strong>:attribute</strong> deve conter apenas letras e números .',
    'array'                => 'O campo <strong>:attribute</strong> deve conter ao menos um campo selecionado.',
    'before'               => 'O campo <strong>:attribute</strong> deve conter uma data anterior a :date.',
    'before_or_equal'      => 'O campo <strong>:attribute</strong> deve conter uma data inferior ou igual a :date.',
    'between'              => [
        'numeric' => 'O campo <strong>:attribute</strong> deve conter um número entre <strong>:min</strong> e <strong>:max</strong>.',
        'file'     => 'O campo <strong>:attribute</strong> deve conter um arquivo de <strong>:min</strong> a <strong>:max</strong> kilobytes.',
        'string'  => 'O campo <strong>:attribute</strong> deve conter entre <strong>:min</strong> a <strong>:max</strong> caracteres.',
        'array'   => 'O campo <strong>:attribute</strong> deve conter de <strong>:min</strong> a <strong>:max</strong> itens.',
    ],
    'boolean'              => 'O campo <strong>:attribute</strong> deve conter o valor verdadeiro ou falso.',
    'confirmed'             => 'A confirmação para o campo <strong>:attribute</strong> não coincide.',
    'date'                 => 'O campo <strong>:attribute</strong> não contém uma data válida.',
    'date_equals'          => 'O campo <strong>:attribute</strong> deve ser uma data igual a :date.',
    'date_format'          => 'A data informada para o campo <strong>:attribute</strong> não respeita o formato :format.',
    'different'            => 'Os campos <strong>:attribute</strong> e <strong>:other</strong> devem conter valores diferentes.',
    'digits'               => 'O campo <strong>:attribute</strong> deve conter <strong>:digits</strong> dígitos.',
    'digits_between'       => 'O campo <strong>:attribute</strong> deve conter entre <strong>:min</strong> a <strong>:max</strong> dígitos.',
    'dimensions'           => 'O valor informado para o campo <strong>:attribute</strong> não é uma dimensão de imagem válida.',
    'distinct'             => 'O campo <strong>:attribute</strong> contém um valor duplicado.',
    'email'                => 'O campo <strong>:attribute</strong> não contém um endereço de email válido.',
    'ends_with'            => 'O campo <strong>:attribute</strong> deve terminar com um dos seguintes valores: :values',
    'exists'               => 'O valor selecionado para o campo <strong>:attribute</strong> é inválido.',
    'file'                  => 'O campo <strong>:attribute</strong> deve conter um arquivo.',
    'filled'                => 'O campo <strong>:attribute</strong> é obrigatório.',
    'gt'                   => [
        'numeric' => 'O campo <strong>:attribute</strong> deve ser maior que <strong>:value</strong>.',
        'file'     => 'O arquivo <strong>:attribute</strong> deve ser maior que <strong>:value</strong> kilobytes.',
        'string'  => 'O campo <strong>:attribute</strong> deve ser maior que <strong>:value</strong> caracteres.',
        'array'   => 'O campo <strong>:attribute</strong> deve ter mais que <strong>:value</strong> itens.',
    ],
    'gte'                  => [
        'numeric' => 'O campo <strong>:attribute</strong> deve ser maior ou igual a <strong>:value</strong>.',
        'file'     => 'O arquivo <strong>:attribute</strong> deve ser maior ou igual a <strong>:value</strong> kilobytes.',
        'string'  => 'O campo <strong>:attribute</strong> deve ser maior ou igual a <strong>:value</strong> caracteres.',
        'array'   => 'O campo <strong>:attribute</strong> deve ter <strong>:value</strong> itens ou mais.',
    ],
    'image'                => 'O campo <strong>:attribute</strong> deve conter uma imagem.',
    'in'                   => 'O campo <strong>:attribute</strong> não contém um valor válido.',
    'in_array'             => 'O campo <strong>:attribute</strong> não existe em <strong>:other</strong>.',
    'integer'              => 'O campo <strong>:attribute</strong> deve conter um número inteiro.',
    'ip'                   => 'O campo <strong>:attribute</strong> deve conter um IP válido.',
    'ipv4'                 => 'O campo <strong>:attribute</strong> deve conter um IPv4 válido.',
    'ipv6'                 => 'O campo <strong>:attribute</strong> deve conter um IPv6 válido.',
    'json'                 => 'O campo <strong>:attribute</strong> deve conter uma string JSON válida.',
    'lt'                   => [
        'numeric' => 'O campo <strong>:attribute</strong> deve ser menor que <strong>:value</strong>.',
        'file'     => 'O arquivo <strong>:attribute</strong> ser menor que <strong>:value</strong> kilobytes.',
        'string'  => 'O campo <strong>:attribute</strong> deve ser menor que <strong>:value</strong> caracteres.',
        'array'   => 'O campo <strong>:attribute</strong> deve ter menos que <strong>:value</strong> itens.',
    ],
    'lte'                  => [
        'numeric' => 'O campo <strong>:attribute</strong> deve ser menor ou igual a <strong>:value</strong>.',
        'file'     => 'O arquivo <strong>:attribute</strong> ser menor ou igual a <strong>:value</strong> kilobytes.',
        'string'  => 'O campo <strong>:attribute</strong> deve ser menor ou igual a <strong>:value</strong> caracteres.',
        'array'   => 'O campo <strong>:attribute</strong> não deve ter mais que <strong>:value</strong> itens.',
    ],
    'max'                  => [
        'numeric' => 'O campo <strong>:attribute</strong> não pode conter um valor superior a <strong>:max</strong>.',
        'file'     => 'O campo <strong>:attribute</strong> não pode conter um arquivo com mais de <strong>:max</strong> kilobytes.',
        'string'  => 'O campo <strong>:attribute</strong> não pode conter mais de <strong>:max</strong> caracteres.',
        'array'   => 'O campo <strong>:attribute</strong> deve conter no máximo <strong>:max</strong> itens.',
    ],
    'mimes'                => 'O campo <strong>:attribute</strong> deve conter um arquivo do tipo: <strong>:values</strong>.',
    'mimetypes'            => 'O campo <strong>:attribute</strong> deve conter um arquivo do tipo: <strong>:values</strong>.',
    'min'                  => [
        'numeric' => 'O campo <strong>:attribute</strong> deve conter um número superior ou igual a <strong>:min</strong>.',
        'file'     => 'O campo <strong>:attribute</strong> deve conter um arquivo com no mínimo <strong>:min</strong> kilobytes.',
        'string'  => 'O campo <strong>:attribute</strong> deve conter no mínimo <strong>:min</strong> caracteres.',
        'array'   => 'O campo <strong>:attribute</strong> deve conter no mínimo <strong>:min</strong> itens.',
    ],
    'not_in'               => 'O campo <strong>:attribute</strong> contém um valor inválido.',
    'not_regex'            => 'O formato do valor <strong>:attribute</strong> é inválido.',
    'numeric'              => 'O campo <strong>:attribute</strong> deve conter um valor numérico.',
    'present'              => 'O campo <strong>:attribute</strong> deve estar presente.',
    'regex'                => 'O formato do valor informado no campo <strong>:attribute</strong> é inválido.',
    'required'             => 'O campo <strong>:attribute</strong> é obrigatório.',
    'required_if'          => 'O campo <strong>:attribute</strong> é obrigatório quando o valor do campo <strong>:other</strong> é igual a <strong>:value</strong>.',
    'required_unless'      => 'O campo <strong>:attribute</strong> é obrigatório a menos que <strong>:other</strong> esteja presente em <strong>:values</strong>.',
    'required_with'        => 'O campo <strong>:attribute</strong> é obrigatório quando <strong>:values</strong> está presente.',
    'required_with_all'    => 'O campo <strong>:attribute</strong> é obrigatório quando um dos <strong>:values</strong> está presente.',
    'required_without'     => 'O campo <strong>:attribute</strong> é obrigatório quando <strong>:values</strong> não está presente.',
    'required_without_all' => 'O campo <strong>:attribute</strong> é obrigatório quando nenhum dos <strong>:values</strong> está presente.',
    'same'                 => 'Os campos <strong>:attribute</strong> e <strong>:other</strong> devem conter valores iguais.',
    'size'                 => [
        'numeric' => 'O campo <strong>:attribute</strong> deve conter o número <strong>:size</strong>.',
        'file'     => 'O campo <strong>:attribute</strong> deve conter um arquivo com o tamanho de <strong>:size</strong> kilobytes.',
        'string'  => 'O campo <strong>:attribute</strong> deve conter <strong>:size</strong> caracteres.',
        'array'   => 'O campo <strong>:attribute</strong> deve conter <strong>:size</strong> itens.',
    ],
    'starts_with'          => 'O campo <strong>:attribute</strong> deve começar com um dos seguintes valores: <strong>:values</strong>',
    'string'               => 'O campo <strong>:attribute</strong> deve ser uma string.',
    'timezone'             => 'O campo <strong>:attribute</strong> deve conter um fuso horário válido.',
    'unique'               => 'Este <strong>:attribute</strong> já está em uso.',
    'uploaded'             => 'Falha no Upload do arquivo <strong>:attribute</strong>.',
    'url'                  => 'O formato da URL informada para o campo <strong>:attribute</strong> é inválido.',
    'uuid'                 => 'O campo <strong>:attribute</strong> deve ser um UUID válido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name'  => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        // DEFAULT
        'id'                    => 'código',
        'user_id'               => 'código do usuário',
        'status'                => 'situação',
        // LOGIN
        'username'              => 'usuário',
        'email'                 => 'e-mail',
        'password'              => 'senha',
        'password_confirmation'  => 'confirmação da senha',
        'remember'              => 'lembrar-se de mim',
        // USER / CLIENT
        'name'                  => 'nome',
        'cpf'                   => 'CPF',
        'born'                  => 'data de nascimento',
        'age'                   => 'idade',
        'phone'                 => 'telefone',
        'mobile'                => 'celular',
        'first_name'             => 'primeiro nome',
        'firstname'              => 'primeiro nome',
        'last_name'             => 'sobrenome',
        'lastname'              => 'sobrenome',
        'gender'                => 'gênero',
        'sex'                   => 'sexo',
        // DATE
        'date'                  => 'data',
        'day'                   => 'dia',
        'month'                 => 'mês',
        'year'                  => 'ano',
        'hour'                  => 'hora',
        'minute'                => 'minuto',
        'second'                => 'segundo',
        'time'                  => 'hora',
        // CONTACT
        'title'                 => 'título',
        'subject'               => 'assunto',
        'text'                  => 'texto',
        'message'               => 'mensagem',
        'description'           => 'descrição',
        // ADDRESS
        'address'               => 'endereço',
        'number'                => 'número',
        'comp'                  => 'complemento',
        'neighborhood'          => 'bairro',
        'city'                  => 'cidade',
        'city_id'               => 'cidade',
        'state'                 => 'estado',
        'state_id'              => 'estado',
        'country'               => 'país',
        'country_id'            => 'país',
        'zipcode'               => 'cep',
        // OTHERS
        'body'                  => 'conteúdo',
        'excerpt'               => 'resumo',

        // CUSTOM THIS SITE

    ],
];
