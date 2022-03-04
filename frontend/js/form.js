$("#modal__sumbit").on('click', function () {
    var success;
    success = true;
    $("#modal *[type='text']").each(function () {
        var previous = this.previousElementSibling;
        if (this.value == ""){
            $(this).addClass("error");

            if (!$(previous).hasClass("inp-error")){
                $(previous).after('<label class="inp-error">Неправильно заполнено поле</label>');
            }
        }else {
            $(this).removeClass("error");
            if ($(previous).hasClass("inp-error")){
                $(previous).remove()
            }
        }
    });
    $("#modal *[type='email']").each(function () {
        var previous = this.previousElementSibling;
        var email = $(this).val();
        if (!validateEmail(email)){
            $(this).addClass("error");
            if (!$(previous).hasClass("inp-error")){
                $(previous).after('<label class="inp-error">Неправильно заполнен email</label>');
            }
        }else {
            $(this).removeClass("error");
            if ($(previous).hasClass("inp-error")){
                $(previous).remove()
            }
        }
    });
    $("#modal input").each(function () {
        if($(this).hasClass("error")){
            success = false;
        }
    });
    $("#modal textarea").each(function () {
        if($(this).hasClass("error")){
            success = false;
        }
    });
    if(success){
        $.ajax({
            url: "/frontend/ajax/processform.php",
            type: "POST",
            data: {
                "senderName" : $("#modal__name").val(),
                "senderEmail" : $("#modal__email").val(),
                "message" : $("#modal__message").val(),
                "phoneNumber": $("#modal__phone").val(),
            },
            success: function(response){
                $(".modal__main-container").html('<h3 class="modal__title">спасибо.<br>ваша заявка отправлена</h3>')
            }
        });
    }
});

function validateEmail(email) {
    var pattern  = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return pattern .test(email);
}
