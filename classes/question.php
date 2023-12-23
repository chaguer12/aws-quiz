<?php
class Question{
    private $question_ID;
    private $question;
    private $description;
    private $id_theme;

    public function __construct($questionID,$question,$description,$id_theme) {
        $this->question_ID = $questionID;
        $this->question = $question;
        $this->description = $description;
        $this->id_theme = $id_theme;
        
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
        return $this->id_theme;
    }
    
    
    
}