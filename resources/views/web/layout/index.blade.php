@extends('theme.layout.index')
@section('css-admin')@stop
@section('js-admin')@stop

@section('css-web')
    @parent
@stop

@section('js-web')
    @parent
@stop

@section('body')
    <body data-type="{{isset($page_type) ? $page_type : 'index'}}">

    @include('web.layout.header')

    @section('web-body')
    @show

    @include('web.layout.footer')

@stop