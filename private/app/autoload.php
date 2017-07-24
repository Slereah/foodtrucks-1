<?php 

function autoload($directory, $fileRegEx)
{
    $directoryContent = scandir($directory);

    foreach ($directoryContent as $file) 
    {
        if ( preg_match($fileRegEx, $file) ) 
        {
            include_once $directory.$file;
        }
    }
}

//define("VIEWS_DIRECTORY", "../private/views");
//define("VIEWS_FILES", "/^.*.php$/");
define("FUNCTIONS_DIRECTORY", "../private/functions/");
define("FUNCTION_FILES", "/^fnc-.*php$/i");


?>