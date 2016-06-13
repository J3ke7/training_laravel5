<div id="dialog_info" class="modal fade bs-example-modal-xs" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3>{{ trans('front/customers.title_dialog_info') }}</h3>
            </div>
            <div class="modal-body">
                <table class="table table-borderless">
                    <tr>
                        <td width="20%">
                            {!! Form::label( trans('front/customers.name')) !!}
                        </td>
                        <td width="80%">
                            <input type="hidden" name="customerId"/>
                            <span name="customerName"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {!! Form::label( trans('front/customers.email')) !!}
                        </td>
                        <td>
                            <span name="customerEmail"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {!! Form::label( trans('front/customers.descriptions')) !!}
                        </td>
                        <td>
                            <span name="customerDescriptions"></span>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn" id="bnt_showInfo_close" data-dismiss="modal">Close</a>
                <a class="btn btn-primary" id="bnt_showInfo_edit">Edit</a>
            </div>
        </div>
    </div>
</div>

{!! HTML::script('js/front/customers/showInfo.js')  !!}