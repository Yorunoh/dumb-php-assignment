<?php
include('connect.php');
class data{
    function insert($mucdich,$thutuc,$tansuat){
        global $conn;
           $sql="insert into muctieu(mucdich,thutuc,tansuat) 
                values('$mucdich','$thutuc','$tansuat')";
           $run=mysqli_query($conn,$sql);
           if($run){
            return "Thêm dữ liệu thành công.";
        } else {
            return "Lỗi khi thêm dữ liệu: " . mysqli_error($conn);
        }
  
    }
    public function select_muctieu()
    {
        global $conn;
        $sql = "select * from muctieu ";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    public function update_muctieu($mucdich, $thutuc, $tansuat,$ID)
        {
            global $conn;
            $sql = "update muctieu set mucdich = '$mucdich', thutuc = '$thutuc', tansuat = '$tansuat'
                    where ID = $ID";
            $run = mysqli_query($conn, $sql);
            return $run;
        }
    
        public function delete_muctieu($ID)
        {
            global $conn;
            $sql = "delete from muctieu 
                    where ID = $ID";
            $run = mysqli_query($conn, $sql);
            return $run;
        }
        public function select_id($ID){
            global $conn;
            $sql = "select * from muctieu where ID='$ID' ";
            $run = mysqli_query($conn, $sql);
            return $run;
        }

}
?>