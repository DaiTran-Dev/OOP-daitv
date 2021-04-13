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
            return $accDao->insert($acc);
        }

        public function updateTest(){
            $accDao = AccessoryDAO::getInstants();
            $acc = new Accessotion();
            $acc->setId(1);
            $acc->setName("admin da sua");
            return $accDao->update($acc);
        }

        public function findAllTest(){
            $accDao = AccessoryDAO::getInstants();
            $result = $accDao->findAll();
            return $result;
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