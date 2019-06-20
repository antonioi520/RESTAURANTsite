<?php
/*
 * This file allows you auto load classes
 * without having to include them on the page.
 */
function load_lib($class) {
    include 'lib/PHPMailer-master/src/'.$class . '.php';
};
spl_autoload_register('load_lib');