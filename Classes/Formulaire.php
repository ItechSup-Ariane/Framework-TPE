<?php

namespace FormFramework\Classes;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Class Formulaire
 *
 * <ul>
 * <li>@var protected $method: POST</li>
 * <li>@var protected $action: no action for now</li>
 * <li>@var protected $name: form name</li>
 * <li>@var protected $arrayWidget: all declared widgets are stored in tis array</li>
 * </ul>
 */
class Formulaire {
    
    private $method;
    private $action;
    private $name;
    private $arrayWidget;
    
    /**
     * __construct function
     * @param type $methodForm
     * @param type $actionForm
     * @param type $nameForm
     */
    public function __construct($methodForm, $actionForm, $nameForm) {
        $this->method = $methodForm;
        $this->action = $actionForm;
        $this->name = $nameForm;
    }
    
    /**
     * add_Widget function
     * @param type $widget
     */
    public function add_Widget($widget){
        $this->arrayWidget[$widget->getName()] = $widget;
    }
    
    /**
     * render function
     * @return string
     */
    public function render(){
        $return = '<h1>' . $this->name . '</h1>';
        $return .= '<form method="' . $this->method . '" action="' . $this->action . '" name="' . $this->name . '">';
        foreach ($this->arrayWidget as $key => $value) {
            $return .= $value->render();
        }
        $return .= '</form>';
        return $return;
    }
    
    /**
     * bind function
     * @param type $arrayValue
     */
    public function bind($arrayValue){
        foreach($arrayValue as $key => $value){
            // IL FAUDRAIT CREER UN VALIDATOR ICI ET BINDER UNIQUEMENT SI C'EST CORRECT !!!
            $this->arrayWidget[$key]->bind($value);
        }
    }
    
    // en mode test
    public function showTest(){
        var_dump($this->arrayWidget);
        //var_dump($_POST);
    }
}
