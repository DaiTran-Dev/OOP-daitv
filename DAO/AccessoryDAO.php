<?php 
    require "Database.php";
    include "../entity/Accessotion.php";
    class AccessoryDAO{
        private static $instants;
        private function __construct()
        {
            
        }
        public static function getInstants(){
            if(empty(self::$instants)){
                self::$instants = new AccessoryDAO();
            }
            return self::$instants;
        }

        public function insert($row){
            $db = Database::getInstants();
            $check = $db->insertTable("accessory",$row);
            if($check == -1){
                return false;
            }
            return true;
        }
        public function update($row){
            $db = Database::getInstants();
            $check = $db->updateByIdTable($row->getId(),$row);
            if($check == -1){
                return false;
            }
            return true;
        }
        public function findAll(){
            $db = Database::getInstants();
            return $db->selectTable('accessory');

        }
    }
?>