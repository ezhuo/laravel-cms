@section('header')
        <!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="{{isset($app_description) ? $app_description : '' }}">
    <meta name="keywords" content="jiangxinapp.com">
    <meta name="HandheldFriendly" content="true"/>
    <meta name="apple-touch-fullscreen" content="yes"/>
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <title>{{isset($app_title) ? $app_title : 'APP'}}</title>
    @include('layout.css')
</head>
<body>
@show