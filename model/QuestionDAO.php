<?php
require_once('../classes/question.php');
require_once('../classes/db.conf.php');
class QuestionDAO
{
    private $db;


    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
 
    }
    public function getQuestion($questionID)
    {
        $query = "SELECT * FROM question where Question_ID = :question_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":question_id", $questionID);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }
    public function getQuestions() {
        $query = "SELECT * FROM question";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        
        $qst= array();
        foreach($result as $question){
            $qst[] = new Question($question->Question_ID,$question->Question_Asked,$question->Description);           
        }
        shuffle($qst);
        
        return $qst;

}


}



