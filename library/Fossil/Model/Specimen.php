<?php

define('DEFAULT_FOSSIL_MODEL_SPECIMEN_UTMZONE', '13 T');
define('DEFAULT_FOSSIL_MODEL_SPECIMEN_STRATIGRAPHY', 'Upper Cretaceous');
define('DEFAULT_FOSSIL_MODEL_SPECIMEN_FORMATION', 'Lance');

class Fossil_Model_Specimen extends Fossil_Model_Abstract
{

    const DEFAULT_UTMZONE       = '13 T';
    const DEFAULT_STRATIGRAPHY  = 'Upper Cretaceous';
    const DEFAULT_FORMATION     = 'Lance';

    protected $_data = array(
        'id' => null,
        'specimen_number' => null,
        'field_number' => null,
        'quarry_id' => null,
        'museum_location' => null,
        'checked_in_box' => null,
        'taxon_id' => null,
        'taxon_certain' => null,
        'date_recovered' => null,
        'date_prepared' => null,
        'notes' => null,
        'notebook_page' => null,
        'identification_field' => null,
        'identification_lab' => null,
        'identification_lab_id' => null,
        'identification_lab_certain' => null,
        'description' => null,
        'hardener_id' => null,
        'length' => null,
        'width' => null,
        'thickness' => null,
        'side' => null,
        'position' => null,
        'utm_zone' => self::DEFAULT_UTMZONE,
        'stratigraphy' => self::DEFAULT_STRATIGRAPHY,
        'formation' => self::DEFAULT_FORMATION,
        'collector_person_id' => null,
        'identifier_person_id' => null,
        'preparator_person_id' => null
    );
    

}