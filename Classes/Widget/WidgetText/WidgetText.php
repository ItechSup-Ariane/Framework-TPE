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
 * Class WidgetText
 *
 * <ul>
 * <li>@var protected $inputType: widget type</li>
 * </ul>
 */
class WidgetText extends Widget{
    
    protected $inputType = "text";
    
    /**
     * __construct function
     * @param type $labelName
     * @param type $inputName
     */
    public function __construct($labelName, $inputName) {
        parent::__construct($labelName, $inputName);
    }
    
    /**
     * render function
     * @return string
     */
    public function render(){
        $render = '<label>' . $this->labelName . '</label><br />'
                . '<input type="' . $this->inputType . '" name="' . $this->inputName;

        if ($this->value <> null){
            $render .= '" value="' . $this->value;
        }
        
        $render .= '"/><br /><br />';
       
        return $render;
    }
    
    /**
     * createValidator function
     * @return type
     */
    public function createValidator(){
        $valid = new ValidatorText($this->value);
        $response = $valid->validate();
        return $response;
    }
}
