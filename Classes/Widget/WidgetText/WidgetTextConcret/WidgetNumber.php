<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FormFramework\Classes\Widget\WidgetText\WidgetTextConcret;
use FormFramework\Classes\Widget\WidgetText\WidgetText;

/**
 * Description of WidgetNumber
 *
 * @author Thomas
 */
class WidgetNumber extends WidgetText{
    protected $inputType = "number";
    
    public function __construct($labelName, $inputName) {
        parent::__construct($labelName, $inputName);
    }
}
