@extends('errors::minimal')

@section('title', __('Server Error'))
@section('code', '500')
@section('message', __('Fallo en el servidor, disculpe las molestias.'))
