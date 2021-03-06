<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FormFramework\Classes\Widget\WidgetList\WidgetListConcret;
use FormFramework\Classes\Widget\WidgetList\WidgetList;

/**
 * Class WidgetListCheck
 *
 * <ul>
 * <li>@var protected $inputType: list type (radio, check, simple, multiple)</li>
 * </ul>
 */
class WidgetListCheck extends WidgetList{
    
    protected $inputType = "checkbox";
    
    /**
     * __construct function
     * @param type $labelName
     * @param type $inputName
     * @param type $arrayList
     */
    public function __construct($labelName, $inputName, $arrayList) {
        parent::__construct($labelName, $inputName, $arrayList);
    }
    
    /**
     * render function
     * @return string
     */
    public function render(){
        $render = '<label>' . $this->labelName . '</label><br />';
        foreach ($this->arrayList as $key => $value){
            $render .= '<input type="' . $this->inputType . '" name="' . $this->inputName . '" '
                    . 'value="' . $value . '"/>' . $value . '<br />';
        }
        $render .= '<br />';
        return $render;
    }
    
    // BIND OK ?
}
