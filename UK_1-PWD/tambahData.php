<?php
        $con = mysqli_connect('localhost', 'root', '', 'db_penjualantreatandtail');

        $result = mysqli_query($con, "SELECT * FROM penjualan");
?>
