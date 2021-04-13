<?php 
    include_once "BaseDAO.php";
    include_once "../IDAO/IAccessoryDAO.php";
    class AccessoryDAO extends BaseDAO implements IAccessoryDAO{
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

        public function findAll(){
            $db = Database::getInstants();
            return $db->selectTable(ACCESSORY);
        }
        
        public function findById($id)
        {
            $db = Database::getInstants();
            return $db->selectByIdTable(ACCESSORY,$id);
        }
    }
?>