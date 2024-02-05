document.addEventListener('DOMContentLoaded', function () {
    $("#phone-bt").on("click", function (){
        $("#radio-link")

            .text("телефон")

        $("#contact")
            .val("")
            .attr({
                'type': 'tel',
                'autocomplete': 'tel',
                'maxlength': '12'
            });
    });

    $("#email-bt").on("click", function (){
        $("#radio-link")

            .text("почта")

        $("#contact")
            .val("")
            .attr({
                'type': 'email',
                'name': 'contact',
                'autocomplete': 'email'
            });
    });

    $("#messanger-bt").on("click", function (){
        $("#radio-link")

            .text("мессенджер")

        $("#contact")
            .val("")
            .attr({
                'type': 'text',
                'name': 'contact',
                'autocomplete': 'off'
            });
    });
});
