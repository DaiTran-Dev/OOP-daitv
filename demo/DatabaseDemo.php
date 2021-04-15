<?php

    require "../DAO/Database.php";
    include "../entity/Product.php";
    include "../entity/Accessotion.php";
    include "../entity/Category.php";

    class DatabaseDemo
    {
        public function __construct()
        {
            
        }

        public function initDatabase()
        {
            $db = Database::getInstants();
            for ($i=1; $i <=2 ; $i++) { 
                $product = new Product();
                $product->setId($i);
                $product->setName("Sản phẩm số".$i);
                $product->setCategoryId(2);
                $product->setPrice(2000);
                $product->setType(PRODUCT);
                $db->insertTable($product);
            }
            for ($i=1; $i <=10 ; $i++) { 
                $category = new Category();
                $category->setId($i);
                $category->setName("Danh muc so".$i);
                $category->setType(CATEGORY);
                $db->insertTable($category);
            }
            for ($i=1; $i <=10 ; $i++) { 
                $accessotion = new Accessotion();
                $accessotion->setId($i);
                $accessotion->setName("Quyen truy cap so".$i);
                $accessotion->setType(ACCESSORY);
                $db->insertTable($accessotion);
            }
            echo "Da run innitData";
        }

        public function insertTableTest()
        {
            $db = Database::getInstants();
            $product = new Product();
            $product->setId(2);
            $product->setName("Sản phẩm số 2");
            $product->setCategoryId(2);
            $product->setPrice(2000);
            $product->setType(PRODUCT);
            $db->insertTable($product);
        }

        public function updateTableTest()
        {
            $db = Database::getInstants();
            $product = new Product();
            $product->setId(2);
            $product->setName("Sản phẩm số 2 da sua");
            $product->setCategoryId(2);
            $product->setPrice(2000);
            $product->setType(PRODUCT);
            $db->updateTable($product);
        }

        public function deleteTableTest()
        {
            $db = Database::getInstants();
            $product = new Product();
            $product->setId(2);
            $product->setName("Sản phẩm số 2 da sua");
            $product->setCategoryId(2);
            $product->setPrice(2000);
            $product->setType(PRODUCT);
            $db->deleteTable($product);
        }

        public function truncateTableTest()
        {
            $db = Database::getInstants();
            $db->truncateTable(PRODUCT);
        }

        public function selectTableTest()
        {
            $db = Database::getInstants();
           return $db->selectTable(PRODUCT);
        }

        public function updateByIdTableTest()
        {
            $db = Database::getInstants();
            $product = new Product();
            $product->setId(2);
            $product->setName("Sản phẩm số 2 da sua byId");
            $product->setCategoryId(2);
            $product->setPrice(2000);
            $product->setType(PRODUCT);
            $db->updateTable($product);
        }
        
        public function printTableTest($obj)
        {
            echo "<br>";
            echo "<pre>";
            echo $obj->getId()."<br>";
            echo $obj->getName()."<br>";
            echo "</pre>";
        }
    }

    $dataDemo = new DatabaseDemo();
    $dataDemo->initDatabase();
    echo "---<br>";
    echo "Ban dau---<br>";
    foreach ($dataDemo->selectTableTest() as $key => $value) {
        $dataDemo->printTableTest($value);
    }
    $dataDemo->updateTableTest();
    echo "sau update---<br>";
    foreach ($dataDemo->selectTableTest() as $key => $value) {
        $dataDemo->printTableTest($value);
    }
    echo "---<br>";
    $dataDemo->deleteTableTest();
    echo "sau xoa---<br>";
    foreach ($dataDemo->selectTableTest() as $key => $value) {
        $dataDemo->printTableTest($value);
    }
     echo "---<br>";
     $dataDemo->truncateTableTest();
     echo "sau xoa het---<br>";
     foreach ($dataDemo->selectTableTest() as $key => $value) {
         $dataDemo->printTableTest($value);
     }