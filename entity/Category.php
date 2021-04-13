<?php
    include_once "BaseRow.php";
    include_once "../IEntity/ICategory.php";
    class Category extends BaseRow implements ICategory{        
        public function __construct()
        {
        }
    }

?>