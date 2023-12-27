<?php
class Choice{
    private $choice_id;
    private $choice_name;
    private $status;
    private $question_id;

    public function __construct($choice_id=null, $choice_name=null, $status=null, $question_id=null){
    $this->choice_id = $choice_id;
    $this->choice_name = $choice_name;
    $this->status = $status;
    $this->question_id = $question_id;

    }
    public function getChoiceId(){
        return $this->choice_id;
    }
    public function getChoiceName(){
        return $this->choice_name;
    }
    public function getChoiceStat(){
        return $this->status;
    }
    public function getQuestionID(){
        return $this->question_id;
    }

}