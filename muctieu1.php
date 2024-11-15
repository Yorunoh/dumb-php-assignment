<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="muctieu.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <?php
        include('control.php');
        $get_data = new data();
        $data = $get_data -> select_muctieu();
    ?>
</head>
<body class="body">
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
    <div class="body_all">
        <div class="header">
            <div class="header1">
                <div class="icon"><i class="fa fa-bars"></i></div>
                <h3 class="h3">Mục tiêu chất lượng</h3>
            </div>
            <div class="header2">
                <div class="header_con1">
                    <i style="float: left; margin-left: 10px;margin-top: 6px;" class="fa fa-bars" aria-hidden="true"></i>
                    Xem Kiểu Danh Sách
                </div>
                <div class="header_con2">
                    <i style="float: left; margin-top: 8px;margin-left: 7px;" class="fa fa-repeat" aria-hidden="true"></i>
                </div>
                <div class="header_con3">
                    <i style="float: left; margin-top: 10px;margin-left: 7px;" class="fa fa-ellipsis-h" aria-hidden="true"></i>
                </div>
                <div class="header_con4">
                    <a class="a1" href="muctieu2.php">+ Thêm Mục tiêu chất lượng</a>
                </div>
            </div>


        </div>
        <div class="midle">
            <div class="midle1">
                <div>
                    <div class="midle_con1">
                        Lọc theo
                    </div>
                    <div class="midle_con2">
                        <!--
                        <span class="span"> Được Giao Cho</span>
                    -->
                        <select id="options" name="options">
                            <option>Được Giao Cho</option>
                        </select>
                    </div>
                    <div class="midle_con3">
                        <!--
                        <span class="span">Được Tạo Bởi</span>
                    -->
                        <select id="options" name="options">
                            <option>Được tạo bởi</option>
                        </select>
                    </div>
                    <div><a class="a" href="">Chỉnh sửa bộ lọc</a></div>
                    <div class="midle_con4">
                        <!--
                        <span class="span">Nhãn</span>
                    -->
                    <select id="options" name="options">
                        <option>Nhãn</option>
                    </select>
                    </div>
                    <div><a class="a" href="">Hiện nhãn</a></div>
                    <div style="margin-top: 10px;" class="midle_con1">
                        Lưu Bộ Lọc
                    </div>
                    <div>
                        <textarea class="midle_con5" id="text" placeholder=" Tên bộ lọc"></textarea>
                    </div>

                </div>
            </div>
            <div class="midle2">
                <div class="midle_con6">
                    <div>
                        <textarea class="midle_con7" id="text" placeholder=" Tên"></textarea>
                    </div>
                    <div class="midle_con8">
                        <!--
                        <span class="span2">Sửa Lần Cuối Vào</span>
                    -->
                        <select id="options" name="options">
                            <option>Sửa lần cuối vào</option>
                            <option>Tên</option>
                            <option>Được tạo vào ngày</option>
                            <option>Được dùng nhiều nhất</option>
                            <option>Tần suất giám sát</option>
                            <option>Thủ tục</option>
                        </select>
                    </div>
                    <div class="midle_con9">
                        <i style="float: left; margin-left: 10px;margin-top: 6px;" class="fa fa-bars" aria-hidden="true"></i>
                    </div>
                    <div class="midle_con10">
                        <i style="float: left;line-height: 30px; margin-left: 5px;" class="fa fa-bars" aria-hidden="true"></i>
                        <span class="span">Bộ Lọc</span>
                    </div>
                </div>
                <div class="midle_con12">
                <!--
                    <i style="font-size:100px;float: right;margin-right:470px;margin-top: 20px;" class="fa fa-file-text-o" aria-hidden="true"></i>
                    <span class="span3">Chưa Có Thông Tin Mục Tiêu Chất Lượng</span>
                
                    <div class="midle_con11">
                    
                    <a class="a1" href="muctieu2.html">Tạo Mục Tiêu Chất Lượng Đầu Tiên</a>
                    </div>
                -->
                <div class="formhienthi">
                <form method="POST">
                    <table border="1">
                        <tr>
                            <td>Tên mục đích</td>
                            <td>Thủ tục</td>
                            <td>Tần suất giám sát</td>  
                            <td>tuy chon</td>
                        </tr>
                        <?php foreach ($data as $a):?>
                        <tr>
                            <td><?php echo $a['mucdich']; ?></td>
                            <td><?php echo $a['thutuc']; ?></td>
                            <td><?php echo $a['tansuat']; ?></td>
                            
                            
                            <td><a href="update.php?SUA=<?php echo $a['ID']?>" name="update">sua</a>&nbsp
                            <a href="delete.php?XOA=<?php echo $a['ID']?>" name="delete" onclick="if(confirm('Bạn có muốn xóa không?')) return true; else return false;">xoa</a></td>
                        
                        </tr>
                        <?php endforeach;?>
                    </table>
                </form>
                </div>
                </div>
                <hr>
                <div class="midle_con13">   
                    <div class="midle_con14">
                        <button class="span">20</button>
                    </div>
                    <div class="midle_con15">
                        <button class="span">100</button>
                    </div>
                    <div class="midle_con16">
                        <button class="span">500</button>
                    </div>
                </div>
            </div>

        </div>
        
    </div>
</body>
</html>