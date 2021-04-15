<?php 

    include_once "../IDAO/IBaseDAO.php";
    
    interface ICategoryDAO extends IBaseDAO
    {
        public function findAll();
        public function findById($id);
    }
