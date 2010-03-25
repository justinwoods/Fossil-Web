<?php

class Fossil_Form_Element_Select extends Zend_Dojo_Form_Element_FilteringSelect
{

    public function getPairs($table, $name = 'name', $order = null)
    {
        $primary_key = $table->info('primary');
        
        $select = $table->select()->from($table->info('name'), array($primary_key[1], $name));
        
        if(null == $order) {
            $order = $name;
        }
        
        return $table->getAdapter()->fetchPairs($select->order($order));
    }

}
