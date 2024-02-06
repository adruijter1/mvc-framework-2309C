<?php

class Instructeurs
{


    public function index($firstname = NULL, $infix = NULL, $lastname = NULL)
    {
        echo "Hallo " . $firstname . " " . $infix . " " . $lastname;
    }
}