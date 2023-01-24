$('button').on('click', function() {
    if ($('p').css('display') == 'none') {
        $('p').css('display', 'block');
    } else  {
        $('p').css('display', 'none');
    }
});