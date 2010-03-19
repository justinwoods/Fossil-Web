<?php

class Fossil_Form_Specimen_Element_Specimennumber extends Zend_Dojo_Form_Element_TextBox
{

    public function init() 
    {

        $this->addPrefixPath('Fossil', 'Fossil/');

        $this->addFilter('Hrsspecimennumber')
             ->setRequired()
             ->setAllowEmpty(false);
        
        $this->setLabel('Specimen Number');
        
        $this
            ->setUppercase(true)
            ->setTrim(true)
            ->setMaxLength(8);
        
    }

}
