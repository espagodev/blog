$(document).ready(function () {

    $(document).on("click", ".btn-modal", function (e) {
        e.preventDefault();
        var container = $(this).data("container");
        $.ajax({
            url: $(this).data("href"),
            dataType: "html",
            success: function (result) {
                $(container).html(result).modal("show");
            },
        });
    });

    
    $(".view").on("shown.bs.modal", function () {
       
    });

});