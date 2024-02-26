<?php

class Instructeurs extends BaseController
{
    /**
     * Deze index method is er voor de Instructeurs/index view
     */
    public function index($firstname = NULL, $infix = NULL, $lastname = NULL)
    {
                
        /**
         * In het $data-array zet je alle info die de view nodig heeft
         */
        $data = [
            'title' => 'Instructeurspagina',
            'firstname' => $firstname,
            'infix' => $infix,
            'lastname' => $lastname
        ];

        /**
         * Door het aanroepen van de view-method uit de BaseControllers-class
         * laad je alle view-gegevens op het scherm 
         */
        $this->view('Instructeurs/index', $data);
    }
}