/**
 * Created by tien.nguyen on 6/10/2016.
 */
(function ($) {
    $(document).ready(function () {
        $("[name=bnt-show-dialog-info]").click(function () {
            var customerId = 1;
            $.ajax({
                    url: 'customers/get/' + customerId,
                    type: 'GET',
                    dataType: 'json',
                    data: {}
                })
                .done(function (data) {
                    jQuery.parseJSON(data)
                    $("#dialog-edit").modal('show');
                })
                .fail(function () {
                    alert('fail');
                });
        });
    });
})(jQuery);