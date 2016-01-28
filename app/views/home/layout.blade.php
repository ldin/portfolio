<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if(!empty($row->description))
        <meta name="Description" content="{{$row->description}}">
    @endif
    @if(!empty($row->keywords))
        <meta name="Keywords" content="{{$row->keywords}}">
    @endif

    <title>@yield('title')</title>

    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href='https://fonts.googleapis.com/css?family=Russo+One&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
    <![endif]-->

    @yield('header')

    <link href="/css/main.css?00" rel="stylesheet">
    <link href="/css/bt-menu.css?01" rel="stylesheet">
</head>

<body>

<header id="header">



</header>

<main>
    @yield('content')

    <nav id="bt-menu" class="bt-menu">
        <a href="#" class="bt-menu-trigger"><span>Меню</span></a>
        <ul>
            <li><a href="/"><i class="glyphicon glyphicon-home"></i> Главная </a></li>
            <li>
                <a href="/works"><i class="glyphicon glyphicon-th-large"></i>Все работы</a>
                @yield('menu-work')
            </li>

            {{--<li><a href="#">Клиенты</a></li>--}}
            {{--<li><a href="#">Блог</a></li>--}}
            <li><a href="/contact"><i class="glyphicon glyphicon-user"></i>Контакты</a></li>
        </ul>
        <ul>
            <li><a href="https://twitter.com/siteherelesson" class="bt-icon icon-twitter">Twitter</a></li>
            <li><a href="https://plus.google.com/115094575201291193952/posts" class="bt-icon icon-gplus">Google+</a></li>
            <li><a href="#" class="bt-icon icon-facebook">Facebook</a></li>
            <li><a href="#" class="bt-icon icon-github">GitHub</a></li>
        </ul>
    </nav>

</main>

<footer>
    <div class="container">

    </div>
</footer>

{{ HTML::script('/js/lib/jquery-1.11.3.min.js') }}
{{ HTML::script('/js/lib/bootstrap.min.js') }}

{{ HTML::script('/js/main.min.js') }}
{{ HTML::script('/js/classie.js') }}
{{ HTML::script('/js/borderMenu.js') }}
@yield('scripts')


</body>

</html>
