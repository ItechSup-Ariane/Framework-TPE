<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FormFramework\Classes\Validator;

/**
 * Class ValidatorText
 *
 * <ul>
 * <li>@var protected $value : value to check and validate if correct</li>
 * </ul>
 */
class ValidatorText {
    
    protected $value;
    
    /**
     * __construct function
     * @param type $value
     */
    public function __construct($value) {
        $this->value = $value;
    }
    
    /**
     * validate function
     * @return int
     */
    public function validate(){
        // utiliser des expressions régulières et un try catch
        if (is_string($this->value)){
            return 0;
        }
    }
}
