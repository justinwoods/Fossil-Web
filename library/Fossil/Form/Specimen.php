<?php

class Fossil_Form_Specimen extends Zend_Form 
{

    public function init() 
    {
    
        $this->addPrefixPath('Fossil_Form_Specimen', 'Fossil/Form/Specimen/');
        $this->setElementFilters(array('StringTrim'));
    
        $this->addElement('id', 'id')
             ->addElement('specimennumber','specimen_number')
             ->addElement('fieldnumber','field_number')
             ->addElement('quarryid','quarry_id')
             ->addElement('museumlocation','museum_location')
             ->addElement('checkedinbox','checked_in_box')
             ->addElement('taxonid','taxon_id')
             ->addElement('taxoncertain','taxon_certain')
             ->addElement('daterecovered','date_recovered')
             ->addElement('dateprepared','date_prepared')
             ->addElement('notes','notes')
             ->addElement('notebookpage','notebook_page')
             ->addElement('identificationfield','identification_field')
             ->addElement('identificationlab','identification_lab')
             ->addElement('identificationlabid','identification_lab_id')
             ->addElement('identificationlabcertain','identification_lab_certain')
             ->addElement('description','description')
             ->addElement('hardenerid','hardener_id')
             ->addElement('length','length')
             ->addElement('width','width')
             ->addElement('thickness','thickness')
             ->addElement('side','side')
             ->addElement('position','position')
             ->addElement('utmzone','utm_zone')
             ->addElement('stratigraphy','stratigraphy')
             ->addElement('formation','formation')
             ->addElement('collectorpersonid','collector_person_id')
             ->addElement('identifierpersonid','identifier_person_id')
             ->addElement('preparatorpersonid','preparator_person_id');

    }

}