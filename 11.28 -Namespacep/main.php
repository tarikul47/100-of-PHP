<?php
namespace CloudStorage;

include "autoloader.php";

//include "mail/mailer.php";

use \CloudStorage\FileSystem\Files\Images\Jpeg;
use \CloudStorage\FileSystem\Scanner;
use \CloudStorage\Mail\Mailer;

class Main
{
    public function __construct()
    {
        echo "Hello from CloudStorage\n";
        new Mailer();
        new Scanner();
        $size = new Jpeg();
        $size->getDimesion();
        //new
    }
}

new Main();
