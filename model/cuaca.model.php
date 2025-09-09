<?php 
class cuacaModel extends Connection {
    protected $kota;
    protected $cuaca;
    protected $suhu;

    protected function findAll(){
        $sql = 'SELECT * FROM informasicuaca';
        $result = $this->connect()->query($sql);
        if($result->num_rows >0){
            while ($data = mysqli_fetch_assoc($result)){
                $cuaca[] = $data;
            }
            return $cuaca;
        }
    }

    protected function findOne($id){
        $sql = 'SELECT * FROM informasicuaca WHERE id = ' . $id;
        $result = $this->connect()->query($sql);
         if($result->num_rows >0){
            while ($data = mysqli_fetch_assoc($result)){
                $cuaca[] = $data;
            }
            return $cuaca;
        }
    }
}
?>