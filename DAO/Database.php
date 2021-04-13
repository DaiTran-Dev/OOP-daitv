<?php 
    include_once "../IDAO/IDatabase.php";
    include "../Constants/ConstantDB.php";
    class Database implements IDatabase{
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

        public static function getInstants(){
            if(empty(self::$instants)){
                self::$instants = new Database();
            }
            return self::$instants;
        }

        public function insertTable($row){
            //Check $row is object in fd entity
            if(!$this->checkRow($row)){
                return -1;
            }     
            $table = &$this->searchTable($row);
            if(is_array($table)){
                return array_push($table,$row);
            }
            return -1;
        }

        public function updateTable($row){
            if(!$this->checkRow($row)){
                return -1;
            }
            $table = array();
            $table = &$this->searchTable($row);
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

        public function deleteTable($row){
            if(!$this->checkRow($row)){
                return -1;
            }
            $table = array();
            $table = &$this->searchTable($row);
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

        public function selectTable($name,$where=null){
            $table = array();
            $table = &$this->searchTable($name,false);
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
            $table = &$this->searchTable($name,false);
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
       
        public function truncateTable($name){
            $table = array();
            $table = &$this->searchTable($name,false);
            if(is_array($table)){
                $table =array();                    
            }
        }

        private function checkRow($row){
            if(!is_object($row)){
                return false;
            }
            if(get_parent_class($row) && strcmp(strtolower(get_parent_class($row)),BASEROW)==0){
                return true;
            }
            return false;
        }

        private function &searchTable($row,$bool=true){
            ($bool)? $nameTable = get_class($row) : $nameTable = $row;
            switch (strtolower($nameTable)) {
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
                    return -1;
                    break;     
            }
        }
    }
?>