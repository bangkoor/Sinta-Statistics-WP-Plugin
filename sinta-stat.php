<?php
/*
  Plugin Name: Sinta Statistics
  Description: Menampilkan statistik penulis di Sinta
  Version: 1.0.0
  Author: Arif Kurnia Wijayanto, M.Sc
  Author URI: https://akwijayanto.com
  License: GPLv2
*/

require_once plugin_dir_path(__FILE__) . 'includes/sinta-functions.php';

add_shortcode("sinta", "tampil_sinta"); 
?>
