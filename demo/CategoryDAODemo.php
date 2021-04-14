<?php  
   require "../DAO/CategoryDAO.php";
    class CategoryDAODemo{
        public function __construct()
        {      
        }

        public function insertTest(){
            $cateDao = CategoryDAO::getInstants();
            $category = new Category();
            $category->setId(1);
            $category->setName("Danh muc so 1");
            $category->setType(CATEGORY);
            $cateDao->insert($category);
        }

        public function findAllTest(){
            $cateDao = CategoryDAO::getInstants();
            return $cateDao->findAll();
        }
        
        public function updateTest(){
            $cateDao = CategoryDAO::getInstants();
            $category = new Category();
            $category->setId(1);
            $category->setName("Danh muc so 1 da update");
            $category->setType(CATEGORY);
            $cateDao->update($category);
        }
    }
    $cateDao = new CategoryDAODemo();
    $cateDao->insertTest();
    echo "<br>Du lieu <br>";
    var_dump($cateDao->findAllTest());
    $cateDao->updateTest();
    echo "<br>Du lieu <br>";
    var_dump($cateDao->findAllTest());
    $cateDao->insertTest();
    echo "<br>Du lieu <br>";
    var_dump($cateDao->findAllTest());
    $cateDao->insertTest();
    echo "<br>Du lieu <br>";
    var_dump($cateDao->findAllTest());
?>