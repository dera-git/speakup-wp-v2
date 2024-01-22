(function($) {
    "use strict";
    $(document).ready(function(){

        $('input[name="partenaire[]"').change(function(){
            var filter = $('#filter');
            $.ajax({
                url: filter.attr('action'),
                data: filter.serialize(),
                type: filter.attr('method'),
                beforeSend: function(xhr){
                    filter.find('button').text('Processing...');
                },
                success: function(data){
                    filter.find('button').text('Apply filter');
                    $('#id-filtered-results-container').html(data);
                    console.log(data);
                }
            });
            return false;
        });

    });
})(jQuery);
