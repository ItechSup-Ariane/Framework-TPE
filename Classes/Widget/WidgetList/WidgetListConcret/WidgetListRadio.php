<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FormFramework\Classes\Widget\WidgetList\WidgetListConcret;
use FormFramework\Classes\Widget\WidgetList\WidgetList;

/**
 * Description of WidgetListRadio
 *
 * @author Thomas
 */
class WidgetListRadio extends WidgetList {
    
    protected $inputType = "radio";
    
    public function __construct($labelName, $inputName, $arrayList) {
        parent::__construct($labelName, $inputName, $arrayList);
    }
    
    public function render(){
        $render = '<label>' . $this->labelName . '</label><br />';
        foreach ($this->arrayList as $key => $value){
            $render .= '<input type="' . $this->inputType . '" name="' . $this->inputName . '" '
                    . 'value="' . $value . '"/>' . $value . '<br />';
        }
        $render .= '<br />';
        return $render;
    }
    
    // GARDER LA SELECTION SUR LE BIND !!!
}
