<?php
/*
Plugin Name: Nimfa Teateriba
*/

add_action('wp_head','nimfa_bar');

function nimfa_bar(){

echo '<style>
#nimfa-bar{
position:fixed;
top:0;
left:0;
width:100%;
background:red;
color:white;
text-align:center;
padding:15px;
z-index:9999;
}
body{margin-top:60px;}
</style>';

echo '<div id="nimfa-bar">
<span onclick="this.parentElement.style.display=\'none\'" style="cursor:pointer;float:right;margin-right:20px;">×</span>
Minu teateriba
</div>';

}
