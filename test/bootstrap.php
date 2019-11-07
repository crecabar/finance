<?php
/**
 * @file   bootstrap.php
 * @author Cristian Recabarren
 * @date   02-11-2016
 * @time   10:07
 */

/**
 * Function path2vendor: it returns the path to vendor/autoload.php
 * @param  string $file
 * @return string
 */
function path2file($file)
{
    $path = '';
    $count = 0;
    $depth = preg_match_all('$\/|\\\$', dirname(__FILE__), $out);
    while (!file_exists($path . $file) && $count < $depth) {
        $path .= '../';
        $count++;
    }
    if (file_exists($path . $file)) {
        return $path . $file;
    } else {
        return "File not found";
    }
}
require path2file('vendor/autoload.php');
ini_set('precision', 14);
ini_set('serialize_precision', 14);