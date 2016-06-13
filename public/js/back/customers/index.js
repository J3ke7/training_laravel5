/**
 * Created by tien.nguyen on 6/10/2016.
 */
$(document).ready(function () {
    $("[name=bnt_show_dialog_info]").click(function () {
        var customerId = $(this).closest("tr").find("[name=customerId]").val();
        getDataCustomerById(customerId);
    });
});
