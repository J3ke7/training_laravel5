<div id="dialog_addAndEdit" class="modal fade bs-example-modal-xs" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3>{{ trans('front/customers.title_dialog_info') }}</h3>
            </div>
            <div class="modal-body">
                <div  name="div-errors">
                    <p>The following errors have occurred: <span name="total-errors"></span></p>
                    <ul name="list-error">
                    </ul>
                </div>
                <table class="table table-borderless">
                    <tr>
                        <td width="20%">
                            {!! Form::label( trans('front/customers.name')) !!}
                        </td>
                        <td width="80%">
                            {!! Form::input('hidden', 'customerId')!!}

                            {!! Form::input('text', 'customerName', null,  array('maxlength' => '200', 'class' => 'form-control')) !!}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {!! Form::label( trans('front/customers.email')) !!}
                        </td>
                        <td>
                            {!! Form::input('email', 'customerEmail','', array('maxlength' => '200', 'class' => 'form-control')) !!}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {!! Form::label( trans('front/customers.descriptions')) !!}
                        </td>
                        <td>
                            {!! Form::input('textarea','customerDescriptions','', array('maxlength' => '200', 'class' => 'form-control')) !!}
                        </td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <a class="btn" id="dialog_addAndEdit_close">Close</a>
                <a class="btn btn-primary" id="dialog_addAndEdit_save">Save changes</a>
            </div>
        </div>
    </div>
</div>

{!! HTML::script('js/back/customers/addAndEdit.js') !!}