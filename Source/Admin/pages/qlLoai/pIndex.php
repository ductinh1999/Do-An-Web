<form action="index.php?c=3&a=4" method="post" enctype="multipart/form-data" style="float:right">
     <p><input type="text" name="masp" placeholder="Nhập mã sản phẩm..." id="timkiem" required="required" />
        <input type="submit" id="button_timkiem" name="timkiem" value="Tìm Loại Sản Phẩm" />
        </p>
        </form>
<center><h1 style="color:#FF3300">Quản lý loại sản phẩm</h1></center>
<?php
    $a = 1;
    if(isset($_GET["a"]))
        $a = $_GET["a"];
    switch ($a) {
      case 1:
        include "pages/qlLoai/pDanhSach.php";
        break;
      case 2:
        include "pages/qlLoai/pCapNhat.php";
        break;
      case 3:
        include "pages/qlLoai/pThemMoi.php";
        break;
	  case 4:
        include "pages/qlLoai/pTimKiem.php";
        break;
      default:
        include "pages/pError.php";
        break;
    }
?>