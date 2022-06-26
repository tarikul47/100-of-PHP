<?php
// CloudStorage\Mail\Mailer

spl_autoload_register(function ($fileName) {
    $path = strtolower(str_replace('CloudStorage\\', '', $fileName));
    $path = str_replace('\\', '/', $path);
    //echo $path;
    include "$path.php";
    //die();
});
