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
                                                <option value="10" selected>10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                                <option value="">All</option>
                                            </select> {{ trans('front/customers.entries') }} </label></div>
                                </div>
                                <div class="div-add-customer">
                                    <button type="button" class="btn btn-primary btn-sm" name="btn_add_customer">Add
                                        customer
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-striped table-bordered table-hover dataTable no-footer"
                                           id="dataTables" role="grid"
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
                                        <tbody id="dataTables_tbody">
                                        @foreach($object  as $iCustomers)
                                            <tr class="gradeA odd" role="row">
                                                <td>
                                                    <samp class="glyphicon glyphicon-edit"
                                                          name="lk_show_dialog_info"></samp>
                                                    &nbsp;
                                                    <samp class="glyphicon glyphicon-trash"
                                                          name="lk_delete_customer"></samp>
                                                    <input type="hidden" name="customerId" value="{{$iCustomers->id}}"/>
                                                </td>
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
                                        Showing {{ ($object->currentPage() -1) * $object->perPage() + 1 }}
                                        to {{
                                        ($object->currentPage()-1) * $object->perPage() + $object->count()
                                         }}
                                        of {{ $object->total() }} entries
                                    </div>
                                </div>

                                @if($object->lastPage() > 1)
                                    <div class="col-sm-6">
                                        <!--{!! $object->render() !!}-->
                                        {{ with(new App\Http\Util\PagingPresenter($object))->render() }}

                                    </div>
                                    @endif
                                            <!--  <div class="col-sm-6">
                                    <div class="dataTables_paginate paging_simple_numbers"
                                         id="dataTables-example_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button previous disabled"
                                                aria-controls="dataTables-example"
                                                tabindex="0" id="dataTables-example_previous"><a href="#">Previous</a>
                                            </li>
                                            <li class="paginate_button next" aria-controls="dataTables-example"
                                                tabindex="0"
                                                id="dataTables-example_next"><a href="#">Next</a></li>
                                        </ul>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--customer include js_start--}}
    {!! HTML::script('js/front/customers/index.js') !!}
    {{--customer include js_end--}}
    {{--customer include css_start--}}
    {{ HTML::style('css/customers.css') }};
    {{--customer include css_end--}}
    <!-- modal start -->
    @include('front.customers.showInfo');
    @include('back.customers.addAndEdit');
    <!-- modal end -->
@stop
