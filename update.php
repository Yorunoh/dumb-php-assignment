
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="muctieu.css" type="text/css">
    <title>Document</title>
</head>
<?php
        include('control.php');
        $get_data = new data();
        
        if (isset($_GET['SUA'])) {
            $ID = $_GET['SUA'];
            $data = $get_data->select_id($ID);
        } else {
            header("Location: muctieu1.php");
            exit();
        }
        
        if(isset($_POST['update']))
        {
            if(empty($_POST['mucdich']))
                echo "muc dich khong duoc de trong";
            else if(empty($_POST['tansuat']))
                echo "tansuat khong duoc de trong";
            else if (empty($_POST['thutuc']))
                echo "thu tuc khong duoc de trong";
            else
                $up_muctieu = $get_data -> update_muctieu($_POST['mucdich'], $_POST['tansuat'], $_POST['thutuc'], $ID);

            if($up_muctieu){
                echo "<script>alert('thanh cong');</script>";
                header("Location: muctieu1.php");
                exit();
            }
            else echo "<script>alert('khong thanh cong');</script>";
        }
?>
<body>
    <header>

        <div class="logo">
            chưa có
        </div>

        <div class="nav-left">
            <input type="search" name="query" placeholder="Tìm kiếm hoặc gõ lệnh (ctrl+g)" class="search-bar">
        </div>
    
    </header>

    <div class="formupdate">
        <form method="POST">
            <div class="midle_second2">
            <div class="midle_second3">
            <!--
                <div class="inputbox">
                -->
                <div class="row">
                
                    <?php foreach ($data as $a):?>
                        <div class="col1">
                            <label for="mucdich" class="lab">Tên</label>
                            <input type="text" name="mucdich" placeholder="<?php echo $a['mucdich']?>"  class="select4">
                        </div>
                        
                        <div class="col2">
                            <label for="tansuat" class="lab">Tần suất giám sát</label>
                                <select id="tansuat" name="tansuat" class="select4">
                                <option value="không ai" <?php if($a['tansuat'] == 'không ai') {?> selected="selected" <?php } ?>>Không ai</option>
                                <option value="Hằng ngày" <?php if($a['tansuat'] == 'Hằng ngày') {?> selected="selected" <?php } ?>>Hằng ngày</option>
                                <option value="Hằng tuần" <?php if($a['tansuat'] == 'Hằng tuần') {?> selected="selected" <?php } ?>>Hằng tuần</option>
                                <option value="Hằng tháng" <?php if($a['tansuat'] == 'Hằng tháng') {?> selected="selected" <?php } ?>>Hằng tháng</option>
                                <option value="Quý" <?php if($a['tansuat'] == 'Quý') {?> selected="selected" <?php } ?>>Quý</option>
                                </select>
                        </div>
                        <div class="col2">
                            <label for="thutuc" class="lab">Thủ tục</label>
                            <input type="text" name="thutuc" placeholder="<?php echo $a['thutuc']?>" class="select4">
                        </div>
                        
                            <input type="submit" name="update" id="" value="Cập nhật" class="sub1">
                            
                        
                    <?php endforeach;?>

                </div>
      
    
            <!--
            </div>
        -->
            </div>
        </form>
            
            <div class="midle_second5">
                <h3 class="h33">Mục tiêu</h3>
                <div class="additionalform">
                <form method="POST" class="tabdata">
                                <table border="1" cellpadding="10" cellspacing="0" class="tabdata">
                                    <thead>
                                    <tr>
                                        <th><input type="checkbox">STT</th>
                                        <th>Mục tiêu</th>
                                        <th>Đơn vị đo lường</th>
                                        <th>Chỉnh sửa</th>
                                    </tr>
                                    </thead>
                                    <?php
                                        include('control2.php');
                                        $get_data = new data3();
                                        $data2 = $get_data -> select_muctieu2();
                                    ?>
                                    <tbody>
                                        <tr>
                                    
                                        <?php foreach ($data2 as $b):?>
                                            <tr>
                                                <td><?php echo $b['STT'];?></td>
                                                <td><?php echo $b['mucdich'];?></td>
                                                <td><?php echo $b['donvi']; ?></td>
                                                
                                                <td>
                                                <a href="update2.php?SUA=<?php echo $b['STT']?>" name="update">sua</a>&nbsp
                                                <a href="delete2.php?XOA=<?php echo $b['STT']?>" name="delete" onclick="if(confirm('Bạn có muốn xóa không?')) return true; else return false;">xoa</a>
                                                </td>
                                            
                                            </tr>
                                            
                                        <?php endforeach;?>
                                    
                                    </tbody>
                                </table>
                                <button type="submit" name="submit2" class="finalsub">Thêm hàng</button>
                        </form>
                </div>
                <?php
        
                                if(isset($_POST['submit2'])){
                            $get_data = new data3();
                            $insert = $get_data->insert($_POST['mucdich'],$_POST['donvi']);
                            if($insert){
                            
                            
                            }
                            else echo"<script>alert('thất bại')</script>";
                            } 
                            
                ?>
            </div>


        </div>

        

</body>
</html>
<?php
