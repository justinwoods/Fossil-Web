<?php

class Fossil_Form_Specimen_Element_Side extends Fossil_Form_Element_Select
{

    public function init() 
    {
    
        $this->addFilter('StringTrim')
             ->addFilter('StripNewlines')
             ->addFilter('StripTags')
             ->setAllowEmpty(true)
             ->addValidator('StringLength', false, array(1));
        
        $this->setLabel('Side');
        
        $this->setMultiOptions(
            $this->getPairs()
        );
                            
    }
    
    public function getPairs()
    {
        $specimen = new Fossil_Model_Table_Specimen;
        $metadata = $specimen->info('metadata');
        $datatype = $metadata['side']['DATA_TYPE'];
        $nullable = $metadata['side']['NULLABLE'];
        
        preg_match("/.*\('(.*)'\).*/", $datatype, $matches);
        
        $values = explode("','", $matches[1]);
        if(true == $nullable) {
            $values[] = '';
        }
        return array_combine($values, $values);
    }

}
