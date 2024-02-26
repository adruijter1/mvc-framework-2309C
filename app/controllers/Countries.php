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
        $result = $this->countryModel->getCountries();

        var_dump($result);

        $data = [
            'title' => 'Landen van de Wereld'
        ];

        $this->view('countries/index', $data);
    }
}