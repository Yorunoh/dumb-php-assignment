<?php
include('connect2.php');
class data3 {
    function insert($mucdich, $donvi) {
        global $conn;
        $sql = "INSERT INTO muctieu2 (mucdich, donvi) VALUES ('$mucdich', '$donvi')";
        $run = mysqli_query($conn, $sql);
        if ($run) {
            return "Thêm dữ liệu thành công.";
        } else {
            return "Lỗi khi thêm dữ liệu: " . mysqli_error($conn);
        }
    }
    public function select_muctieu2()
    {
        global $conn;
        $sql = "select * from muctieu2";
        $run = mysqLi_query($conn, $sql);
        return $run;
    }

    public function update_muctieu2($mucdich, $donvi, $STT)
        {
            global $conn;
            $sql = "update muctieu2 set mucdich = '$mucdich', donvi = '$donvi'
                    where STT = $STT";
            $run = mysqLi_query($conn, $sql);
            return $run;
        }
    
        public function delete_muctieu2($STT)
        {
            global $conn;
            $sql = "delete from muctieu2
                    where STT = $STT";
            $run = mysqLi_query($conn, $sql);
            return $run;
        }
        

}
?>