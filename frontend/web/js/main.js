$( ".bolashak-response" ).on( "submit", function( event ) {
    event.preventDefault();
    $.ajax({
        type: 'GET',
        url: '/calculator/bolashak-response',
        dataType: 'json',
        data: $(this).serialize(),
        cache: false,
        success: function(response){
            $('.response').show();
            $('.number').val(response.number);
            $('.OutADB').val(response.OutADB);
            $('.OutATPD').val(response.OutATPD);
            $('.OutTT').val(response.OutTT);
            $('.OutCI').val(response.OutCI);
            $('.OutTD').val(response.OutTD);
            $('.OutHD').val(response.OutHD);
            $('.OutTPD').val(response.OutTPD);
            $('.OutDB').val(response.OutDB);
            $('.OutTTV').val(response.OutTTV);
        },
        error: function(){
            alert('Ошибка');
        }
    });
});
$( ".kazina-response" ).on( "submit", function( event ) {
    event.preventDefault();
    $.ajax({
        type: 'GET',
        url: '/calculator/kazina-response',
        dataType: 'json',
        data: $(this).serialize(),
        cache: false,
        success: function(response){
            // var response = JSON.parse(response);
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
$( ".osrns-response" ).on( "submit", function( event ) {
    event.preventDefault();
    $.ajax({
        type: 'GET',
        url: '/calculator/osrns-response',
        dataType: 'json',
        data: $(this).serialize(),
        cache: false,
        success: function(response){
            $('.response').show();
            $('.premKz').html(response.premKz);
            $('.sumStrahKz').html(response.sumStrahKz);
            // $('.err').val(response.err);
            // $('.result').val(response.result);
        },
        error: function(){
            alert('Ошибка');
        }
    });
});
$( ".mst-response" ).on( "submit", function( event ) {
    event.preventDefault();
    $.ajax({
        type: 'GET',
        url: '/calculator/mst-response',
        dataType: 'json',
        data: $(this).serialize(),
        cache: false,
        success: function(response){
            $('.response').show();
            $('.premKz').val(response.premKz);
            $('.kurs').val(response.kurs);
            $('.sumStrahKz').val(response.sumStrahKz);
            $('.premEur').val(response.premEur);
            if(response.err){
                $('.err_div').show();
                $('.err').val(response.err);
            }

        },
        error: function(){
            alert('Ошибка');
        }
    });
});
$(".insuranceProgramm").change(function(){
    if($(this).val()==2)
        $('.rprogSrok').removeAttr("disabled");
    else
        $('.rprogSrok').attr("disabled", "disabled");
});
$(".rprogSrok").change(function(){
    $('.rprogMaxDays1').hide();
    $('.rprogMaxDays2').hide();
    $('.rprogMaxDays3').hide();
    if($(this).val()==1)
        $('.rprogMaxDays1').removeAttr("disabled").show();
    if($(this).val()==2)
        $('.rprogMaxDays2').removeAttr("disabled").show();
    if($(this).val()==3)
        $('.rprogMaxDays3').removeAttr("disabled").show();
    if($(this).val()==0)
        $('.rprogMaxDays1').attr("disabled", "disabled").show();
});
$('select[name="country1"]').change(function(){
    if($(this).val()==0)
        $('.sumStrah1').attr("disabled", "disabled").show();
    else
        $.ajax({
            type: 'GET',
            url: '/calculator/country-type',
            data: {id: $(this).val()},
            success: function(response){
                $('.sumStrah1').hide();
                $('.sumStrah2').hide();
                $('.sumStrah3').hide();
                if(response==1)
                    $('.sumStrah1').removeAttr("disabled").show();
                if(response==2)
                    $('.sumStrah2').removeAttr("disabled").show();
                if(response==3)
                    $('.sumStrah3').removeAttr("disabled").show();
            },
            error: function(){
                alert('Ошибка');
            }
        });
});