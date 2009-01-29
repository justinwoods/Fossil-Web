<?php

abstract class Fossil_Model_Abstract
{

    protected $_data = null;
    
    protected $_forms = null;
    
    public function __construct($data)
    {
        $this->populate($data);
    }
    
    public function populate($data) 
    {

        if($data instanceof Zend_Db_Table_Row_Abstract) {
            $data = $data->toArray();
        }
        elseif(is_object($data)) {
            $data = (array) $data;
        }
        
        if(!is_array($data)) {
            throw Exception('Initial data must be an array, an object, or an instance of Zend_Db_Table_Row_Abstract.');
        }
        
        foreach($data as $key => $value) {
           $this->$key = $value;
        }
        
        return $this;
    }
    
    public function __set($name, $value) 
    {

        if(!array_key_exists($name, $this->_data)) {
            throw new Exception("Invalid property: '{$name}'");
        }
        
        $inputFilter = $this->getForm();
        
        if($element = $inputFilter->getElement($name)) {
            if(!$element->isValid($value)) {
                throw new Exception(sprintf(
                    'Invalid value provided for "%s": %s', 
                    $name, 
                    implode(', ', $element->getMessages())));
            }
            $inputFilter->setDefault($name, $value);
        }
        
        $this->_data[$name] = $inputFilter->getValue($name);
    }
    
    public function __get($name)
    {

        if(array_key_exists($name, $this->_data)) {
            return $this->_data[$name];
        }

        return null;
    }
    
    public function __isset($name) 
    {
        return isset($this->_data[$name]);
    }
    
    public function __unset($name) 
    {
        if(isset($this->$name)) {
            $this->_data[$name] = null;
        }
    }
    
    public function fetch() {
        return $this->_data;
    }
    

    public function getForm()
    {
        if(null === $this->_forms) {
            $class = get_class($this);
            $type = substr($class, strrpos($class, '_') + 1);
            
            $form = "Fossil_Form_{$type}";
        
            $this->_forms = new $form();
        }
        
        return $this->_forms;
    }
    

}