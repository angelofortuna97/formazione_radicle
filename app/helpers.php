<?php


function get_svg($filename)
{
    $file_path = get_theme_file_path('resources/images/icons/' . $filename);
    if (file_exists($file_path)) {
        return file_get_contents($file_path);
    }
    return '';
}
