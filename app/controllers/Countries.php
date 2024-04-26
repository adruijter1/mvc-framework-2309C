<?php

class Countries extends BaseController
{
    private $countryModel;

    public function __construct()
    {
        $this->countryModel = $this->model('Country');
    }

    public function index()
    {
        /**
         * Haal de namen van de landen op uit de database
         * en zet deze in een array van objecten
         */
        $countries = $this->countryModel->getCountries();

        /**
         * Maak een lege variabele aan waarin we de rijen (<tr> en <td>) kunnen zetten
         * met info uit de database
         */
        $dataRows = '';

        /**
         * Maak de string met rij-informatie uit de database
         */
        foreach ($countries as $country) {
            $dataRows .= "<tr> 
                            <td>$country->Name</td>
                            <td>$country->CapitalCity</td>
                            <td>$country->Continent</td>
                            <td>" . number_format($country->Population, 0, ',', '.') . "</td>
                         </tr>";
        }

        /**
         * Maak een $data array met info die weergegeven kan worden in de view
         */
        $data = [
            'title' => 'Landen van de Wereld',
            'dataRows' => $dataRows
        ];

        /**
         * Koppel een view aan de controller-method en geef het $data-array mee
         * aan de view
         */
        $this->view('countries/index', $data);
    }

    /**
     * Deze method gaat voor ons een nieuw record toevoegen aan de database
     */
    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {          
            
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $result = $this->countryModel->createCountry($_POST);

            echo    "<div class='alert alert-success' role='alert'>
                        Het inserten is gelukt!                
                    </div>";
            
            header('Refresh:3; ' . URLROOT . '/countries/index');
        }
        
        $data = [
            'title' => 'Voeg een nieuw land toe',
            'name' => 'Dit is een naam',
        ];

        $this->view('countries/create', $data);
    }
}