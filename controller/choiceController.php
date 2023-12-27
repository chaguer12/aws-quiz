<?php
require_once('../model/ChoiceDAO.php');
class ChoiceCTRL{
    private $choices;

    public function __construct(){
        $this->choices = new ChoiceDAO();

    }
    public function DisplayChoices($question_id){
       return $this->choices->getChoices($question_id);
    }

}