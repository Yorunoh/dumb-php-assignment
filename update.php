
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
    <div class="formupdate">
        <form method="POST">
            <table border="1">
                <?php foreach ($data as $a):?>
                    <tr>
                        <td>Tên</td>
                        <td><input type="text" name="mucdich" placeholder="<?php echo $a['mucdich']?>"></td>
                    </tr>
                    <tr>
                    <td>Tần suất giám sát</td>
                        <td align="center">
                            <select id="tansuat" name="tansuat" class="select3">
                            <option value="không ai" <?php if($a['tansuat'] == 'không ai') {?> selected="selected" <?php } ?>>Không ai</option>
                            <option value="Hằng ngày" <?php if($a['tansuat'] == 'Hằng ngày') {?> selected="selected" <?php } ?>>Hằng ngày</option>
                            <option value="Hằng tuần" <?php if($a['tansuat'] == 'Hằng tuần') {?> selected="selected" <?php } ?>>Hằng tuần</option>
                            <option value="Hằng tháng" <?php if($a['tansuat'] == 'Hằng tháng') {?> selected="selected" <?php } ?>>Hằng tháng</option>
                            <option value="Quý" <?php if($a['tansuat'] == 'Quý') {?> selected="selected" <?php } ?>>Quý</option>
                            </select>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Thủ tục:</td>
                        <td><input type="text" name="thutuc" placeholder="<?php echo $a['thutuc']?>"></td>
                    </tr>
                    <tr>
                        <td colspan=2 align="center"><input type="submit" name="update" id="" value="Cập nhật"></td>
                    </tr>
                <?php endforeach;?>
            </table>
        </form>
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
            }
            else echo "<script>alert('khong thanh cong');</script>";
        }
    ?>

</body>
</html>