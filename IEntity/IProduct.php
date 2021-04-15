<?php

    include_once "../IEntity/IBaseRow.php";

    interface IProduct extends IbaseRow
    {
        public function setCategoryId($categoryId);
        public function getCategoryId();
        public function setPrice($price);
        public function getPrice();
    }