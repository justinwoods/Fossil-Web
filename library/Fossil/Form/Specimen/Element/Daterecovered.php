<?php

class Fossil_Form_Specimen_Element_Daterecovered extends Zend_Dojo_Form_Element_DateTextBox
{

    public function init() 
    {
    
        $this->setAllowEmpty(true)
             ->addValidator('Date');
        
        $this->setLabel('Date Recovered')
             ->setDescription('The date the specimen was removed from the quarry.');
             
        $this
            ->setAmPm(false)
            ->setStrict(true)
            ->setDatePattern('yyyy-MM-dd')
            ->setSelector('date');
        
    }

}
