<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PasswordStrengthValidator
 *
 * @author Daniel Panjaitan
 */
class PasswordStrengthValidator extends CValidator {

    // to store the stregth level 
    public $strength;
// stregth regex patterns 
    private $weak_pattern = '/^(?=.*[a-zA-Z0-9]).{5,}$/';
// a very strong password is a 10 length 
    private $strong_pattern = '/^(?=.*[a-zA-Z0-9]).{10,}$/';

// a very strong password combines lower-upper case, 
//private $strong_pattern = '/^(?=.*\d(?=.*\d))(?=.*[a-zA-Z](?=.*[a-zA-Z])).{5,}$/'; 
// overrides the validateAttribute method 
    protected function validateAttribute($_object, $_attribute) {
// check the strength parameter used in the validation rule of our model 
        if ($this->strength == 'weak')
            $pattern = $this->weak_pattern;
        elseif ($this->strength == 'strong')
            $pattern = $this->strong_pattern;
// extract the attribute value from it's model object 
        $value = $_object->$_attribute;
        if (!preg_match($pattern, $value)) {
            $this->addError($_object, $_attribute, 'your password is  too weak!');
        }
    }

}
