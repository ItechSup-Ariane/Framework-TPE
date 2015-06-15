<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FormFramework\Classes\Validator;

/**
 * Description of ValidateText
 *
 * @author Thomas
 */
class ValidatorText {
    
    protected $value;
    
    public function __construct($value) {
        $this->value = $value;
    }
    
    public function validate(){
        // utiliser des expressions régulières et un try catch
        if (is_string($this->value)){
            return 0;
        }
    }
}
