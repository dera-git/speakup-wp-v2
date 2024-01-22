(function ($) {
$('#id-load-more-button').click(function(){
    $(this).hide();
    $('.kl-box-actus').removeAttr('style');
    return false;
});

// if($('.kl-category-element').hasClass('active')){
//     $('.kl-all-categories').removeClass('active');
// }

})(jQuery);