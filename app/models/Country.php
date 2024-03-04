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
                FROM  Country
                                
                ORDER BY Population DESC";

        $this->db->query($sql);

        return $this->db->resultSet();
        
    }
}