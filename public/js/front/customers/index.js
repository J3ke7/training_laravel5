/**
 * Created by tien.nguyen on 6/10/2016.
 */
function deleteCustomer(customerId) {
    if (confirm('Are you sure?')) {
        $('.loadingPanel').toggle();
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
                    $('.loadingPanel').toggle();
                    notifications('success', 'Successfully');
                    reloadDivContent();
                } else {
                    notifications('danger', data.resultMessage);
                }
            },
            error: function (data) {
                $('.loadingPanel').toggle();
                notifications('danger', 'Fail')
            }
        });
    }
}

function reloadDivContent() {
    setInterval(function () {
        $.ajax({
            type: "GET",
            url: "customers/getListCustomers",
            success: function (data) {
                $("#dataTables_tbody").empty();
                if (data.resultCode == 'OK') {
                    var html = "";
                    for (i in data.lstCustomers) {
                        var item = data.lstCustomers[i];
                        var text = '<tr class="gradeA odd" role="row">'
                            + '<td>'
                            + '<samp class="glyphicon glyphicon-edit" name="lk_show_dialog_info"></samp>&nbsp;'
                            + '<samp class="glyphicon glyphicon-trash" name="lk_delete_customer"></samp>'
                            + '<input type="hidden" name="customerId" value="' + item.id + '"/>'
                            + '</td>'
                            + '<td>' + item.name + '</td>'
                            + '<td>' + item.email + '</td>'
                            + '<td>' + item.descriptions + '</td>'
                            + '<td class="center">' + item.created_at + '</td>'
                            + '<td class="center">' + item.updated_at + '</td>'
                            + '</tr>';
                        html += text;
                    }
                    $("#dataTables_tbody").html(html);
                    enableAction();
                }
            },
            error: function (data) {
            }
        });
    }, 1000);
}

function enableAction() {
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
}

$(document).ready(function () {
    enableAction();
});
