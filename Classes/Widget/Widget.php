<?php

namespace FormFramework\Classes\Widget;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of widget
 *
 * @author Thomas
 */
abstract class Widget {

    protected $labelName;
    protected $inputType;
    protected $inputName;
    protected $value = null;
            
    function __construct($labelName, $inputName){
        $this->labelName = $labelName;
        $this->inputName = $inputName;
    }
    
    function bind($value){
        $this->value = $value;
    }
    
    function getName(){
        return $this->inputName;
    }
}
