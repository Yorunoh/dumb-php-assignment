<?php
    include('control2.php');
    $get_data = new data3;
    $delete = $get_data -> delete_muctieu2($_GET['XOA']);
    if($delete){
        header("Location: update.php");
    }
    else
        echo "<script> alert('khong thanh cong')</script>";
?>
