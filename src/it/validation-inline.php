<?php

return [
    'accepted'             => 'Deve essere accettato.',
    'active_url'           => 'Non è un URL valido.',
    'after'                => 'Deve essere una data successiva al :date.',
    'after_or_equal'       => 'Deve essere una data successiva o uguale al :date.',
    'alpha'                => 'Può contenere solo lettere.',
    'alpha_dash'           => 'Può contenere solo lettere, numeri e trattini.',
    'alpha_num'            => 'Può contenere solo lettere e numeri.',
    'array'                => 'Deve essere un array.',
    'attached'             => 'Campo già associato.',
    'before'               => 'Deve essere una data precedente al :date.',
    'before_or_equal'      => 'Deve essere una data precedente o uguale al :date.',
    'between'              => [
        'array'   => 'Deve contenere tra :min e :max elementi.',
        'file'    => 'Deve essere compreso tra :min e :max kilobytes.',
        'numeric' => 'Deve essere compreso tra :min e :max.',
        'string'  => 'Deve essere compreso tra :min e :max caratteri.',
    ],
    'boolean'              => 'Deve essere vero o falso.',
    'confirmed'            => 'Il valore di conferma non corrisponde.',
    'date'                 => 'Non è una data valida.',
    'date_equals'          => 'La data deve essere :date.',
    'date_format'          => 'La data non è nel formato :format.',
    'different'            => 'Deve essere diverso da :other.',
    'digits'               => 'Deve essere di :digits cifre.',
    'digits_between'       => 'Deve essere compreso tra :min e :max cifre.',
    'dimensions'           => 'Immagine con dimensioni non valide.',
    'distinct'             => 'Questo valore esiste già.',
    'email'                => 'Deve essere un indirizzo email valido.',
    'ends_with'            => 'Deve terminare con uno dei seguenti valori: :values.',
    'exists'               => 'Il valore non è valido.',
    'file'                 => 'Deve essere un file.',
    'filled'               => 'Deve contenere un valore.',
    'gt'                   => [
        'array'   => 'Deve contenere più di :value elementi.',
        'file'    => 'Deve essere maggiore di :value kilobytes.',
        'numeric' => 'Deve essere maggiore di :value.',
        'string'  => 'Deve contenere più di :value caratteri.',
    ],
    'gte'                  => [
        'array'   => 'Deve contenere almeno :value elementi.',
        'file'    => 'Deve essere maggiore o uguale a :value kilobytes.',
        'numeric' => 'Deve essere uguale o maggiore a :value.',
        'string'  => 'Deve contenere almeno :value caratteri.',
    ],
    'image'                => 'Deve essere un\'immagine.',
    'in'                   => 'Valore non valido.',
    'in_array'             => 'Non esiste in :other.',
    'integer'              => 'Deve essere un numero intero.',
    'ip'                   => 'Deve essere un indirizzo IP valido.',
    'ipv4'                 => 'Deve essere un indirizzo IPv4 valido.',
    'ipv6'                 => 'Deve essere un indirizzo IPv6 valido.',
    'json'                 => 'Deve essere una stringa JSON valida.',
    'lt'                   => [
        'array'   => 'Deve contenere meno di :value elementi.',
        'file'    => 'Deve essere inferiore a :value kilobytes.',
        'numeric' => 'Deve essere inferiore a :value.',
        'string'  => 'Deve contenere meno di :value caratteri.',
    ],
    'lte'                  => [
        'array'   => 'Deve contenere massimo :value elementi.',
        'file'    => 'Deve essere inferiore o uguale a :value kilobytes.',
        'numeric' => 'Deve essere inferiore o uguale a :value.',
        'string'  => 'Deve contenere massimo :value caratteri.',
    ],
    'max'                  => [
        'array'   => 'Non può contenere più di :max elementi.',
        'file'    => 'Non può essere superiore a :max kilobytes.',
        'numeric' => 'Non può essere superiore a :max.',
        'string'  => 'Non può contenere più di :max caratteri.',
    ],
    'mimes'                => 'Deve essere del tipo: :values.',
    'mimetypes'            => 'Deve essere del tipo: :values.',
    'min'                  => [
        'array'   => 'Deve contenere minimo :min elementi.',
        'file'    => 'Deve essere minimo :min kilobytes.',
        'numeric' => 'Deve essere minimo :min.',
        'string'  => 'Deve contenere minimo :min caratteri.',
    ],
    'multiple_of'          => 'Deve essere un multiplo di :value',
    'not_in'               => 'Valore non valido.',
    'not_regex'            => 'Formato non valido.',
    'numeric'              => 'Deve essere un numero.',
    'password'             => 'Password errata.',
    'present'              => 'Devi specificare un valore.',
    'prohibited'           => 'Non consentito.',
    'prohibited_if'        => 'Non consentito quando :other è :value.',
    'prohibited_unless'    => 'Non consentito a meno che :other sia contenuto in :values.',
    'regex'                => 'Formato non valido.',
    'relatable'            => 'Non puoi associarlo a questa risorsa.',
    'required'             => 'Obbligatorio.',
    'required_if'          => 'Obbligatorio quando :other è :value.',
    'required_unless'      => 'Obbligatorio a meno che :other sia :values.',
    'required_with'        => 'Obbligatorio quando :values è presente.',
    'required_with_all'    => 'Obbligatorio quando :values sono presenti.',
    'required_without'     => 'Obbligatorio quando :values non è presente.',
    'required_without_all' => 'Obbligatorio quando nessuno di :values è presente.',
    'same'                 => 'Deve coincidere con :other.',
    'size'                 => [
        'array'   => 'Deve contenere :size elementi.',
        'file'    => 'Deve essere :size kilobytes.',
        'numeric' => 'Deve essere :size.',
        'string'  => 'Deve essere :size caratteri.',
    ],
    'starts_with'          => 'Deve iniziare con uno dei seguenti: :values.',
    'string'               => 'Deve essere una stringa.',
    'timezone'             => 'Deve essere una zona valida.',
    'unique'               => 'E\' già in uso.',
    'uploaded'             => 'Deve essere caricato.',
    'url'                  => 'Formato non valido.',
    'uuid'                 => 'Deve essere un UUID valido.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'attributes'           => [],
];
