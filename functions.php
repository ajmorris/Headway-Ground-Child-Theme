<?php

add_action('headway_setup_child_theme', 'hgct_remove_theme_support');

function hgct_remove_theme_support() {
	remove_theme_support('headway-design-editor');
	remove_theme_support('headway-structure-css');
}