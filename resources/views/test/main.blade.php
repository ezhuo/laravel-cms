<html>
<head>
    <title>App Name - @yield('title','ezhuo')</title>
</head>
<body>
@section('sidebar')
    主要sidebar
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>