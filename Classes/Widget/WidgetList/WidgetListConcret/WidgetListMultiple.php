<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FormFramework\Classes\Widget\WidgetList\WidgetListConcret;
use FormFramework\Classes\Widget\WidgetList\WidgetList;

/**
 * Class WidgetListMultiple
 *
 * <ul>
 * <li>@var protected $inputType: list type (radio, check, simple, multiple)</li>
 * <li>@var protected $value : input values, stored in an array</li>
 * </ul>
 */
class WidgetListMultiple extends WidgetList {
    
    protected $inputType = "multiple";
    protected $value = array();
    
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
        $render .= '<select multiple="' . $this->inputType . '" name="' . $this->inputName . '[]">';
        foreach ($this->arrayList as $key => $value){
            $render .= '<option value="' . $key . '">' . $value . '</option>';
        }
        $render .= '</select><br /><br />';
        return $render;
    }
    
    // FONCTIONNEMENT A INTEGRER DANS LE RENDER() DE BASE --> si value <> ""
    public function renderValue() {
        $render = '<label>' . $this->labelName . '</label><br />';
        $render .= '<select multiple="' . $this->inputType . '" name="' . $this->inputName . '[]">';
        foreach ($this->arrayList as $key => $value){
            foreach ($this->value as $key2 => $value2 ){
                if ($key == $value2){
                    $render .= '<option value="" selected>' . $value . '</option>';
                }
            }
        }
        $render .= '</select><br /><br />';
        return $render;
    }
}
