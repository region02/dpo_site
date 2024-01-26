function getScrollbarWidth() {
    // Создаем элемент с прокруткой
    var scrollDiv = document.createElement("div");
    scrollDiv.style.width = "100px";
    scrollDiv.style.height = "100px";
    scrollDiv.style.overflow = "scroll";
    scrollDiv.style.position = "absolute";
    scrollDiv.style.top = "-9999px";
    document.body.appendChild(scrollDiv);

    // Вычисляем ширину скролла
    var scrollbarWidth = scrollDiv.offsetWidth - scrollDiv.clientWidth;

    // Удаляем временный элемент
    document.body.removeChild(scrollDiv);

    return scrollbarWidth;
}

// Получаем ширину скролла




$(document).ready(function() {
    const scrollWidth=getScrollbarWidth();
    $('#open-modal').on('click', function() {
        $('#modal, #modal-overlay').toggleClass('hidden');
        $('body').toggleClass('overflow-hidden');
        $('body').css('margin-right', scrollWidth );
    });

    $(document).on('click', '#close-modal', function() {
        $('#modal, #modal-overlay').toggleClass('hidden');
        $('body').toggleClass('overflow-hidden');
        $('body').css('margin-right', 0 );
    });

    $(document).on('click', function(event) {
        if (!$('#modal').hasClass('hidden') && !$(event.target).closest('.filter-modal__window').length && !$(event.target).closest('#open-modal').length) {
            $('#modal, #modal-overlay').toggleClass('hidden');
            $('body').toggleClass('overflow-hidden');
            $('body').css('margin-right', 0 );
        }
    });
});
