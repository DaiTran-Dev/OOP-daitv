<?php
    require "../DAO/Database.php";
    include "../entity/Product.php";
    include "../entity/Accessotion.php";
    include "../entity/CategoryId.php";
    class DatabaseDemo{

        public function __construct()
        {
            
        }
        public function initDatabase(){
            $db = Database::getInstants();
            for ($i=1; $i <=3 ; $i++) { 
                $product = new Product();
                $product->setId($i);
                $product->setName("Sản phẩm số".$i);
                $product->setCategoryId(2);
                $product->setPrice(2000);
                $db->insertTable("product",$product);
            }
            for ($i=1; $i <=10 ; $i++) { 
                $category = new Category();
                $category->setId($i);
                $category->setName("Danh muc so".$i);
                $db->insertTable("category",$category);
            }
            for ($i=1; $i <=10 ; $i++) { 
                $accessotion = new Accessotion();
                $accessotion->setId($i);
                $accessotion->setName("Quyen truy cap so".$i);
                $db->insertTable("accessory",$accessotion);
            }
            echo "Da run innitData";
        }
        public function insertTableTest(){
            $db = Database::getInstants();
            $product = new Product();
            $product->setId(2);
            $product->setName("Sản phẩm số 2");
            $product->setCategoryId(2);
            $product->setPrice(2000);
            $db->insertTable("product",$product);
        }
        public function updateTableTest(){
            $db = Database::getInstants();
            $product = new Product();
            $product->setId(2);
            $product->setName("Sản phẩm số 2 da sua");
            $product->setCategoryId(2);
            $product->setPrice(2000);
            $db->updateTable("product",$product);
        }
        public function deleteTableTest(){
            $db = Database::getInstants();
            $product = new Product();
            $product->setId(2);
            $product->setName("Sản phẩm số 2 da sua");
            $product->setCategoryId(2);
            $product->setPrice(2000);
            $db->deleteTable("product",$product);
        }
        public function truncateTableTest(){
            $db = Database::getInstants();
            $db->truncateTable("product");
        }
        public function selectTableTest(){
            $db = Database::getInstants();
           return $db->selectTable("product");
        }
        public function updateByIdTableTest(){
            $db = Database::getInstants();
            $product = new Product();
            $product->setId(2);
            $product->setName("Sản phẩm số 2 da sua byId");
            $product->setCategoryId(2);
            $product->setPrice(2000);
            $db->updateByIdTable(2,$product);
        }
        public function printTableTest($obj){

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
    echo "---<br>";
    foreach ($dataDemo->selectTableTest() as $key => $value) {
        $dataDemo->printTableTest($value);
    }
    // $dataDemo->updateTableTest();
    // echo "---<br>";
    // foreach ($dataDemo->selectTableTest() as $key => $value) {
    //     $dataDemo->printTableTest($value);
    // }
    // echo "---<br>";
    // $dataDemo->deleteTableTest();
    // echo "---<br>";
    // foreach ($dataDemo->selectTableTest() as $key => $value) {
    //     $dataDemo->printTableTest($value);
    // }
    //  echo "---<br>";
    //  $dataDemo->truncateTableTest();
    //  echo "---<br>";
    //  foreach ($dataDemo->selectTableTest() as $key => $value) {
    //      $dataDemo->printTableTest($value);
    //  }
    //   echo "---<br>";
    $dataDemo->updateByIdTableTest();
    echo "---<br>";
    foreach ($dataDemo->selectTableTest() as $key => $value) {
        $dataDemo->printTableTest($value);
    }
    echo "---<br>";
?>