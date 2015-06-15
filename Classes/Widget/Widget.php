<?php

namespace FormFramework\Classes\Widget;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Class Widget
 *
 * <ul>
 * <li>@var protected $labelName: string that will be contained in the widget label</li>
 * <li>@var protected $inputType: widget type</li>
 * <li>@var protected $inputName: widget name</li>
 * <li>@var protected $value: value given by the user, initialized as null</li>
 * </ul>
 */
abstract class Widget {

    protected $labelName;
    protected $inputType;
    protected $inputName;
    protected $value = null;
    
    /**
     * __construct function
     * @param type $labelName
     * @param type $inputName
     */
    public function __construct($labelName, $inputName){
        $this->labelName = $labelName;
        $this->inputName = $inputName;
    }
    
    /**
     * bind function
     * @param type $value
     */
    public function bind($value){
        $this->value = $value;
    }
    
    /**
     * getName function
     * @return type
     */
    public function getName(){
        return $this->inputName;
    }
}
