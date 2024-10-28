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
            chưa có
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
            <button type="submit" form="myForm" class="header_second">
                Lưu
            </button>
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
                                    <select id="tansuat" name="tansuat" class="select3">
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
                            if($insert)
                            echo"<script>alert('đăng nhập thành công')</script>";
                            else echo"<script>alert('thất bại')</script>";
                            } 
                            ?>
                
                <div class="midle_second5">
                    <div>
                        <p class="title">Mục Tiêu</p>
                    </div>
                    <table border="1" cellpadding="10" cellspacing="0">
                        <thead>
                        <tr>
                            <th><input type="checkbox">STT</th>

                            <th>Mục tiêu</th>
                            <th>Mục tiêu</th>
                            <th>Đơn vị đo lường</th>
                            <th>Chỉnh sửa</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="5" class="no-data">Không Có Dữ Liệu</td>
                            </tr>
                        </tbody>
                    </table>
                <!--
                    <button type="submit" form="myForm" name="submit" class="sub">Thêm hàng</button>
                        -->
                   
                </div>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>