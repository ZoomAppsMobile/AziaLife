$( ".kazina-response" ).on( "submit", function( event ) {
    event.preventDefault();
    $.ajax({
        type: 'GET',
        url: '/calculator/kazina-response',
        // dataType: 'json',
        data: $(this).serialize(),
        cache: false,
        success: function(response){
            var response = JSON.parse(response);
            $('.response').show();
            $('.number').val(response.number);
            $('.OutADB').val(response.OutADB);
            $('.OutATPD').val(response.OutATPD);
            $('.OutTT').val(response.OutTT);
            $('.OutCI').val(response.OutCI);
            $('.OutTD').val(response.OutTD);
            $('.OutHD').val(response.OutHD);
            $('.OutTPD').val(response.OutTPD);
        },
        error: function(){
            alert('Ошибка');
        }
    });
});