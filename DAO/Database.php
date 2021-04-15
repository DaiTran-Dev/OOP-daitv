<?php 

    include_once "../IDAO/IDatabase.php";
    include "../Constants/ConstantDB.php";

    class Database implements IDatabase
    {
        private static $instants;
        private $productTable;
        private $categoryTable;
        private $accessoryTable;
        
        private function __construct()
        {
            $this->productTable = array();
            $this->categoryTable = array();
            $this->accessoryTable = array();
        }

        public static function getInstants()
        {
            if(empty(self::$instants)){
                self::$instants = new Database();
            }
            return self::$instants;
        }

        public function insertTable($row)
        {
            if(!$this->checkRow($row)){
                return -1;
            }     
            $table = &$this->searchTable($row->getType());
            if(is_array($table)){
                return array_push($table,$row);
            }
            return -1;
        }

        public function updateTable($row)
        {
            if(!$this->checkRow($row)){
                return -1;
            }
            $table = array();
            $table = &$this->searchTable($row->getType());
            if(!is_array($table)){
                return -1;
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
            return $index; 
        }

        public function deleteTable($row)
        {
            if(!$this->checkRow($row)){
                return -1;
            }
            $table = array();
            $table = &$this->searchTable($row->getType());
            $index = -1;
            if(!is_array($table)){
                return -1;
            }
            foreach ($table as $key=>$value) {
                if($value->getId() == $row->getId()){
                    $index = $key;
                    break;
                }
            }
            if($index == -1){
                return -1;
            }     
            return array_splice($table,$index,1);
        }

        public function selectTable($name,$where=null)
        {
            $table = array();
            $table = &$this->searchTable($name);
            if(!is_array($table)){
                return $table;
            }
            $result = array();
            if($where == null){
                $result = $table;
            }else{
                //code
            }
            return $result;
        }

        public function selectByIdTable($name,$id){
            $table = array();
            $table = &$this->searchTable($name);
            if(!is_array($table)){
                return $table;
            }
            $result = null;
            foreach ($table as $key => $value) {
                if($value->getId()==$id){
                    $result = $value;
                    break;
                }
            }
            return $result;
        }
       
        public function truncateTable($name)
        {
            $table = array();
            $table = &$this->searchTable($name);
            if(is_array($table)){
                $table =array();                    
            }
        }

        // Kiểm tra xem $row có phải là object thuoc entity
        private function checkRow($row){
            if(!is_object($row) || empty($row->getType())){
                return false;
            }
            $table = $this->searchTable($row->getType());
            if(!is_array($table)){
                return false;
            }
            return true;
        }

        // Lấy địa chỉ thám chiếu của thuộc tính cần tìm thông qua $name
        private function &searchTable($name)
        {
            switch (strtolower($name)) {
                case CATEGORY:
                    return $this->categoryTable;
                    break;
                case PRODUCT:
                    return $this->productTable;
                    break;
                case ACCESSORY:
                    return $this->accessoryTable;
                    break;   
                case ACCESSOTION:
                    return $this->accessoryTable;
                    break; 
                default:
                    $result= -1;
                    return $result;
                    break;     
            }
        }
    }