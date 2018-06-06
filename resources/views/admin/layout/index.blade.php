@extends('theme.layout.index')
@section('css-web')@stop
@section('js-web')@stop

@section('css-admin')
    @parent
@stop

@section('js-admin')
    @parent
@stop

@section('body')
    <body data-type="{{isset($page_type) ? $page_type : 'index'}}">
    <div class="am-g tpl-g">
        @include('admin.layout.header')

        @include('admin.layout.skiner')

        @include('admin.layout.sidebar')

        @section('admin-body')
        @show
    </div>
@stop