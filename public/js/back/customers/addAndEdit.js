/**
 * Created by tien.nguyen on 6/13/2016.
 */
function getDataEditCustomerById(customerId) {
    $.ajax({
        type: "GET",
        url: 'customers/get/' + customerId,
        success: function (data) {
            if (data && data != null) {
                $("#dialog_addAndEdit").find("[name=customerId]").val(data.id);
                $("#dialog_addAndEdit").find("[name=customerName]").val(data.name);
                $("#dialog_addAndEdit").find("[name=customerEmail]").val(data.email);
                $("#dialog_addAndEdit").find("[name=customerDescriptions]").val(data.descriptions);
                $('#dialog_addAndEdit').modal('show');
            }
        },
        error: function (data) {
            alert('fail');
        }
    });
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
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        e.preventDefault();

        var formData = {
            name: $("#dialog_addAndEdit").find("[name=customerName]").val(),
            email: $("#dialog_addAndEdit").find("[name=customerEmail]").val(),
            descriptions: $("#dialog_addAndEdit").find("[name=customerDescriptions]").val()
        }
        var customerId = $("#dialog_addAndEdit").find("[name=customerId]").val();
        var type = "";
        var url = "";
        if (customerId && customerId != null && customerId > 0) {
            type = "POST";
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
                if (data.resultCode == 1) {
                    $('#dialog_addAndEdit').modal('hide');
                    if (customerId && customerId != null && customerId > 0) {
                        getDataCustomerById(customerId);
                    }
                    alert("Successfully");
                } else {
                    alert(data.resultMessage);
                }
            },
            error: function (data) {
                alert("Fail");
            }
        });
    });
});