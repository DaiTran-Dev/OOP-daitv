<?php 
    include "./entity/Product.php";
    class ProductDemo extends Product{
        private static $instance;
        private function __construct()
        {
            
        }
        public static function getInstance(){
            if(empty(self::$instance)){
                self::$instance = new Product();
            }
            return self::$instance;
        }
        public function createProductTest()
        {
            $product = new Product();
            $product->setId(1);
            $product->setName("Sản phẩm số ");
            $product->setCategoryId(1);
            $product->setPrice(1000);
        }
        public function printProduct($product){
            if(empty($product)){
                echo "<br>";
                echo "<pre>";
                echo $product->getId()."<br>";
                echo $product->getName()."<br>";
                echo $product->getCategoryId()."<br>";
                echo $product->getPrice()."<br>";
                echo "</pre>";
            }
        }
    }
?>