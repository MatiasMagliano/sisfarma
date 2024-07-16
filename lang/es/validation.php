<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | El campo following language lines contain El campo default error messages used by
    | El campo validator class. Some of these rules have multiple versions such
    | as El campo size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'El campo :attribute debe ser aceptado.',
    'accepted_if' => 'El campo :attribute debe ser aceptado cuyo :other es :value.',
    'active_url' => 'El campo :attribute debe ser una URL válida.',
    'after' => 'El campo :attribute debe ser una fecha posterior a :date.',
    'after_or_equal' => 'El campo :attribute debe ser a date after or equal to :date.',
    'alpha' => 'El campo :attribute debe sólo contener letras.',
    'alpha_dash' => 'El campo :attribute debe sólo contener letras, números, guines y guiones bajos.',
    'alpha_num' => 'El campo :attribute debe sólo contener letras y números.',
    'array' => 'El campo :attribute debe ser un arreglo.',
    'ascii' => 'El campo :attribute debe sólo contener un sólo caracter alfanumérico o símbolos.',
    'before' => 'El campo :attribute debe ser una fecha anterior a :date.',
    'before_or_equal' => 'El campo :attribute debe ser una fecha anterior o igual a :date.',
    'between' => [
        'array' => 'El campo :attribute debe tener entre :min y :max items.',
        'file' => 'El campo :attribute debe ser entre :min y :max kilobytes.',
        'numeric' => 'El campo :attribute debe ser entre :min y :max.',
        'string' => 'El campo :attribute debe tener entre :min y :max caracteres.',
    ],
    'boolean' => 'El campo :attribute debe ser verdadero o falso.',
    'can' => 'El campo :attribute contiene un valor no permitido.',
    'confirmed' => 'El campo :attribute no coincide.',
    'current_password' => 'La contraseña es incorrecta.',
    'date' => 'El campo :attribute debe ser una fecha válida.',
    'date_equals' => 'El campo :attribute debe ser una fecha igual a :date.',
    'date_format' => 'El campo :attribute debe debe coincidir con el formato :format.',
    'decimal' => 'El campo :attribute debe have :decimal decimal places.',
    'declined' => 'El campo :attribute debe ser declined.',
    'declined_if' => 'El campo :attribute debe ser declined when :other is :value.',
    'different' => 'El campo :attribute y :other must be different.',
    'digits' => 'El campo :attribute debe ser :digits digits.',
    'digits_between' => 'El campo :attribute debe ser between :min y :max digits.',
    'dimensions' => 'El campo :attribute has invalid image dimensions.',
    'distinct' => 'El campo :attribute has a duplicate value.',
    'doesnt_end_with' => 'El campo :attribute debe not end with one of El campo following: :values.',
    'doesnt_start_with' => 'El campo :attribute debe not start with one of El campo following: :values.',
    'email' => 'El campo :attribute debe ser a valid email address.',
    'ends_with' => 'El campo :attribute debe end with one of El campo following: :values.',
    'enum' => 'El campo selected :attribute is invalid.',
    'exists' => 'El campo selected :attribute is invalid.',
    'extensions' => 'El campo :attribute debe have one of El campo following extensions: :values.',
    'file' => 'El campo :attribute debe ser a file.',
    'filled' => 'El campo :attribute debe have a value.',
    'gt' => [
        'array' => 'El campo :attribute debe have more than :value items.',
        'file' => 'El campo :attribute debe ser greater than :value kilobytes.',
        'numeric' => 'El campo :attribute debe ser greater than :value.',
        'string' => 'El campo :attribute debe ser greater than :value characters.',
    ],
    'gte' => [
        'array' => 'El campo :attribute debe have :value items or more.',
        'file' => 'El campo :attribute debe ser greater than or equal to :value kilobytes.',
        'numeric' => 'El campo :attribute debe ser greater than or equal to :value.',
        'string' => 'El campo :attribute debe ser greater than or equal to :value characters.',
    ],
    'hex_color' => 'El campo :attribute debe ser a valid hexadecimal color.',
    'image' => 'El campo :attribute debe ser an image.',
    'in' => 'El campo selected :attribute is invalid.',
    'in_array' => 'El campo :attribute debe exist in :other.',
    'integer' => 'El campo :attribute debe ser an integer.',
    'ip' => 'El campo :attribute debe ser a valid IP address.',
    'ipv4' => 'El campo :attribute debe ser a valid IPv4 address.',
    'ipv6' => 'El campo :attribute debe ser a valid IPv6 address.',
    'json' => 'El campo :attribute debe ser a valid JSON string.',
    'lowercase' => 'El campo :attribute debe ser lowercase.',
    'lt' => [
        'array' => 'El campo :attribute debe have less than :value items.',
        'file' => 'El campo :attribute debe ser less than :value kilobytes.',
        'numeric' => 'El campo :attribute debe ser less than :value.',
        'string' => 'El campo :attribute debe ser less than :value characters.',
    ],
    'lte' => [
        'array' => 'El campo :attribute debe not have more than :value items.',
        'file' => 'El campo :attribute debe ser less than or equal to :value kilobytes.',
        'numeric' => 'El campo :attribute debe ser less than or equal to :value.',
        'string' => 'El campo :attribute debe ser less than or equal to :value characters.',
    ],
    'mac_address' => 'El campo :attribute debe ser a valid MAC address.',
    'max' => [
        'array' => 'El campo :attribute debe not have more than :max items.',
        'file' => 'El campo :attribute debe not be greater than :max kilobytes.',
        'numeric' => 'El campo :attribute debe not be greater than :max.',
        'string' => 'El campo :attribute debe not be greater than :max characters.',
    ],
    'max_digits' => 'El campo :attribute debe not have more than :max digits.',
    'mimes' => 'El campo :attribute debe ser a file of type: :values.',
    'mimetypes' => 'El campo :attribute debe ser a file of type: :values.',
    'min' => [
        'array' => 'El campo :attribute debe have at least :min items.',
        'file' => 'El campo :attribute debe ser at least :min kilobytes.',
        'numeric' => 'El campo :attribute debe ser at least :min.',
        'string' => 'El campo :attribute debe ser at least :min characters.',
    ],
    'min_digits' => 'El campo :attribute debe have at least :min digits.',
    'missing' => 'El campo :attribute debe ser missing.',
    'missing_if' => 'El campo :attribute debe ser missing when :other is :value.',
    'missing_unless' => 'El campo :attribute debe ser missing unless :other is :value.',
    'missing_with' => 'El campo :attribute debe ser missing when :values is present.',
    'missing_with_all' => 'El campo :attribute debe ser missing when :values are present.',
    'multiple_of' => 'El campo :attribute debe ser a multiple of :value.',
    'not_in' => 'El campo selected :attribute is invalid.',
    'not_regex' => 'El campo :attribute format is invalid.',
    'numeric' => 'El campo :attribute debe ser a number.',
    'password' => [
        'letras' => 'El campo :attribute debe contain at least one letter.',
        'mixed' => 'El campo :attribute debe contain at least one uppercase y one lowercase letter.',
        'números' => 'El campo :attribute debe contain at least one number.',
        'symbols' => 'El campo :attribute debe contain at least one symbol.',
        'uncompromised' => 'El campo given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present' => 'El campo :attribute debe ser present.',
    'present_if' => 'El campo :attribute debe ser present when :other is :value.',
    'present_unless' => 'El campo :attribute debe ser present unless :other is :value.',
    'present_with' => 'El campo :attribute debe ser present when :values is present.',
    'present_with_all' => 'El campo :attribute debe ser present when :values are present.',
    'prohibited' => 'El campo :attribute is prohibited.',
    'prohibited_if' => 'El campo :attribute is prohibited when :other is :value.',
    'prohibited_unless' => 'El campo :attribute is prohibited unless :other is in :values.',
    'prohibits' => 'El campo :attribute prohibits :other from being present.',
    'regex' => 'El campo :attribute format is invalid.',
    'required' => 'El campo :attribute es obligatorio.',
    'required_array_keys' => 'El campo :attribute debe contain entries for: :values.',
    'required_if' => 'El campo :attribute es obligatorio when :other is :value.',
    'required_if_accepted' => 'El campo :attribute es obligatorio when :other is accepted.',
    'required_unless' => 'El campo :attribute es obligatorio unless :other is in :values.',
    'required_with' => 'El campo :attribute es obligatorio when :values is present.',
    'required_with_all' => 'El campo :attribute es obligatorio when :values are present.',
    'required_without' => 'El campo :attribute es obligatorio when :values is not present.',
    'required_without_all' => 'El campo :attribute es obligatorio when none of :values are present.',
    'same' => 'El campo :attribute debe match :other.',
    'size' => [
        'array' => 'El campo :attribute debe contain :size items.',
        'file' => 'El campo :attribute debe ser :size kilobytes.',
        'numeric' => 'El campo :attribute debe ser :size.',
        'string' => 'El campo :attribute debe ser :size characters.',
    ],
    'starts_with' => 'El campo :attribute debe start with one of El campo following: :values.',
    'string' => 'El campo :attribute debe ser a string.',
    'timezone' => 'El campo :attribute debe ser a valid timezone.',
    'unique' => 'El campo :attribute has already been taken.',
    'uploaded' => 'El campo :attribute failed to upload.',
    'uppercase' => 'El campo :attribute debe ser uppercase.',
    'url' => 'El campo :attribute debe ser a valid URL.',
    'ulid' => 'El campo :attribute debe ser a valid ULID.',
    'uuid' => 'El campo :attribute debe ser a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name El campo lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | El campo following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
