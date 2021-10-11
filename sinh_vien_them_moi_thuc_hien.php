<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sinh viên thêm mới</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
	    <?php 
            // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
            include('./config.php');

            // 2. Lấy ra được các dữ liệu mà trang TIN TỨC THÊM MỚI chuyển sang
            $ma_sv = $_POST["txtMaSinhVien"];
            $ten_sv = $_POST["txtHoTen"];
            $dia_chi = $_POST["txtDiaChi"];
            $sdt = $_POST["txtSDT"];

            // 3. Viết câu lệnh truy vấn để thêm mới dữ liệu vào bảng TIN TỨC trong CSDL)
            $sql = "
                    INSERT INTO `tbl_sinh_vien` (`ma_sv`, `ten_sv`, `dia_chi`, `sdt`) 
                    VALUES ('".$ma_sv."', '".$ten_sv."', '".$dia_chi."', '".$sdt."')
                    "; 
            // echo $sql; exit();

            // 4. Thực thi câu lệnh truy vấn (mục đích trả về dữ liệu các bạn cần)
            $noi_dung_sinh_vien = mysqli_query($ket_noi, $sql);

            // 5. Hiển thị ra thông báo các bạn đã thêm mới tin tức thành công và đẩy các bạn về trang quản trị tin tức
            echo "
            	<script type='text/javascript'>
            		window.alert('Bạn đã thêm mới bài viết thành công');
            	</script>
            ";

            echo "
            	<script type='text/javascript'>
            		window.location.href='quan_tri_sinh_vien.php';
            	</script>
            ";
	    ;?>
    </body>
</html>
