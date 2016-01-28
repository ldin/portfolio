@extends('home.layout')

@section('title')
    {{ !empty($row->title)? $row->title:(!empty($type->title)? $type->title:'Asafov design') }}
@stop

@section('menu-work')
    @if(isset($posts)&&count($posts)>0)
        <ul>
            @foreach($posts as $post)
                <li {{ (Request::is( $type->type.'/'.$post->slug)) || (!empty($row)&&$row->parent==$post->id)? 'class="active"' : '' }} >
                    {{ HTML::link('/'.$type->type.'/'.$post->slug, $post->name) }}
                </li>
            @endforeach
        </ul>
    @endif
@stop

@section('content')

    <div id="portfolio-page" class="">

        @if(empty($row) && isset($posts) && count($posts)>0)

            <div class="head text-center">
                <h1>WORK COLLECTION</h1>
            </div>
            <div id="works" class="">
                @foreach($posts as $k=>$post)
                    <div class="item col-xs-12">
                        <a href="works/{{$post->slug}}" class="{{$post->slug}}">
                            <div class="caption col-xs-12 col-sm-6 {{($k%2==0)?'right':''}}">
                                <h2>{{$post->name}}</h2>
                                <span>структура, программирование, верстка</span>
                            </div>
                            <figure  class="col-xs-12 col-sm-6">
                                {{HTML::image('/upload/image/'.$post->image)}}
                            </figure>

                        </a>
                    </div>
                @endforeach
            </div>

        @else

            <div class="container">
                <div class="col-xs-12 {{ (isset($posts)&&count($posts)>0)?"col-sm-8 col-lg-offset-1":"col-sm-12"  }} ">
                    @if(!empty($row->text))
                        {{ $row->text }}
                    @endif

                    @if(empty($row))
                        {{ $type->text }}
                    @endif
                </div>
            </div>

        @endif
    </div>
@stop


@section('scripts')

@stop
