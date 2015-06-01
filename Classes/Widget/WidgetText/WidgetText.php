<?php

namespace FormFramework\Classes\Widget\WidgetText;
use FormFramework\Classes\Widget\Widget;
use FormFramework\Classes\Validator\ValidatorText;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of text
 *
 * @author Thomas
 */
class WidgetText extends Widget{
    
    protected $inputType = "text";
    
    function __construct($labelName, $inputName) {
        parent::__construct($labelName, $inputName);
    }
    
    function render(){
        $render = '<label>' . $this->labelName . '</label><br />'
                . '<input type="' . $this->inputType . '" name="' . $this->inputName;

        if ($this->value <> null){
            $render .= '" value="' . $this->value;
        }
        
        $render .= '"/><br /><br />';
       
        return $render;
    }
    
    function createValidator(){
        $valid = new ValidatorText($this->value);
        $response = $valid->validate();
        return $response;
    }
}
