<?php

    require "Database.php";
    include_once "../entity/Accessotion.php";
    include_once "../entity/Product.php";
    include_once "../entity/Category.php";

    abstract class BaseDAO
    {
        public function insert($row)
        {
            $db = Database::getInstants();
            return $db->insertTable($row);
        }

        public function update($row)
        {
            $db = Database::getInstants();
            return $db->updateTable($row);
        }
        
        public function delete($row)
        {
            $db = Database::getInstants();
            return $db->deleteTable($row);          
        }

    }