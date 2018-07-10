<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="X-CSRF-TOKEN" content="{{csrf_token()}}">
    <title>@yield('title') - test</title>
    <link href="/css/public.css" rel="stylesheet">
    <link href="/css/footer.css" rel="stylesheet">
    @yield('style')
    @yield('script_header')
</head>
<body>
    <div id="app">
        <top></top>
        <div class="main">
            <bd></bd>
            {{--<el-container>--}}
                {{--<el-main class="el-main">--}}
                    {{--@yield('content')--}}
                {{--</el-main>--}}
                {{--<el-aside width="330px">--}}
                    {{--<!--登陆小模块start-->--}}
                    {{--<login></login>--}}
                    {{--<!--登陆小模块end-->--}}
                    {{--<!--热门小模块start-->--}}
                    {{--<recommend></recommend>--}}
                    {{--<!--热门小模块end-->--}}
                    {{--<!--最新-->--}}
                    {{--<lastest></lastest>--}}
                {{--</el-aside>--}}
            {{--</el-container>--}}
            {{--@yield('content')--}}
        </div>
        <foot></foot>
    </div>
</body>
</html>
<script src="{{mix('js/app.js')}}"></script>
@yield('script_footer')