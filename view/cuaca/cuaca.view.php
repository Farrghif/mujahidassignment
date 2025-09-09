<?php
class CuacaView extends cuacaController 
{
    public function show()
    {
        $cuaca = $this->getProducts();

        foreach ($cuaca as $cuacas) { 
            ?>
            <tr>
                <td><?php echo $cuacas["id"]; ?></td>
                <td><?php echo $cuacas["kota"]; ?></td>
                <td><?php echo $cuacas["tanggal"]; ?></td>
                <td><?php echo $cuacas["suhu(celcius)"]; ?></td>
            </tr>
            <?php
        }
    }

    public function find()
    {
        $detailProduct = $this->getProductBy();
        
        if (empty($detailcuaca)) {
            return;
        }

        foreach ($detailcuaca as $detail) { ?>
            <div>
                <h3><?php echo $detail["kota"]; ?></h3>
                <p><?php echo $detail["tanggal"]; ?></p>
                <p><?php echo $detail["suhu(celcius)"]; ?></p>
            </div>
        <?php
        }
    }
}
?>