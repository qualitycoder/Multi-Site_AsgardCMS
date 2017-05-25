<?php

/*
|--------------------------------------------------------------------------
| Translatable fields
|--------------------------------------------------------------------------
*/
/**
 * Add an input field
 * @param string $name The field name
 * @param string $title The field title
 * @param object $errors The laravel errors object
 * @param null|object $object The entity of the field
 */
use Illuminate\Support\ViewErrorBag;

Form::macro('simpleInput', function ($name, $title, ViewErrorBag $errors, $object = null, array $options = []) {
    $options = array_merge(['class' => "form-control", 'placeholder' => $title], $options);

    $string  = "<div class='form-group " . ($errors->has($name) ? ' has-error' : '') . "'>";
    $string .= Form::label($name, $title);

    if (is_object($object)) {
        $currentData = $object->{$name} ?: '';
    } else {
        $currentData = null;
    }

    $string .= Form::text($name, old($name, $currentData), $options);
    $string .= $errors->first($name, '<span class="help-block">:message</span>');
    $string .= "</div>";

    return $string;
});

Form::macro('halfWidthInput', function ($name, $title, ViewErrorBag $errors, $object = null, array $options = []) {
    $options = array_merge(['class' => "form-control", 'placeholder' => $title], $options);

    $string  = "<div class='form-group col-xs-6 " . ($errors->has($name) ? ' has-error' : '') . "'>";
    $string .= Form::label($name, $title);

    if (is_object($object)) {
        $currentData = $object->{$name} ?: '';
    } else {
        $currentData = null;
    }

    $string .= Form::text($name, old($name, $currentData), $options);
    $string .= $errors->first($name, '<span class="help-block">:message</span>');
    $string .= "</div>";

    return $string;
});

Form::macro('thirdWidthInput', function ($name, $title, ViewErrorBag $errors, $object = null, array $options = []) {
    $options = array_merge(['class' => "form-control", 'placeholder' => $title], $options);

    $string  = "<div class='form-group col-xs-4 " . ($errors->has($name) ? ' has-error' : '') . "'>";
    $string .= Form::label($name, $title);

    if (is_object($object)) {
        $currentData = $object->{$name} ?: '';
    } else {
        $currentData = null;
    }

    $string .= Form::text($name, old($name, $currentData), $options);
    $string .= $errors->first($name, '<span class="help-block">:message</span>');
    $string .= "</div>";

    return $string;
});

Form::macro('collectionSelect', function ($name, $title, $collection, $value, $text, ViewErrorBag $errors, $object = null, array $options = [])) {
    $options = array_merge(['class' => "form-control", 'placeholder' => $title], $options);

    $string = "<div class='form-group " . ($errors->has($name) ? ' has-error' : '') . "'>";
    $string = Form::label($name, $title);

    if (is_object($object)) {
        $currentData = $object->{$name} ?: '';
    } else {
        $currentData = null;
    }

    $arr = [];
    foreach($collection as $item) {
        $arr[$item->$value] = $item->$text;
    }

    $string .= Form::select($name, $arr, old($name, $currentData))
    $string .= $errors->first($name, '<span class="help-block">:message</span>');
    $string .= "</div>";

    return $string;
}