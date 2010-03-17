<?php

class Fossil_Filter_Hrsspecimennumber implements Zend_Filter_Interface
{

    public function filter($value)
    {

        $digits = Zend_Filter::filterStatic($value, 'Digits');
        $padded = str_pad($digits, 5, '0', STR_PAD_LEFT);
        $output = 'HRS'.$padded;
        return $output;

    }

}