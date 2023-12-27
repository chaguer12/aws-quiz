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
    public function checkChoice($question_id){
        $query = "SELECT * FROM choice WHERE ID_Question = :question_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":question_id", $question_id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if($result['status'] == 2){
            return false;
        }
        else{
            return true;
        }
        

}

    public function correctAnswer($question_id){
        $query = "SELECT * FROM choice WHERE ID_Question = :questionID AND status = 1";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":questionID", $question_id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if($result['Choice_ID'] == $question_id ){
            return;

        }else{

        }
        



    }
}