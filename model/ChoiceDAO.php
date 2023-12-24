<?php
require_once('../classes/db.conf.php');
require_once('../classes/choice.php');
class ChoiceDAO{
    private $db;

    public function __construct($db){
        $this->db = Database::getInstance()->getConnection();
    }
    public function getChoices($question_id){
        $query = "SELECT * FROM choice WHERE ID_Question = :question_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":question_id", $question_id);
        $stmt->execute();
        


    }
}