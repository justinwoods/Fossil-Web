<?php

class Fossil_Form_Specimen_Element_Dateprepared extends Zend_Dojo_Form_Element_DateTextBox
{

    public function init() 
    {
    
        $this->setAllowEmpty(true)
             ->addValidator('Date');
             
        $this->setLabel('Date Prepared');

        $this
            ->setAmPm(false)
            ->setStrict(true)
            ->setDatePattern('yyyy-MM-dd')
            ->setSelector('date');

    }

}
