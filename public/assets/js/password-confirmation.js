$("#password").on("focusout", function () {
    if ($(this).val() != $("#password_confirmation").val()) {
        $("#password_confirmation").removeClass("valid").addClass("invalid");
    } else {
        $("#password_confirmation").removeClass("invalid").addClass("valid");
    }
});

$("#password_confirmation").on("keyup", function () {
    if ($("#password").val() != $(this).val()) {
        $(this).removeClass("valid").addClass("invalid");
    } else {
        $(this).removeClass("invalid").addClass("valid");
    }
});
