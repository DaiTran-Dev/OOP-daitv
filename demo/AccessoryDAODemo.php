<?php 
    include "../DAO/AccessoryDAO.php";
    class AccessoryDAODemo{
        public function __construct()
        {          
        }

        public function insertTest(){
            $accDao = AccessoryDAO::getInstants();
            $accessotion = new Accessotion();
            $accessotion->setId(1);
            $accessotion->setName("admin");
            $accessotion->setType(ACCESSORY);
            return $accDao->insert($accessotion);
        }

        public function updateTest(){
            $accDao = AccessoryDAO::getInstants();
            $accessotion = new Accessotion();
            $accessotion->setId(1);
            $accessotion->setName("admin da sua");
            $accessotion->setType(ACCESSORY);
            return $accDao->update($accessotion);
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