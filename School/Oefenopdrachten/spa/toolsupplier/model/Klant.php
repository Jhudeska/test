<?php

require_once 'common/database/Database.php';

class Klant extends Record {

    public static function getTableName() {
        return 'Klant';
    }

    public static function getFields() {
        return ['KlantNr' => 'Nummer', 'KlantNaam' => 'Naam', 'VerkNr' => 'Verkoper', 'PlaatsHfdkntr' => 'Hoofdkantoor'];
    }

    public static function getKeyNames() {
        return ['KlantNr'];
    }

    public function __construct($record = null) { // default constructor used by PDO FETCH_CLASS
        parent::__construct($record);
    }

    
    public static function get($key) {
        $sql = "SELECT * FROM `Klant` JOIN `Verkoper` ON `Klant`.`VerkNr` = `Verkoper`.`Verknr` WHERE 'KlantNr' = ? ";
        return $db->execute('Klant', $sql, $key);
    }

    public static function getAll($where = '', $values = []) {
        global $db;
        $sql = "SELECT * FROM `Klant` JOIN `Verkoper` ON `Klant`.`VerkNr` = `Verkoper`.`Verknr` " 
                . $where;
        $result = $db->execute('Klant', $sql, $values);
        $list = [];
        while ($record = $result->fetch()) {
            $list[] = $record;
        }
        return $list;
    }

    public static function getCursor() {
        global $db;
        $sql = "SELECT * FROM `Klant` JOIN `Verkoper` ON `Klant`.`VerkNr` = `Verkoper`.`Verknr` ";
        return $db->execute('Klant', $sql);
    }

}
