<?php 
    include_once "BaseDAO.php";
    include_once "../IDAO/ICategoryDAO.php";
    class CategoryDAO extends BaseDAO implements ICategoryDAO{
        
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

        public function findAll(){
            $db = Database::getInstants();
            return $db->selectTable(CATEGORY);
        }

        public function findById($id)
        {
            $db = Database::getInstants();
            return $db->selectByIdTable(CATEGORY,$id);
        }
    }
?>