@extends('theme.layout.index')
@section('css-web')@stop
@section('js-web')@stop

@section('css-admin')
    <link rel="stylesheet" href="{{asset('theme/admin/css/index.css')}}" />
@stop

@section('js-admin')
    <script src="{{asset('assets/amaze/js/moment.js')}}"></script>
    <script src="{{asset('theme/admin/js/index.js')}}"></script>
@stop

@section('body')
    <body data-type="login">
    <div class="am-g tpl-g">
        {{--@include('admin.layout.skiner')--}}
        <div class="tpl-login">
            <div class="tpl-login-content">
                <div class="tpl-login-logo">
                </div>
                <form class="am-form tpl-form-line-form">
                    <div class="am-form-group">
                        <input type="text" class="tpl-form-input" id="user-name" placeholder="请输入账号">

                    </div>

                    <div class="am-form-group">
                        <input type="password" class="tpl-form-input" id="user-name" placeholder="请输入密码">

                    </div>
                    <div class="am-form-group tpl-login-remember-me">
                        <input id="remember-me" type="checkbox">
                        <label for="remember-me">

                            记住密码
                        </label>

                    </div>


                    <div class="am-form-group">

                        <button type="button"
                                class="am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success  tpl-login-btn">提交
                        </button>

                    </div>
                </form>
            </div>
        </div>
    </div>
@stop