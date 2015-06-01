<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FormFramework\Classes\Widget\WidgetList;
use FormFramework\Classes\Widget\Widget;

/**
 * Description of WidgetList
 *
 * @author Thomas
 */
class WidgetList extends Widget{
    
    protected $inputType = "list";
    protected $arrayList;
    
    function __construct($labelName, $inputName, $arrayList) {
        parent::__construct($labelName, $inputName);
        $this->arrayList = $arrayList;
    }
            
    function render(){
        $render = "<label>" . $this->labelName . "</label><select>";
        foreach ($this->arrayList as $key => $value){
            $render .= "<option>" . $value . "</option>";
        }
        $render .= "</select><br /><br />";
        return $render;
    }
    
    function bind($value){
        // A MODIFIER --> NE MARCHE PAS
        $this->value = $this->arrayList[$key];
    }
}
