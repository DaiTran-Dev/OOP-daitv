<?php 
    include_once "../IDAO/IBaseDAO.php";
    interface IAccessoryDAO extends IBaseDAO{
        public function findAll();
        public function findById($id);
    }
?>