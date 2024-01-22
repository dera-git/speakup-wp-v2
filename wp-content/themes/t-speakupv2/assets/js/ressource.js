(function($) {
    "use strict";
    $(document).ready(function(){

        $('input[name="ressource[]"').change(function(){
            var filter = $('#id-filter-ressource');
            $.ajax({
                url: filter.attr('action'),
                data: filter.serialize(),
                type: filter.attr('method'),
                beforeSend: function(xhr){
                    filter.find('button').text('Processing...');
                },
                success: function(data){
                    filter.find('button').text('Apply filter');
                    $('#id-filtered-ressource-container').html(data);
                }
            });
            return false;
        });

    });
})(jQuery);