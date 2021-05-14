<?php
add_action('after_setup_theme', function() {
    add_image_size('small', 10, 10, true);
    add_image_size('dd', 14, 14, true);
});
