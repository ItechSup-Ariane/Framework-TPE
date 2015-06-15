<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FormFramework\Classes\Widget\WidgetList\WidgetListConcret;
use FormFramework\Classes\Widget\WidgetList\WidgetList;

/**
 * Class WidgetListSimple
 */
class WidgetListSimple extends WidgetList{
    
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
        $render .= '<select name="' . $this->inputName . '">';
        foreach ($this->arrayList as $key => $value){
            $render .= '<option value="' . $value . '">' . $value . '</option>';
        }
        $render .= '</select><br /><br />';
        return $render;
    }
}
