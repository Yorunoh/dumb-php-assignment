<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="muctieu.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body class="body">
    <header>

        <div class="logo">
           <a href="muctieu1.php">chưa có</a>
        </div>

        <div class="nav-left">
            <input type="search" name="query" placeholder="Tìm kiếm hoặc gõ lệnh (ctrl+g)" class="search-bar">
        </div>
    
    </header>
    <div class="body_all">
        <div class="header">
            <div class="h32">
                <div class="icon_second"><i class="fa fa-bars"></i></div>
                <h3 class="h33">Thêm Mục Tiêu Chất Lượng</h3>
            </div>
            </div>
        <div class="midle_second">
            <div class="midle_second1"></div>
            <div class="midle_second2">
                <div class="midle_second3">
                    <div class="borderform">
                        <form method="POST">
                            <div class="row">

                                <div class="col1">
                                    <label for="mucdich" class="lab">Mục tiêu</label>
                                    <input type="text" id="mucdich" name="mucdich" placeholder="" class="select1" required>
                                </div>
                                <div class="col2">
                                    <label for="thutuc" class="lab">Thủ tục</label>
                                    <input type="text" id="thutuc" name="thutuc" placeholder="" class="select2">
                                </div>
                                <div class="col3">
                                    <label for="tansuat" class="lab">Tần suất giám sát</label>
                                    <select id="tansuat" name="tansuat" class="select2">
                                        <option value="không ai">Không ai</option>
                                        <option value="Hằng ngày">Hằng ngày</option>
                                        <option value="Hằng tuần">Hằng tuần</option>
                                        <option value="Hằng tháng">Hằng tháng</option>
                                        <option value="Quý">Quý</option>
                                    </select>
                                </div>

                                <button type="submit"  name="submit" class="sub">Thêm hàng</button>
                            </div>
                        </form>
                    </div>
                </div>
                            <?php
                            include('control.php');
                                if(isset($_POST['submit'])){
                            $get_data= new data();
                            $insert=$get_data->insert($_POST['mucdich'],$_POST['thutuc'],$_POST['tansuat']);
                            if($insert){
                            echo"<script>alert('đăng nhập thành công')</script>";
                            header("Location: muctieu1.php");
                            exit();
                            }
                            else echo"<script>alert('thất bại')</script>";
                            } 
                            ?>
    <!--            
                <div class="midle_second5">
                    <div>
                        <p class="title">Mục Tiêu</p>
                    </div>
                        <form method="POST" class="tabdata">
                                <table border="1" cellpadding="10" cellspacing="0">
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
        </div>
                    -->
    </div>

</body>
</html>