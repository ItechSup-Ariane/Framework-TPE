<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FormFramework\Classes\Widget\WidgetList\WidgetListConcret;
use FormFramework\Classes\Widget\WidgetList\WidgetList;

/**
 * Description of WidgetListMultiple
 *
 * @author Thomas
 */
class WidgetListMultiple extends WidgetList {
    
    function __construct($labelName, $inputName, $arrayList) {
        parent::__construct($labelName, $inputName, $arrayList);
    }
    
    function render(){
        $render = '<label>' . $this->labelName . '</label><br />';
        $render .= '<select multiple="multiple" name="' . $this->inputName . '[]">';
        foreach ($this->arrayList as $key => $value){
            $render .= '<option value="' . $value . '">' . $value . '</option>';
        }
        $render .= '</select><br /><br />';
        return $render;
    }
    
    // Nouveau render selon l'affichage : avant choix et apres choix
}
