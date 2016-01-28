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

    <link href="/css/main.css?03" rel="stylesheet">
</head>

<body>

<header id="header">

</header>

<main>
    <section id="portfolio-page">
        <div class="head text-center">
            <h1>WORK COLLECTION</h1>
            {{--<p>— Featured projects —</p>--}}
        </div>

        <div id="works">

            <div class="item col-xs-12">
                <a class="asafov">
                    <div class="caption col-xs-12 col-sm-6">
                        <h2>Asafov design</h2>
                        <span>структура, программирование, верстка</span>
                    </div>
                    <figure  class="col-xs-12 col-sm-6">
                        <img src="/images/work/75582.jpg">
                    </figure>
                </a>
            </div>

            <div class="item col-xs-12">
                <a class="happer">
                    <div class="caption col-xs-12 col-sm-6 right">
                        <h2>happer media</h2>
                        <span>структура, программирование, верстка</span>
                    </div>
                    <figure  class="col-xs-12 col-sm-6">
                        <img src="/images/work/75583.jpg">
                    </figure>

                </a>
            </div>

            <div class="item col-xs-12">
                <a class="formula">
                    <div class="caption col-xs-12 col-sm-6">
                        <h2>Formula</h2>
                        <span>структура, программирование, верстка</span>
                    </div>
                    <figure  class="col-xs-12 col-sm-6">
                        <img src="/images/work/75588.jpg">
                    </figure>

                </a>
            </div>

            <div class="item col-xs-12">
                <a class="electro">
                    <div class="caption col-xs-12 col-sm-6 right">
                        <h2>Electro</h2>
                        <span>структура, программирование, верстка</span>
                    </div>
                    <figure  class="col-xs-12 col-sm-6">
                        <img src="/images/work/75584.jpg">
                    </figure>

                </a>
            </div>

            <div class="item col-xs-12">
                <a class="arin">
                    <div class="caption col-xs-12 col-sm-6">
                        <h2>Arin</h2>
                        <span>структура, программирование, верстка</span>
                    </div>
                    <figure  class="col-xs-12 col-sm-6">
                        <img src="/images/work/75586.jpg">
                    </figure>

                </a>
            </div>

            <div class="item col-xs-12">
                <a class="pizza">
                    <div class="caption col-xs-12 col-sm-6 right">
                        <h2>PizzStop</h2>
                        <span>структура, программирование, верстка</span>
                    </div>
                    <figure  class="col-xs-12 col-sm-6">
                        <img src="/images/work/75585.jpg">
                    </figure>

                </a>
            </div>

            <div class="item col-xs-12">
                <a class="sovet">
                    <div class="caption col-xs-12 col-sm-6 ">
                        <h2>Sovet Consulting</h2>
                        <span>структура, программирование, верстка</span>
                    </div>
                    <figure  class="col-xs-12 col-sm-6">
                        <img src="/images/work/75587.jpg">
                    </figure>

                </a>
            </div>

        </div>
    </section>
</main>

<footer>
    <div class="container">

    </div>
</footer>

{{ HTML::script('/js/lib/jquery-1.11.3.min.js') }}
{{ HTML::script('/js/lib/bootstrap.min.js') }}

{{ HTML::script('/js/main.min.js') }}
@yield('scripts')


</body>

</html>
