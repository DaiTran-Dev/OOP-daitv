<?php 
    include "../DAO/ProductDAO.php";
    class ProductDAODemo{

        public function __construct()
        {
            
        }
        public function insertTest(){
            $proDao = ProductDAO::getInstants();
            $product = new Product();
            $product->setId(1);
            $product->setName("Sản phẩm số ");
            $product->setCategoryId(1);
            $product->setPrice(1000);
            $proDao->insert($product);
        }
        public function updateTest(){
            $proDao = ProductDAO::getInstants();
            $product = new Product();
            $product->setId(1);
            $product->setName("Sản phẩm số da update");
            $product->setCategoryId(1);
            $product->setPrice(1000);
            $proDao->update($product);
        }
        public function findAllTest(){
            $proDao = ProductDAO::getInstants();
            $data = $proDao->findAll();
            if( $data  != -1){
                return $data;
            }
        }
     
    }
        $proDao = new ProductDAODemo();
        $proDao->insertTest();
        echo "<br>Du lieu <br>";
        var_dump($proDao->findAllTest());
        $proDao->updateTest();
        echo "<br>Du lieu <br>";
        var_dump($proDao->findAllTest());
?>