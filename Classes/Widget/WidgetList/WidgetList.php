<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FormFramework\Classes\Widget\WidgetList;
use FormFramework\Classes\Widget\Widget;

/**
 * Class WidgetList
 *
 * <ul>
 * <li>@var protected $inputType: list type (radio, check, simple, multiple)</li>
 * <li>@var protected $arrayList: list of input values which fill the list</li>
 * </ul>
 */
class WidgetList extends Widget{
    
    protected $inputType = "liste";
    protected $arrayList;
    
    /**
     * __construct function
     * @param type $labelName
     * @param type $inputName
     * @param type $arrayList
     */
    public function __construct($labelName, $inputName, $arrayList) {
        parent::__construct($labelName, $inputName);
        $this->arrayList = $arrayList;
    }
}
