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
    
    protected $inputType = "liste";
    protected $arrayList;
    
    function __construct($labelName, $inputName, $arrayList) {
        parent::__construct($labelName, $inputName);
        $this->arrayList = $arrayList;
    }
}
