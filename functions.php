<?php 
function add_files() {
  // リセットCSS
  wp_enqueue_style("reset-style", "https://unpkg.com/destyle.css@2.0.2/destyle.css");
  // googlefonts
  wp_enqueue_style("reset-style", "https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap");
  // メインCSS
  wp_enqueue_style("main_style", get_stylesheet_uri());
}
add_action("wp_enqueue_scripts", "add_files");