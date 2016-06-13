/**
 * Created by tien.nguyen on 6/13/2016.
 */
function getDataCustomerById(customerId) {
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
            }
        },
        error: function (data) {
            alert('fail');
        }
    });
}

$(document).ready(function () {
    $("#bnt_showInfo_edit").click(function () {
        var customerId = $("#dialog_info").find("[name=customerId]").val();
        
    });
});


