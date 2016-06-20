/**
 * Created by tien.nguyen on 6/13/2016.
 */
function getDataEditCustomerById(customerId) {
    $.ajax({
        type: "GET",
        url: 'customers/get/' + customerId,
        success: function (data) {
            if (data && data != null) {
                $('#dialog_addAndEdit [name=div-errors]').hide();
                $("#dialog_addAndEdit").find("[name=customerId]").val(data.id);
                $("#dialog_addAndEdit").find("[name=customerName]").val(data.name);
                $("#dialog_addAndEdit").find("[name=customerEmail]").val(data.email);
                $("#dialog_addAndEdit").find("[name=customerDescriptions]").val(data.descriptions);
                $('#dialog_addAndEdit').modal('show');
            }
        },
        error: function (data) {
            notifications('danger', 'Fail');
        }
    });
}

function resetValueFormDailog() {
    $('#dialog_addAndEdit [name=div-errors]').hide();
    $("#dialog_addAndEdit").find("[name=customerId]").val('');
    $("#dialog_addAndEdit").find("[name=customerName]").val('');
    $("#dialog_addAndEdit").find("[name=customerEmail]").val('');
    $("#dialog_addAndEdit").find("[name=customerDescriptions]").val('');
}

$(document).ready(function () {
    $('#dialog_addAndEdit_close').click(function () {
        $('#dialog_addAndEdit').modal('hide');
        var customerId = $("#dialog_addAndEdit").find("[name=customerId]").val();
        if (customerId && customerId != null && customerId > 0) {
            getDataCustomerById(customerId);
        }
    });
    $('#dialog_addAndEdit_save').click(function (e) {
        $('.loadingPanel').toggle();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var formData = {
            name: $("#dialog_addAndEdit").find("[name=customerName]").val(),
            email: $("#dialog_addAndEdit").find("[name=customerEmail]").val(),
            descriptions: $("#dialog_addAndEdit").find("[name=customerDescriptions]").val()
        }
        var customerId = $("#dialog_addAndEdit").find("[name=customerId]").val();
        var type = "";
        var url = "";
        if (customerId && customerId != null && customerId > 0) {
            type = "PUT";
            url = "customers/update/" + customerId;
        } else {
            type = "POST";
            url = "customers/create";
        }
        $.ajax({
            type: type,
            url: url,
            data: formData,
            dataType: 'json',
            success: function (data) {
                if (data.resultCode == 'OK') {
                    $('#dialog_addAndEdit').modal('hide');
                    if (customerId && customerId != null && customerId > 0) {
                        getDataCustomerById(customerId);
                    }
                    $('.loadingPanel').toggle();
                    notifications('success', 'Successfully');
                    reloadDivContent();
                } else {
                    $('.loadingPanel').toggle();
                    notifications('danger', data.resultMessage);
                }
            },
            error: function (data) {
                $('.loadingPanel').toggle();
                if (data.status === 401)//Unauthorized
                {
                } else if (data.status === 422)//422 Unprocessable Entity
                {
                    var errors = data.responseJSON;
                    if (errors && errors != null) {
                        $('#dialog_addAndEdit [name=div-errors]').show();
                        var lstErrors = $('#dialog_addAndEdit [name=list-error]');
                        lstErrors.empty();
                        var html = "";
                        var total = 0;
                        if (errors['name']) {
                            html += "<li>" + errors['name'] + "</li>";
                            total++;
                        }
                        if (errors['email']) {
                            html += "<li>" + errors['email'] + "</li>";
                            total++;
                        }
                        if (errors['descriptions']) {
                            html += "<li>" + errors['descriptions'] + "</li>";
                            total++;
                        }
                        lstErrors.html(html);
                        $('#dialog_addAndEdit [name=total-errors]').html(total);
                    }
                } else {
                    notifications('danger', 'Fail');
                }
            }
        });
    });
});