<?php 
    include "../DAO/AccessoryDAO.php";
    class AccessoryDAODemo{

        public function __construct()
        {
            
        }
        public function insertTest(){
            $accDao = AccessoryDAO::getInstants();
            $acc = new Accessotion();
            $acc->setId(1);
            $acc->setName("admin");
            $accDao->insert($acc);
        }
        public function updateTest(){
            $accDao = AccessoryDAO::getInstants();
            $acc = new Accessotion();
            $acc->setId(1);
            $acc->setName("admin da sua");
            $accDao->update($acc);
        }
        public function findAllTest(){
            $accDao = AccessoryDAO::getInstants();
            $data = $accDao->findAll();
            if( $data  != -1){
                return $data;
            }
        }
     
    }
        $accDao = new AccessoryDAODemo();
        $accDao->insertTest();
        echo "<br>Du lieu <br>";
        var_dump($accDao->findAllTest());
        $accDao->updateTest();
        echo "<br>Du lieu <br>";
        var_dump($accDao->findAllTest());
?>