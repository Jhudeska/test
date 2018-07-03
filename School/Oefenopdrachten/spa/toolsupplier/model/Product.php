<?php

require_once 'common/database/Database.php';

class Product extends Record {

    public static function getTableName() {
        return 'Product';
    }
    
    public static function getFields() {
        return ['ProdNr' => 'Nummer', 'ProdNaam' => 'Naam', 'Prijs' => 'Prijs'];
    }

    public static function getKeyNames() {
        return ['ProdNr'];
    }

    public function __construct($record = null) { // default constructor used by PDO FETCH_CLASS
        parent::__construct($record);
    }

    public static function get($key) {
        return parent::_get('Product', $key);
    }

    public static function getAll() {
        return parent::_getAll('Product');
    }

}
