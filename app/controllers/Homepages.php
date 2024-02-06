<?php

class Homepages
{

    public function index()
    {
        echo "Homepage";
        // Maak een hyperlink van deze plek naar de Instructeurs/index method

        echo '<a href="Instructeurs/index">Naar instructeurspagina</a>';
    }
}