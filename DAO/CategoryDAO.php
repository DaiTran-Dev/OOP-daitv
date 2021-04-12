<?php 
    require "Database.php";
    include "../entity/Product.php";


    class CategoryDAO{
        
        private static $instants;
        private function __construct()
        {
            
        }
        public static function getInstants(){
            if(empty(self::$instants)){
                self::$instants = new CategoryDAO();
            }
            return self::$instants;
        }
        
        public function insert($row){
            $db = Database::getInstants();
            $check = $db->insertTable("category",$row);
            if($check == -1){
                return false;
            }
            return true;
        }
        public function findAll(){
            $db = Database::getInstants();
            return $db->selectTable("category");
        }
        public function updateTest($id,$row){
            $db = Database::getInstants();
        $db->updateByIdTable($id,$row);
        }
    }


?>