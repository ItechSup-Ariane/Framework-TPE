<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FormFramework\Classes\Widget\WidgetText\WidgetTextConcret;
use FormFramework\Classes\Widget\WidgetText\WidgetText;

/**
 * Description of WidgetTel
 *
 * @author Thomas
 */
class WidgetTel extends WidgetText{
    protected $inputType = "tel";
    
    function __construct($labelName, $inputName) {
        parent::__construct($labelName, $inputName);
    }
}
