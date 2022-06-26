<?php
namespace CloudStorage;

include "autoloader.php";

use CloudStorage\FileSystem\Files\Images\Jpeg;
use \CloudStorage\FileSystem\Scanner;
use \CloudStorage\Mail\Mailer;

class Main
{
    public function __construct()
    {
        new Mailer();
        new Scanner();
        new Jpeg();
    }
}

new Main();
