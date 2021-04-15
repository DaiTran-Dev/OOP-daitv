<?php 

    interface IBaseDAO
    {
        public function insert($row);
        public function update($row);   
        public function delete($row);
    }