<?php
    include('control.php');
    $get_data = new data;
    $delete = $get_data -> delete_muctieu($_GET['XOA']);
    if($delete){
        echo "<script> alert('thanh cong');
        window.location='select.php'</script>";
    }
    else
        echo "<script> alert('khong thanh cong')</script>";
?>
