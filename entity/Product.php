<?php
    include_once "BaseRow.php";
    include_once "../IEntity/IProduct.php";
    class Product extends BaseRow implements IProduct{       
        private $categoryId;
        private $price;

        public function __construct()
        {
        }

        public function setCategoryId($categoryId){
            $this->categoryId = $categoryId;
        }

        public function getCategoryId(){
            return $this->categoryId;
        }

        public function setPrice($price){
            $this->price = $price;
        }
        
        public function getPrice(){
            return $this->price;
        }
        
    }
?>