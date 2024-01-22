(function($) {
    "use strict";
    $(document).ready(function(){

        jQuery( '.js-pole input[name="poles[]"]' ).on( "change", function() {
            $('input[name="all"]').prop("checked",false);
            $('#id-form-filter-team').submit();
        });
        jQuery( 'input[name="all"]' ).on( "change", function() {
            $('input[name="poles[]"]').prop("checked",false);
            $('#id-form-filter-team').submit();
        });
        
        $('#id-form-filter-team').submit(function(event) {
            
            event.preventDefault();
            let data = $('#id-form-filter-team').serialize() + '&action=filterposts';
            let loader = '<div class="text-center mb-5"><div class="kl-spinner-loader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div>';
           
            $.ajax({
                url: wpAjax.ajaxUrl,
                data : data,
                type : 'POST',
                beforeSend : function ( xhr ) {
                    $('.kl-filtered-content').html( loader );
                    $('.js-input-radio').attr( 'disabled', 'disabled' );
                },
                success : function( data ) {
                    if ( data ) {
                        $('.kl-filtered-content').html( data.posts );
                        $('.js-input-radio').removeAttr('disabled');
                    } else {
                        $('.kl-filtered-content').html( 'No posts found.' );
                    }
                }
            });
        });

    });
   
})(jQuery);
