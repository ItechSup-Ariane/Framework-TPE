<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FormFramework\Classes\Widget\WidgetText\WidgetTextConcret;
use FormFramework\Classes\Widget\WidgetText\WidgetText;

/**
 * Class WidgetTel
 *
 * <ul>
 * <li>@var protected $inputType: widget type</li>
 * </ul>
 */
class WidgetTel extends WidgetText{
    protected $inputType = "tel";
    
    /**
     * construct function
     * @param type $labelName
     * @param type $inputName
     */
    public function __construct($labelName, $inputName) {
        parent::__construct($labelName, $inputName);
    }
}
