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
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <div id="dataTables-example_wrapper"
                             class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="dataTables_length" id="dataTables-example_length">
                                        <label>{{ trans('front/customers.show') }} <select
                                                    name="dataTables-example_length" aria-controls="dataTables-example"
                                                    class="form-control input-sm">
                                                <option value=""></option>
                                                <option value="10" selected>10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> {{ trans('front/customers.entries') }} </label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-striped table-bordered table-hover dataTable no-footer"
                                           id="dataTables-example" role="grid"
                                           aria-describedby="dataTables-example_info">
                                        <thead>
                                        <tr role="row">
                                            <th style="width: 50px;">#
                                            </th>
                                            <th style="width: 172px;">{{ trans('front/customers.name') }}
                                            </th>
                                            <th style="width: 172px;">{{ trans('front/customers.email') }}
                                            </th>
                                            <th style="width: 185px;">{{ trans('front/customers.descriptions') }}
                                            </th>
                                            <th style="width: 110px;">{{ trans('front/customers.create_at') }}
                                            </th>
                                            <th style="width: 110px;">{{ trans('front/customers.update_at') }}
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($lstCustomers as $iCustomers)
                                            <tr class="gradeA odd" role="row">
                                                <td></td>
                                                <td>{{ $iCustomers->name }}</td>
                                                <td>{{ $iCustomers->email }}</td>
                                                <td>{{ $iCustomers->descriptions }}</td>
                                                <td class="center">{{ $iCustomers->created_at }}</td>
                                                <td class="center">{{ $iCustomers->updated_at }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="dataTables_info" id="dataTables-example_info" role="status"
                                         aria-live="polite">
                                        Showing 1 to 10 of 57 entries
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="dataTables_paginate paging_simple_numbers"
                                         id="dataTables-example_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button previous disabled"
                                                aria-controls="dataTables-example"
                                                tabindex="0" id="dataTables-example_previous"><a href="#">Previous</a>
                                            </li>
                                            <li class="paginate_button active" aria-controls="dataTables-example"
                                                tabindex="0">
                                                <a
                                                        href="#">1</a></li>
                                            <li class="paginate_button " aria-controls="dataTables-example"
                                                tabindex="0"><a
                                                        href="#">2</a></li>
                                            <li class="paginate_button " aria-controls="dataTables-example"
                                                tabindex="0"><a
                                                        href="#">3</a></li>
                                            <li class="paginate_button " aria-controls="dataTables-example"
                                                tabindex="0"><a
                                                        href="#">4</a></li>
                                            <li class="paginate_button " aria-controls="dataTables-example"
                                                tabindex="0"><a
                                                        href="#">5</a></li>
                                            <li class="paginate_button " aria-controls="dataTables-example"
                                                tabindex="0"><a
                                                        href="#">6</a></li>
                                            <li class="paginate_button next" aria-controls="dataTables-example"
                                                tabindex="0"
                                                id="dataTables-example_next"><a href="#">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

