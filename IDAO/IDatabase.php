<?php 

    interface IDatabase
    {
        public static function getInstants();
        public function insertTable($row);
        public function updateTable($row);
        public function deleteTable($row);
        public function selectTable($name,$where=null);
        public function selectByIdTable($name,$id);
        public function truncateTable($name);
    }
