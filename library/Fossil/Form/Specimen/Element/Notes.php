<?php

class Fossil_Form_Specimen_Element_Notes extends Zend_Dojo_Form_Element_Textarea
{

    public function init() 
    {
    
        $this->addFilter('StringTrim')
             ->addFilter('StripTags');
        
        $this->setLabel('Notes');
        
        $this->setDijitParam('style', 'width: 245px;');

    }

}
