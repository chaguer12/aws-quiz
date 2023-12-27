<?php
require_once('../classes/db.conf.php');
require_once('../classes/choice.php');
class ChoiceDAO{
    private $db;

    public function __construct(){
        $this->db = Database::getInstance()->getConnection();
    }
    public function getChoices($question_id){
        $query = "SELECT * FROM choice WHERE ID_Question = :question_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":question_id", $question_id);
        $stmt->execute();
        return  $stmt->fetchAll(PDO::FETCH_OBJ);        

    }
    public function checkChoice($choice_id){
        $query = "SELECT * FROM choice WHERE ID_Question = :choice_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":choice_id", $question_id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if($result['status'] == 2){
            return false;
        }
        else{
            return true;
        }
        

}


}