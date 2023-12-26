<?php
include 'theme.php';
class Question{
    private $question_ID;
    private $question;
    private $description;
    private Theme $theme;

    public function __construct($question_ID = null,$question = null ,$description = null ,Theme $theme = null) {
        $this->question_ID = $question_ID;
        $this->question = $question;
        $this->description = $description;
        $this->theme = new Theme();
        

        
    }
    public function getQuestionID(){
        return $this->question_ID;
    }
    public function getQuestion(){
        return $this->question;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getIdTheme(){
        return $this->theme;
    }
    public function setQuestionID($question_id){
        $this->question_ID = $question_id;
    }
    public function setDescription($description){
        $this->description = $description;
    }
    public function setQuestion($question){
        $this->question = $question;
    }
    public function setIdTheme(Theme $theme){
        $this->theme = $theme;
    }

    
    
    
}