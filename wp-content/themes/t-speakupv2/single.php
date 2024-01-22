<?php
if(get_post_type() == "post"){
    get_template_part("templates/single/single-actus");
}
if(get_post_type() == "programme"){
    get_template_part("templates/single/single-programme");
}
?>

