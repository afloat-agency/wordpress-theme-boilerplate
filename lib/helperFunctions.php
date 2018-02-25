<?php

/**
 * Dump a variable in nice <pre> tags then die
 */
function dd($var)
{
    echo '<pre>';

    if (!isset($var)) {
        echo 'No value passed to dd function.';
    }

    var_dump($var);

    echo '</pre>';
    die();
}
