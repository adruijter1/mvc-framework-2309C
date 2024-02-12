<?php

class Instructeurs extends BaseController
{


    public function index($firstname = NULL, $infix = NULL, $lastname = NULL)
    {
        /**
         * In het $data-array zet je alle info die de view nodig heeft
         */
        $data = [
            'title' => 'Instructeurspagina',
            'firstname' => $firstname
        ];

        /**
         * Door het aanroepen van de view-method uit de BaseControllers-class
         * laat je alle view-gegevens op het scherm 
         */
        $this->view('Instructeurs/index', $data);
    }
}