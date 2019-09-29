<?php declare(strict_types=1);

use SilerExt\Database\MyMedoo;
use SilerExt\Validation\Validator;

function json($data) {
    return Siler\Http\Response\json($data);
}

function db($connection = 'default'): MyMedoo {
    return SilerExt\Database\medoo($connection);
}

function validate(array $data, array $rules, ?Callable $callback = null): Validator {
    return SilerExt\Validation\validate($data, $rules, $callback);
}

function sanitize($mixed, $filters = FILTER_SANITIZE_SPECIAL_CHARS) {
    return SilerExt\Validation\sanitize($mixed, $filters);
}

function config($path) {
    return SilerExt\Config\config($path);
}
