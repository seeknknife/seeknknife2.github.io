@extends('adminlte::components.input-group-component')

@section('input_group_item')

    {{-- Textarea --}}
    <textarea id="{{ $id }}" name="{{ $name }}"
        {{ $attributes->merge(['class' => $makeItemClass($errors->first($errorKey))]) }}
    >{{ $slot }}</textarea>

@overwrite