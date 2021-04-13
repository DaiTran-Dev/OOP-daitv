<?php 
    include_once "../IDAO/IBaseDAO.php";
    interface IProductDAO extends IBaseDAO{
        public function findAll();
        public function findById($id);
    }
?>