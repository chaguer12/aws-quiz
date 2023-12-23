<?php
require_once('../classes/question.php');
require_once('../classes/db.conf.php');
class QuestionDAO{
    private $db;

    public function __construct($db){
        $this->db =Database::getInstance()->getConnection();
    
    }
    public function getQuestion($questionID){
        $query = "SELECT * FROM question where Question_ID = :question_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":question_id", $questionID);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;

    }
}