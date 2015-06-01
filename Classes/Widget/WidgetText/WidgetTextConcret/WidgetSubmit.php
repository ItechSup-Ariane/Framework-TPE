<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FormFramework\Classes\Widget\WidgetText\WidgetTextConcret;
use FormFramework\Classes\Widget\WidgetText\WidgetText;

/**
 * Description of WidgetSubmit
 *
 * @author Thomas
 */
class WidgetSubmit extends WidgetText {
    
    protected $inputType = "submit";
    
    function __construct($labelName, $inputName) {
        parent::__construct($labelName, $inputName);
    }
    
    function render() {
        // chaîne de caractères à retourner
        return '<input type="' . $this->inputType . '" name="' . $this->inputName . '" value="' . $this->labelName . '"/><br /><br />';
    }
}
