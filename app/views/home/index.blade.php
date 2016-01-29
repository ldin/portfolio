@extends('home.layout')

@section('title') {{ !empty($settings['title'])?$settings['title']:'' }} @stop

@section('header')
    <meta property="og:type" content="profile"/>
    <meta property="profile:first_name" content="Alena"/>
    <meta property="profile:last_name" content="Ldinka"/>
    <meta property="og:description" content=""/>
    {{--<meta property="og:image" content=""/>--}}
    {{--<meta property="og:url" content=""/>--}}
    <meta property="og:site_name" content="Портфолио"/>

@stop

@section('content')

    <script>
        window.location.href = "/works"
    </script>

    <section id="portfolio-page">
        <div class="head text-center">
            <h1>WORK COLLECTION</h1>
            {{--<p>— Featured projects —</p>--}}
        </div>

        <div id="works">

            <div class="item col-xs-12">
                <a href="/works/design1" class="asafov">
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


@stop

@section('scripts')

@stop
