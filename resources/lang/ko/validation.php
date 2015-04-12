<?php

/*
 * This file is part of Bootstrap CMS.
 *
 * (c) Graham Campbell <graham@mineuk.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

       /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */

    "accepted"          => ":attribute(을|를) 반드시 동의해야 합니다.",
    "active_url"        => ":attribute(은|는) 유효한 URL이 아닙니다.",
    "after"             => ":attribute(은|는) 반드시 :date 이후 날짜여야 합니다.",
    "alpha"             => ":attribute(은|는) 문자만 포함할 수 있습니다.",
    "alpha_dash"        => ":attribute(은|는) 문자, 숫자, 대쉬(-)만 포함할 수 있습니다.",
    "alpha_num"         => ":attribute(은|는) 문자와 숫자만 포함할 수 있습니다.",
    "array"             => ":attribute(은|는) 반드시 배열이어야 합니다.",
    "before"            => ":attribute(은|는) 반드시 :date 이전 날짜여야 합니다.",
    "between"           => array(
        "numeric"   => ":attribute(은|는) 반드시 :min에서 :max 사이여야 합니다.",
        "file"      => ":attribute(은|는) 반드시 :min에서 :max 킬로바이트 사이여야 합니다.",
        "string"    => ":attribute(은|는) 반드시 :min에서 :max 문자 사이여야 합니다.",
        "array"     => ":attribute(은|는) 반드시 :min에서 :max 아이템 사이여야 합니다.",
    ),
    "confirmed"         => ":attribute의 확인 항목이 일치하지 않습니다.",
    "date"              => ":attribute(은|는) 유효한 날짜가 아닙니다.",
    "date_format"       => ":attribute(은|는) :format 형식과 일치하지 않습니다.",
    "different"         => ":attribute(와|과) :other(은|는) 반드시 서로 달라야 합니다.",
    "digits"            => ":attribute(은|는) 반드시 :digits 자릿수여야 합니다.",
    "digits_between"    => ":attribute(은|는) 반드시 :min에서 :max 자릿수 사이여야 합니다.",
    "email"             => ":attribute 형식이 유효하지 않습니다.",
    "exists"            => "선택된 :attribute(은|는) 존재하지 않습니다.",
    "image"             => ":attribute(은|는) 반드시 이미지여야 합니다.",
    "in"                => "선택된 :attribute(은|는) 유효하지 않습니다.",
    "integer"           => ":attribute(은|는) 반드시 정수여야 합니다.",
    "ip"                => ":attribute(은|는) 반드시 유효한 IP 주소여야 합니다.",
    "max"               => array(
        "numeric"   => ":attribute(은|는) 반드시 :max 보다 작아야 합니다.",
        "file"      => ":attribute(은|는) 반드시 :max 킬로바이트보다 작아야 합니다.",
        "string"    => ":attribute(은|는) 반드시 :max 자리보다 작아야 합니다.",
        "array"     => ":attribute(은|는) 반드시 :max 아이템보다 작아야 합니다.",
    ),
    "mimes"             => ":attribute(은|는) 반드시 다음의 파일 타입이어야 합니다: :values.",
    "min"               => array(
        "numeric"   => ":attribute(은|는) 반드시 :min 보다 커야 합니다.",
        "file"      => ":attribute(은|는) 반드시 :min 킬로바이트보다 커야 합니다.",
        "string"    => ":attribute(은|는) 반드시 :min 자리보다 커야 합니다.",
        "array"     => ":attribute(은|는) 반드시 :max 아이템보다 커야 합니다.",
    ),
    "notin"             => "선택된 :attribute(은|는) 유효하지 않습니다.",
    "numeric"           => ":attribute(은|는) 반드시 숫자여야 합니다.",
    "regex"             => ":attribute 형식은 유효하지 않습니다.",
    "required"          => ":attribute(은|는) 필수 항목입니다.",
    "required_if"       => ":other(이|가) :value 일때 :attribute 필드는 필수입니다.",
    "required_with"     => ":values(이|가) 있을 경우 :attribute 필드는 필수입니다.",
    "required_without"  => ":values(이|가) 없을 경우 :attribute 필드는 필수입니다.",
    "same"              => ":attribute(와|과) :other(은|는) 반드시 일치해야 합니다.",
    "size"              => array(
        "numeric"   => ":attribute(은|는) 반드시 :size 이여야 합니다.",
        "file"      => ":attribute(은|는) 반드시 :size 킬로바이트여야 합니다.",
        "string"    => ":attribute(은|는) 반드시 :size 자릿수여야 합니다.",
        "array"     => ":attribute(은|는) 반드시 :max 개의 아이템을 포함해야 합니다.",
    ),
    "unique"            => ":attribute(은|는) 이미 사용중 입니다.",
    "url"               => ":attribute 형식은 유효하지 않습니다.",
    "timezone"     => ":attribute(은|는) 타임존 형식에 맞아야합니다.",
    "greater_than" => ":attribute(은|는) 반드시 :other보다 커야 합니다.",

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

    'custom' => array(
        'usable' => ':value(은|는) 사용할 수 있습니다.',
    ),

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => array(),

];
