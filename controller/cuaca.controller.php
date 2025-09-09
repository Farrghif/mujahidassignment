<?php 
class cuacaController extends cuacaModel {
    public function getProducts(){
        return $this->findAll();
    }

    public function getProductBy(){
        if(!isset($_GET['id'])){
            return;
        }
        $onlyId = preg_replace('/\D/', '', $_GET['id']);
        if($onlyId !== ''){
            return $this->findOne($_GET['id']);
        }
    }
}
?>