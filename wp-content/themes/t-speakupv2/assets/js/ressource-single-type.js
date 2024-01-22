(function($) {
    "use strict";
    $(document).ready(function(){

        $(".kl-select-thematiqueR").select2({
            placeholder: 'Toutes',
            // allowClear: true,
            width: '100%',
            minimumResultsForSearch: Infinity,
            selectionCssClass: "kl-select2-thematiqueR",
            dropdownCssClass: "kl-dropdown-thematiqueR",
            containerCssClass : "kl-select2-container"
        });

        jQuery( '.js-select-thematiqueR' ).on( "change", function() {
            $('#id-form-filter-thematiqueR').submit();
        });

        $('#id-form-filter-thematiqueR').submit(function(event) {
            
            event.preventDefault();
            let data = $('#id-form-filter-thematiqueR').serialize() + '&action=ressourceType';
            let loader = '<div class="text-center kl-mt-60 mb-5"><div class="kl-spinner-loader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div>';
           
            $.ajax({
                url: urlAjaxRessourceType.ajaxUrl,
                data : data,
                type : 'POST',
                beforeSend : function ( xhr ) {
                    $('.kl-content-filter-ressourceType').html( loader );
                },
                success : function( data ) {
                    if ( data ) {
                        $('.kl-content-filter-ressourceType').html( data.posts );
                    } else {
                        $('.kl-content-filter-ressourceType').html( 'No posts found.' );
                    }
                }
            });
        });

    });
   
})(jQuery);
