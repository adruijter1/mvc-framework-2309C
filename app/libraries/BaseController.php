<?php

class BaseController
{

    public function view($view, $data = [])
    {
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once('../app/views/' . $view . '.php');
        } else {
            echo 'View bestaat niet';
        }
    }
}