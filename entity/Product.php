<?php
    class Product{
        //Declare variable
        private $id;
        private $name;
        private $categoryId;
        private $price;

        public function __construct()
        {
        }
        public function setId($id){
            $this->id = $id;
        }
        public function getId(){
            return $this->id;
        }
        public function setName($name){
            $this->name = $name;
        }
        public function getName(){
            return $this->name;
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