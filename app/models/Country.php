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

    public function createCountry($post)
    {
        /**
         * Maak een query om een nieuw land toe te voegen aan de database
         */
        $sql = "INSERT INTO Country   (  Name
                                        ,CapitalCity
                                        ,Continent
                                        ,Population) 
                VALUES                (  :name
                                        ,:capitalCity
                                        ,:continent
                                        ,:population)";

        /**
         * Maak de query klaar voor het database-object
         */
        $this->db->query($sql);

        /**
         * Bind de waarden aan de query
         */
        $this->db->bind(':name', $post['countryInput'], PDO::PARAM_STR);
        $this->db->bind(':capitalCity', $post['capitalCityInput'], PDO::PARAM_STR);
        $this->db->bind(':continent', $post['continentInput'], PDO::PARAM_STR);
        $this->db->bind(':population', $post['populationInput'], PDO::PARAM_INT);

        /**
         * Voer de query uit
         */
        $this->db->execute();
    }


    public function updateCountry($countryId)
    {
        $sql = "SELECT Id
                      ,Name
                      ,CapitalCity
                      ,Continent
                      ,Population
                FROM  Country
                WHERE Id = :id";
        

        $this->db->query($sql);

        $this->db->bind(':id', $countryId, PDO::PARAM_INT);

        return $this->db->single();
    }
}