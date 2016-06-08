@extends('front.template')

@section('main')

    <div class="row">

        <div class="col-lg-12">
            {!! Form::open(['url' => 'customers/search', 'method' => 'get', 'role' => 'form', 'class' => 'pull-right']) !!}
            {!! Form::control('text', 12, 'search', $errors, null, null, null, trans('front/customers.search')) !!}
            {!! Form::close() !!}
        </div>

    </div>

    <div class="row">

        {{--@foreach($lstCustomers as $iCustomers)--}}
            {{--<div class="box">--}}
                {{--<div class="col-lg-12 text-center">--}}
                    {{--<h2>{{ $->title }}--}}
                        {{--<br>--}}
                        {{--<small>{{ $post->user->username }} {{ trans('front/blog.on') }} {!! $post->created_at . ($post->created_at != $post->updated_at ? trans('front/blog.updated') . $post->updated_at : '') !!}</small>--}}
                    {{--</h2>--}}
                {{--</div>--}}
                {{--<div class="col-lg-12">--}}
                    {{--<p>{!! $post->summary !!}</p>--}}
                {{--</div>--}}
                {{--<div class="col-lg-12 text-center">--}}
                    {{--{!! link_to('blog/' . $post->slug, trans('front/blog.button'), ['class' => 'btn btn-default btn-lg']) !!}--}}
                    {{--<hr>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--@endforeach--}}

    </div>

@stop

