<?php

class ThemeDAO{
    private $theme_id;
    private $theme_name;

    public function __construct($theme_id,$theme_name)
    {
        $this->theme_id = $theme_id;
        $this->theme_name = $theme_name;        
    }

    public function get_Thm_id(){
        return $this->theme_id;
    }
    public function get_Thm_name(){
        return $this->theme_name;
    }
    public function getThemes(){
        $query = "SELECT * FROM theme";
        $conn = Database::getInstance();
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }



}