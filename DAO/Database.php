<?php 
    class Database {
        private static $instants;
        protected $productTable;
        protected $categoryTable;
        protected $accessoryTable;
        
        private function __construct()
        {
            echo "Đã chạy config <br>";
            $this->productTable = array();
            $this->categoryTable = array();
            $this->accessoryTable = array();
        }
        public static function getInstants(){
            if(empty(self::$instants)){
                echo "Đã chạy khơi tạo db <br>";
                self::$instants = new Database();
            }
            return self::$instants;
        }
        public function insertTable($name,$row){
            $table = array();
            switch (strtolower($name)) {
                case 'category':
                    $table = &$this->categoryTable;
                    break;
                case 'product':
                    $table =  &$this->productTable;
                    break;
                case 'accessory':
                    $table = &$this->accessoryTable;
                    break;   
                case 'accessotion':
                    $table = &$this->accessoryTable;
                    break; 
                default:
                    return -1;
                    break;     
            }
            if(is_array($table)){
                return array_push($table,$row);
            }
            return -1;
        }
        public function selectTable($name,$where=null){
            $table = array();
            switch (strtolower($name)) {
                case 'category':
                    $table = &$this->categoryTable;
                    break;
                case 'product':
                    $table =  &$this->productTable;
                    break;
                case 'accessory':
                    $table = &$this->accessoryTable;
                    break;   
                case 'accessotion':
                    $table = &$this->accessoryTable;
                    break; 
                default:
                    return -1;
                    break;     
            }
            
            $result = array();
            if(is_array($table)){      
                if($where == null){
                    $result = $table;
                }else{
                    // code
                }
            }
            return $result;
        }
        public function updateTable($name,$row){
            $table = array();
            switch (strtolower($name)) {
                case 'category':
                    $table = &$this->categoryTable;
                    break;
                case 'product':
                    $table =  &$this->productTable;
                    break;
                case 'accessory':
                    $table = &$this->accessoryTable;
                    break;   
                case 'accessotion':
                    $table = &$this->accessoryTable;
                    break; 
                default:
                    return -1;
                    break;     
            }      
            $index = -1;
            foreach ($table as $key=>$value) {
                if($value->getId() == $row->getId()){
                    $index = $key;
                    break;
                }
            }
            if($index!=-1){
                $table[$index] = $row;
            }
            
        }
        public function updateByIdTable($id,$row){
            switch (strtolower(get_class($row))) {
                case 'category':
                    $table = &$this->categoryTable;
                    break;
                case 'product':
                    $table =  &$this->productTable;
                    break;
                case 'accessory':
                    $table = &$this->accessoryTable;
                    break;
                case 'accessotion':
                    $table = &$this->accessoryTable;
                    break;   
                default:
                    return -1;
                    break;     
            }
            $index = -1;
            foreach ($table as $key=>$value) {
                if($value->getId() == $id){
                    $index = $key;
                    break;
                }
            }
            if($index!=-1){
                $table[$index] = $row;
            }else{
                return -1;
            }
            

        }
        public function deleteTable($name,$row){
            $table = array();
            switch (strtolower($name)) {
                case 'category':
                    $table = &$this->categoryTable;
                    break;
                case 'product':
                    $table =  &$this->productTable;
                    break;
                case 'accessory':
                    $table = &$this->accessoryTable;
                    break;   
                case 'accessotion':
                    $table = &$this->accessoryTable;
                    break; 
                default:
                    return -1;
                    break;     
            }
            $index = -1;
            foreach ($table as $key=>$value) {
                if($value->getId() == $row->getId()){
                    $index = $key;
                    break;
                }
            }
            array_splice($table,$index,1);
        }
        public function truncateTable($name){
            $table = array();
            switch (strtolower($name)) {
                case 'category':
                    $table = &$this->categoryTable;
                    break;
                case 'product':
                    $table =  &$this->productTable;
                    break;
                case 'accessory':
                    $table = &$this->accessoryTable;
                    break;   
                case 'accessotion':
                    $table = &$this->accessoryTable;
                    break; 
                default:
                    return -1;
                    break;     
            }
            if(is_array($table)){
                $table = array();
            }
        }
    }


?>