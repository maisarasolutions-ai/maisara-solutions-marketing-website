<?php

return [

    'accepted' => 'يجب قبول حقل :attribute.',

    'accepted_if' => 'يجب قبول حقل :attribute عندما تكون قيمة :other هي :value.',

    'active_url' => 'يجب أن يكون حقل :attribute عنوان URL صالحًا.',

    'after' => 'يجب أن يكون حقل :attribute تاريخًا بعد :date.',

    'after_or_equal' => 'يجب أن يكون حقل :attribute تاريخًا بعد أو يساوي :date.',

    'alpha' => 'يجب أن يحتوي حقل :attribute على أحرف فقط.',

    'alpha_dash' => 'يجب أن يحتوي حقل :attribute على أحرف وأرقام وشرطات وشرطات سفلية فقط.',

    'alpha_num' => 'يجب أن يحتوي حقل :attribute على أحرف وأرقام فقط.',

    'array' => 'يجب أن يكون حقل :attribute مصفوفة.',

    'before' => 'يجب أن يكون حقل :attribute تاريخًا قبل :date.',

    'before_or_equal' => 'يجب أن يكون حقل :attribute تاريخًا قبل أو يساوي :date.',

    'between' => [
        'numeric' => 'يجب أن يكون حقل :attribute بين :min و :max.',
        'file' => 'يجب أن يكون حجم حقل :attribute بين :min و :max كيلوبايت.',
        'string' => 'يجب أن يحتوي حقل :attribute بين :min و :max حرفًا.',
        'array' => 'يجب أن يحتوي حقل :attribute بين :min و :max عنصر.',
    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute صحيحة أو خاطئة.',

    'confirmed' => 'تأكيد حقل :attribute غير متطابق.',

    'current_password' => 'كلمة المرور غير صحيحة.',

    'date' => 'يجب أن يكون حقل :attribute تاريخًا صالحًا.',

    'date_equals' => 'يجب أن يكون حقل :attribute تاريخًا يساوي :date.',

    'date_format' => 'يجب أن يتطابق حقل :attribute مع التنسيق :format.',

    'decimal' => 'يجب أن يحتوي حقل :attribute على :decimal منازل عشرية.',

    'declined' => 'يجب رفض حقل :attribute.',

    'declined_if' => 'يجب رفض حقل :attribute عندما تكون قيمة :other هي :value.',

    'different' => 'يجب أن يختلف حقل :attribute عن :other.',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits أرقام.',

    'digits_between' => 'يجب أن يحتوي حقل :attribute بين :min و :max أرقام.',

    'dimensions' => 'أبعاد الصورة في حقل :attribute غير صالحة.',

    'distinct' => 'حقل :attribute يحتوي على قيمة مكررة.',

    'doesnt_start_with' => 'لا يجب أن يبدأ حقل :attribute بأحد القيم التالية: :values.',

    'email' => 'يجب أن يكون حقل :attribute عنوان بريد إلكتروني صالحًا.',

    'ends_with' => 'يجب أن ينتهي حقل :attribute بأحد القيم التالية: :values.',

    'enum' => 'القيمة المحددة لـ :attribute غير صالحة.',

    'exists' => 'القيمة المحددة لـ :attribute غير صالحة.',

    'file' => 'يجب أن يكون حقل :attribute ملفًا.',

    'filled' => 'يجب أن يحتوي حقل :attribute على قيمة.',

    'gt' => [
        'numeric' => 'يجب أن يكون حقل :attribute أكبر من :value.',
        'file' => 'يجب أن يكون حجم حقل :attribute أكبر من :value كيلوبايت.',
        'string' => 'يجب أن يحتوي حقل :attribute على أكثر من :value حرف.',
        'array' => 'يجب أن يحتوي حقل :attribute على أكثر من :value عنصر.',
    ],

    'gte' => [
        'numeric' => 'يجب أن يكون حقل :attribute أكبر من أو يساوي :value.',
        'file' => 'يجب أن يكون حجم حقل :attribute أكبر من أو يساوي :value كيلوبايت.',
        'string' => 'يجب أن يحتوي حقل :attribute على :value حرف أو أكثر.',
        'array' => 'يجب أن يحتوي حقل :attribute على :value عنصر أو أكثر.',
    ],

    'image' => 'يجب أن يكون حقل :attribute صورة.',

    'in' => 'القيمة المحددة لـ :attribute غير صالحة.',

    'in_array' => 'حقل :attribute غير موجود في :other.',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا.',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP صالحًا.',

    'ipv4' => 'يجب أن يكون حقل :attribute عنوان IPv4 صالحًا.',

    'ipv6' => 'يجب أن يكون حقل :attribute عنوان IPv6 صالحًا.',

    'json' => 'يجب أن يكون حقل :attribute سلسلة JSON صالحة.',

    'lt' => [
        'numeric' => 'يجب أن يكون حقل :attribute أقل من :value.',
        'file' => 'يجب أن يكون حجم حقل :attribute أقل من :value كيلوبايت.',
        'string' => 'يجب أن يحتوي حقل :attribute على أقل من :value حرف.',
        'array' => 'يجب أن يحتوي حقل :attribute على أقل من :value عنصر.',
    ],

    'lte' => [
        'numeric' => 'يجب أن يكون حقل :attribute أقل من أو يساوي :value.',
        'file' => 'يجب أن يكون حجم حقل :attribute أقل من أو يساوي :value كيلوبايت.',
        'string' => 'يجب أن يحتوي حقل :attribute على :value حرف أو أقل.',
        'array' => 'يجب ألا يحتوي حقل :attribute على أكثر من :value عنصر.',
    ],

    'mac_address' => 'يجب أن يكون حقل :attribute عنوان MAC صالحًا.',

    'max' => [
        'numeric' => 'يجب ألا يتجاوز حقل :attribute :max.',
        'file' => 'يجب ألا يتجاوز حجم حقل :attribute :max كيلوبايت.',
        'string' => 'يجب ألا يتجاوز حقل :attribute :max حرف.',
        'array' => 'يجب ألا يحتوي حقل :attribute على أكثر من :max عنصر.',
    ],

    'mimes' => 'يجب أن يكون حقل :attribute ملفًا من النوع: :values.',

    'mimetypes' => 'يجب أن يكون حقل :attribute ملفًا من النوع: :values.',

    'min' => [
        'numeric' => 'يجب أن يكون حقل :attribute على الأقل :min.',
        'file' => 'يجب أن يكون حجم حقل :attribute على الأقل :min كيلوبايت.',
        'string' => 'يجب أن يحتوي حقل :attribute على الأقل :min حرف.',
        'array' => 'يجب أن يحتوي حقل :attribute على الأقل :min عنصر.',
    ],

    'multiple_of' => 'يجب أن يكون حقل :attribute مضاعفًا لـ :value.',

    'not_in' => 'القيمة المحددة لـ :attribute غير صالحة.',

    'not_regex' => 'تنسيق حقل :attribute غير صالح.',

    'numeric' => 'يجب أن يكون حقل :attribute رقمًا.',

    'password' => [
        'letters' => 'يجب أن يحتوي حقل :attribute على حرف واحد على الأقل.',
        'mixed' => 'يجب أن يحتوي حقل :attribute على حرف كبير وحرف صغير واحد على الأقل.',
        'numbers' => 'يجب أن يحتوي حقل :attribute على رقم واحد على الأقل.',
        'symbols' => 'يجب أن يحتوي حقل :attribute على رمز واحد على الأقل.',
        'uncompromised' => 'البيانات المقدمة لحقل :attribute ظهرت في تسرب بيانات. يرجى اختيار :attribute مختلف.',
    ],

    'present' => 'يجب أن يكون حقل :attribute موجودًا.',

    'prohibited' => 'حقل :attribute محظور.',

    'prohibited_if' => 'حقل :attribute محظور عندما تكون قيمة :other هي :value.',

    'prohibited_unless' => 'حقل :attribute محظور ما لم تكن قيمة :other هي :values.',

    'prohibits' => 'حقل :attribute يمنع وجود :other.',

    'regex' => 'تنسيق حقل :attribute غير صالح.',

    'required' => 'حقل :attribute مطلوب.',

    'required_array_keys' => 'يجب أن يحتوي حقل :attribute على إدخالات لـ: :values.',

    'required_if' => 'حقل :attribute مطلوب عندما تكون قيمة :other هي :value.',

    'required_if_accepted' => 'حقل :attribute مطلوب عندما يتم قبول :other.',

    'required_unless' => 'حقل :attribute مطلوب ما لم تكن قيمة :other هي :values.',

    'required_with' => 'حقل :attribute مطلوب عندما تكون :values موجودة.',

    'required_with_all' => 'حقل :attribute مطلوب عندما تكون :values موجودة.',

    'required_without' => 'حقل :attribute مطلوب عندما لا تكون :values موجودة.',

    'required_without_all' => 'حقل :attribute مطلوب عندما لا تكون أي من :values موجودة.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other.',

    'size' => [
        'numeric' => 'يجب أن يكون حقل :attribute هو :size.',
        'file' => 'يجب أن يكون حجم حقل :attribute هو :size كيلوبايت.',
        'string' => 'يجب أن يحتوي حقل :attribute على :size حرف.',
        'array' => 'يجب أن يحتوي حقل :attribute على :size عنصر.',
    ],

    'starts_with' => 'يجب أن يبدأ حقل :attribute بأحد القيم التالية: :values.',

    'string' => 'يجب أن يكون حقل :attribute سلسلة نصية.',

    'timezone' => 'يجب أن يكون حقل :attribute منطقة زمنية صالحة.',

    'unique' => 'قيمة حقل :attribute مستخدمة بالفعل.',

    'uploaded' => 'فشل تحميل حقل :attribute.',

    'url' => 'يجب أن يكون حقل :attribute عنوان URL صالحًا.',

    'uuid' => 'يجب أن يكون حقل :attribute UUID صالحًا.',

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'رسالة مخصصة',
        ],
    ],

    'attributes' => [],

];
