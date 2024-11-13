
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="muctieu.css" type="text/css">
    <title>Document</title>
</head>
<?php
        include('control2.php');
        $get_data = new data3();
        $STT = $_GET['SUA'];
        $data = $get_data -> select_muctieu2();
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
                            <label for="mucdich" class="lab">mục tiêu</label>
                            <input type="text" name="mucdich" placeholder="<?php echo $a['mucdich']?>"  class="select4">
                        </div>
                        
                        <div class="col2">
                            <label for="mucdich" class="lab">Đơn vị</label>
                            <input type="text" name="donvi" placeholder="<?php echo $a['donvi']?>"  class="select4">
                        </div>
                        
                            <button type="submit" name="update" id="" value="Cập nhật" class="sub1">
                            
                        
                    <?php endforeach;?>

                </div>
            <!--
            </div>
        -->
            </div>
        </form>



        </div>
        
        <?php
        if(isset($_POST['update']))
        {
            if(empty($_POST['mucdich']))
                echo "muc dich khong duoc de trong";
            else if(empty($_POST['donvi']))
                echo "tansuat khong duoc de trong";
            else
                $up_muctieu = $get_data -> update_muctieu2($_POST['mucdich'], $_POST['donvi'], $STT);

            if($up_muctieu){
                echo "<script>alert('thanh cong');</script>";
                header("Location: muctieu2.php");
                exit();
            }
            else echo "<script>alert('khong thanh cong');</script>";
        }
    ?>

</body>
</html>