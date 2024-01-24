document.addEventListener('DOMContentLoaded', function () {
    $("#messanger-bt").on("click", function (){
        $("#radio-link").text("мессенджер");
    })
    $("#email-bt").on("click", function (){
        $("#radio-link").text("почта");
    })
    $("#phone-bt").on("click", function (){
        $("#radio-link").text("телефон");
    })
});


