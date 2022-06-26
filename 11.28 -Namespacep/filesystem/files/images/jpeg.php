<?php
namespace CloudStorage\FileSystem\Files\Images;

class Jpeg implements \CloudStorage\FileSystem\Files\Contracts\imageContract
{
    public function getDimesion()
    {
        echo "100";
    }
}
