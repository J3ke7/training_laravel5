/**
 * Created by tien.nguyen on 6/13/2016.
 */
function getDataCustomerById(customerId) {
    $('.loadingPanel').toggle();
    $.ajax({
        type: "GET",
        url: 'customers/get/' + customerId,
        success: function (data) {
            if (data && data != null) {
                $("#dialog_info").find("[name=customerId]").val(data.id);
                $("#dialog_info").find("[name=customerName]").text(data.name);
                $("#dialog_info").find("[name=customerEmail]").text(data.email);
                $("#dialog_info").find("[name=customerDescriptions]").text(data.descriptions);
                $('#dialog_info').modal('show');
                $('.loadingPanel').toggle();
            }
        },
        error: function (data) {
            $('.loadingPanel').toggle();
            notifications('danger', 'Fail');
        }
    });
}

$(document).ready(function () {
    $("#bnt_showInfo_edit").click(function () {
        var customerId = $("#dialog_info").find("[name=customerId]").val();
        getDataEditCustomerById(customerId);
        $('#dialog_info').modal('hide');
    });
});


