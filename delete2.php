<?php
    include('control2.php');
    $get_data = new data3;
    $delete = $get_data -> delete_muctieu2($_GET['XOA']);
    if($delete){
        echo "<script> alert('thanh cong');
        window.location='select.php'</script>";
        header("Location: muctieu2.php");
            exit();
    }
    else
        echo "<script> alert('khong thanh cong')</script>";
?>
