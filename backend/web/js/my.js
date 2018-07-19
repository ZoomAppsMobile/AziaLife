$('.add_options').click(function(e){
    e.preventDefault();
    $('.copyMe').clone().appendTo('.copyTo').attr('class','copyMe_open').show();
});
$('.add_options1').click(function(e){
    e.preventDefault();
    $('.copyMe_1').clone().appendTo('.copyTo_1').attr('class','copyMe_open_1').show();
});
function remove(obj) {
    $(obj).parent('div').remove();
}