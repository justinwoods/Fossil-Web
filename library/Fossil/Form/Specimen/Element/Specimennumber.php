<?php

class Fossil_Form_Specimen_Element_Specimennumber extends Zend_Form_Element 
{

    public function init() 
    {

        $this->addPrefixPath('Fossil', 'Fossil/');

        $this->addFilter('Hrsspecimennumber')
             ->setRequired()
             ->setAllowEmpty(false);
        
        $this->setLabel('Specimen Number');
        
    }

}
