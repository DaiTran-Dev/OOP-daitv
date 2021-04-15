<?php 

    include_once "BaseDAO.php";
    include_once "../IDAO/IProductDAO.php";

    class ProductDAO extends BaseDAO implements IProductDAO
    {
        private static $instants;
        private function __construct()
        {
            
        }

        public static function getInstants()
        {
            if(empty(self::$instants)){
                self::$instants = new ProductDAO();
            }
            return self::$instants;
        }

        public function findAll()
        {
            $db = Database::getInstants();
            return $db->selectTable(PRODUCT);
        }
        
        public function findById($id)
        {
            $db = Database::getInstants();
            return $db->selectByIdTable(PRODUCT,$id);
        }
    }