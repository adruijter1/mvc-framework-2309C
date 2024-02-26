<?php

class Country
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }


    public function getCountries()
    {
        $sql = "SELECT Id
                      ,Name
                      ,CapitalCity
                      ,Continent
                      ,Population
                FROM  Country";

        $this->db->query($sql);

        
    }
}