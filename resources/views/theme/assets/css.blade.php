@section('css')
<link rel="stylesheet" href="{{asset('assets/amaze/css/amazeui.min.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/amaze/css/amazeui.datatables.min.css')}}"/>
<link rel="stylesheet" href="{{asset('theme/css/index.css')}}" />
@show

@section('css-web')
<link rel="stylesheet" href="{{asset('theme/web/css/index.css')}}" />
<link rel="stylesheet" href="{{asset('theme/web/css/common.min.css')}}" />
<link rel="stylesheet" href="{{asset('theme/web/css/index.min.css')}}" />
@show

@section('css-admin')
<link rel="stylesheet" href="{{asset('assets/amaze/css/fullcalendar.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/amaze/css/fullcalendar.print.css')}}" media='print' />
<link rel="stylesheet" href="{{asset('theme/admin/css/index.css')}}" />
@show