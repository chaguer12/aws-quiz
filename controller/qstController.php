<?php
require_once('../model/QuestionDAO.php');
class QstController{
private $questions;
    
    public function __construct()
    {
        $this->questions = new QuestionDAO();
 
    }
    public function DisplayQuestions(){
        return $ttl_questions = $this->questions->getQuestions();
    }
}

// $c = new QstController();
// $v = $c->DisplayQuestions();
// print_r($v);
