<?php

class Fossil_Form_Element_Select extends Zend_Form_Element_Select
{

    public function getPairs($table, $id = 'id', $name = 'name')
    {
        return $table->getAdapter()
            ->fetchPairs($table->select(Zend_Db_Table_Abstract::SELECT_WITH_FROM_PART)
            ->columns(array($id, $name)));
    }

}
