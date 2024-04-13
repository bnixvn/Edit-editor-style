<?php
add_action( 'admin_init', 'wpdocs_add_editor_styles' );
function wpdocs_add_editor_styles() {
  add_theme_support( 'editor-styles' );
  add_editor_style( 'editor-style.css' );
}
