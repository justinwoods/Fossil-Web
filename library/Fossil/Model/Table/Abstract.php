<?php

class Fossil_Model_Table_Abstract extends Zend_Db_Table_Abstract
{
    
    public function autocomplete($string, $fieldname)
    {
        $primary_key = $this->info('primary');

        $select = $this->select()
            ->from($this->info('name'), array($primary_key[1], $fieldname))
            ->where("{$fieldname} LIKE '{$string}%'")
            ->order($fieldname);
            
        return $this->fetchAll($select);
    }



    
}