
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
        $ID = $_GET['SUA'];
        $data = $get_data -> select_muctieu($ID);
?>
<body>
    <header>

        <div class="logo">
            chưa có
        </div>
    <!--
        <div class="nav">
            <a href="#">Mục tiêu chất lượng</a>
            <a href="#">Thủ tục chất lượng</a>
            <a href="#">Cây thủ tục</a>
        </div>
    -->
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
            
            <div class="midle_third">
                <h3 class="h33">Mục tiêu</h3>
                <div class="additionalform">
                    <form method="POST">
                        <table border="1">
                            <tr>
                                <td>STT</td>
                                <td>Mục tiêu</td>
                                <td>Đơn vị đo lường</td>
                                <td>tuy chon</td>
                            </tr>
                    
                            
                            <tr>
                                <td>
                        
                            
                                </td>
                                <td>
                                
                            
                                </td>       
                                <td>
                                
                            
                                </td>
                                
                                <td><a href="update.php?SUA=" name="update">sua</a>&nbsp
                                <a href="delete.php?XOA=" name="delete" onclick="if(confirm('Bạn có muốn xóa không?')) return true; else return false;">xoa</a></td>
                            
                            </tr>
                            <input type="submit" name="update" id="" value="Thêm hàng" class="sub1">
                            
                        </table>
                    </form>
                </div>
            </div>



        </div>
        
            
                
                





        <?php
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

</body>
</html>