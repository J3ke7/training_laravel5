/**
 * Created by tien.nguyen on 6/10/2016.
 */
function deleteCustomer(customerId) {
    if (confirm('Are you sure?')) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'DELETE',
            url: 'customers/delete/' + customerId,
            success: function (data) {
                if (data.resultCode == 'OK') {
                    alert('Successfully');
                    location.reload();
                } else {
                    alert(data.resultMessage);
                }
            },
            error: function (data) {
                alert('Fail');
            }
        });
    }
}

$(document).ready(function () {
    $("[name=lk_show_dialog_info]").click(function () {
        var customerId = $(this).closest("tr").find("[name=customerId]").val();
        getDataCustomerById(customerId);
    });
    $("[name=btn_add_customer]").click(function () {
        resetValueFormDailog();
        $("#dialog_addAndEdit").modal("show");
    });
    $("[name=lk_delete_customer]").click(function () {
        var customerId = $(this).closest("tr").find("[name=customerId]").val();
        deleteCustomer(customerId);
    });
});
