<?php
    require "Database.php";
    include_once "../entity/Accessotion.php";
    include_once "../entity/Product.php";
    include_once "../entity/Category.php";
    abstract class BaseDAO{
        public function insert($row){
            $db = Database::getInstants();
            $check = $db->insertTable($row);
            if($check == -1){
                return false;
            }
            return true;
        }

        public function update($row){
            $db = Database::getInstants();
            $check = $db->updateTable($row);
            if($check == -1){
                return false;
            }
            return true;
        }
        
        public function delete($row){
            $db = Database::getInstants();
            $check = $db->deleteTable($row);
            if($check == -1){
                return false;
            }
            return true;
        }

    }
?>