<?php

session_start();

redirect();

function redirect()
{
    include_once('config.inc.php');

    echo '<p style="visibility:hidden">' . $_GET['page'] . '</p>';

    if (isset($_GET['page'])) 
    {
        if (isset($pages[$_GET['page']]) && file_exists("{$pages[$_GET['page']]['file']}.php")) 
        {
            $find = $pages[$_GET['page']];
        }
        else 
        { 
            $find = $error_page;
            echo "Error! Page not found!";
            header("HTTP/1.0 404 Not Found");
        }
    }
    else
    {
        $find = $pages['/'];
    } 

    include($find['file'].'.php');
}