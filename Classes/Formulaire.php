<?php

namespace FormFramework\Classes;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of formulaire
 *
 * @author Thomas
 */
class Formulaire {
    
    private $method;
    private $action;
    private $name;
    private $arrayWidget;
    
    public function __construct($methodForm, $actionForm, $nameForm) {
        $this->method = $methodForm;
        $this->action = $actionForm;
        $this->name = $nameForm;
    }
    
    public function add_Widget($widget){
        $this->arrayWidget[$widget->getName()] = $widget;
    }
    
    public function render(){
        $return = '<h1>' . $this->name . '</h1>';
        $return .= '<form method="' . $this->method . '" action="' . $this->action . '" name="' . $this->name . '">';
        foreach ($this->arrayWidget as $key => $value) {
            $return .= $value->render();
        }
        $return .= '</form>';
        return $return;
    }
    
    // methode bind tabl de valeurs recues à associer aux widgets
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
