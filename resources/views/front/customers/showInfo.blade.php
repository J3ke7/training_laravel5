<div id="dialog-edit" class="modal fade bs-example-modal-xs" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3>{{ trans('front/customers.title_dialog_info') }}</h3>
            </div>
            <div class="modal-body">
                @if(isset($customer))
                    <table class="table table-borderless">
                        <tr>
                            <td width="20%">
                                {!! Form::label( trans('front/customers.name')) !!}
                            </td>
                            <td width="80%">
                                {{ $customer->name  }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                {!! Form::label( trans('front/customers.email')) !!}
                            </td>
                            <td>
                                {{ $customer->email  }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                {!! Form::label( trans('front/customers.descriptions')) !!}
                            </td>
                            <td>
                                {{ $customer->descriptions  }}
                            </td>
                        </tr>
                    </table>
                @endif
            </div>
            <div class="modal-footer">
                <a href="#" class="btn" name="bnt-showInfo-close" data-dismiss="modal">Close</a>
                <a href="#" class="btn btn-primary" name="bnt-showInfo-edit">Edit</a>
            </div>
        </div>
    </div>
</div>