<?php

class Fossil_Form_Specimen_Element_Dateprepared extends Zend_Form_Element 
{

    public function init() 
    {
    
        $this->setAllowEmpty(true)
             ->addValidator('Date');
             
        $this->setLabel('Date Prepared');

    }

}
