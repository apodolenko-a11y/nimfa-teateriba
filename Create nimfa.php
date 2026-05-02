<?php
/*
Plugin Name: Nimfa Teateriba
Description: Kaib kuues paev,kui ma uritan teha projektide nadalat.
Version: 1.0
Author: Nimfa
*/


add_action('admin_menu', function() {
    add_menu_page('Nimfa Teateriba', 'Nimfa Teateriba', 'manage_options', 'nimfa', function() {

        if (isset($_POST['text'])) {
            update_option('nimfa_text', sanitize_text_field($_POST['text']));
        }

        $text = get_option('nimfa_text', 'Minu teateriba');

        echo '<h1>Nimfa Teateriba</h1>';
        echo '<form method="post">';
        echo '<input type="text" name="text" value="'.esc_attr($text).'">';
        echo '<input type="submit" value="Save">';
        echo '</form>';
    });
});


add_action('wp_head', function() {

    $text = get_option('nimfa_text', 'Minu teateriba');

    echo '<div style="position:fixed;top:0;left:0;width:100%;background:red;color:white;text-align:center;padding:10px;z-index:9999;">
    <span onclick="this.parentElement.style.display=\'none\'" style="float:right;margin-right:20px;cursor:pointer;">×</span>
    '.esc_html($text).'
    </div>';

});
