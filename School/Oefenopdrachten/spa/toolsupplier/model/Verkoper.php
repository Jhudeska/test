<?php

require_once 'common/database/Database.php';

require_once 'model/Klant.php';

class Verkoper extends Record {

    private $customers = null;
    
    public static function getTableName() {
        return 'Verkoper';
    }

    public static function getFields() {
        return[
            'VerkNr' => 'Nummer',
            'VerkNaam' => 'Naam',
            'ComPct' => 'Commissie',
            'InDienst' => 'In dienst',
            'KamerNr' => 'Kamer',
        ];
    }

    public static function getKeyNames() {
        return ['VerkNr'];
    }

    public function __construct($record = null) { // default constructor used by PDO FETCH_CLASS
        parent::__construct($record);
    }

    public static function get($key) {
        return parent::_get('Verkoper', $key);
    }

    public static function getCursor() {
        return parent::_getCursor('Verkoper');
    }

    public static function getAll() {
        return parent::_getAll('Verkoper');
    }
    
    public function getCustomerNames() {
        if($this->customers == null) {
            $this->customers = Klant::getAll("WHERE Verkoper.Verknr = ?", $this->VerkNr);
        }
        return get_column($this->customers, 'KlantNaam');
    }

}
