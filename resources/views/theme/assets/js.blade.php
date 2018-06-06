@section('js')
<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="{{asset('assets/js/amazeui.ie8polyfill.min.js')}}"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<!--<![endif]-->
<script src="{{asset('assets/amaze/js/amazeui.min.js')}}"></script>
<script src="{{asset('assets/amaze/js/amazeui.widgets.helper.min.js')}}"></script>
<script src="{{asset('assets/amaze/js/amazeui.datatables.min.js')}}"></script>
<script src="{{asset('assets/amaze/js/dataTables.responsive.min.js')}}"></script>

<script src="{{asset('theme/js/index.js')}}"></script>
@show

@section('js-web')
    <script src="{{asset('theme/web/js/index.js')}}"></script>
    <script src="{{asset('theme/web/js/common.js')}}"></script>
@show

@section('js-admin')
    <script src="{{asset('assets/amaze/js/moment.js')}}"></script>
    <script src="{{asset('assets/amaze/js/echarts.min.js')}}"></script>
    <script src="{{asset('assets/amaze/js/fullcalendar.min.js')}}"></script>
    <script src="{{asset('theme/admin/js/index.js')}}"></script>
@show
