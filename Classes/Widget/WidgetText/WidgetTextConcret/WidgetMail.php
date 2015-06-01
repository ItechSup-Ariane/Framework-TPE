<?php

namespace FormFramework\Classes\Widget\WidgetText\WidgetTextConcret;
use FormFramework\Classes\Widget\WidgetText\WidgetText;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of mail
 *
 * @author Thomas
 */
class WidgetMail extends WidgetText{
    
    protected $inputType = "email";
    
    function __construct($labelName, $inputName) {
        parent::__construct($labelName, $inputName);
    }
}
