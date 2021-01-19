<?php
	session_start();
	include "lib/DataProvider.php";
	
	$_SESSION["path"] = $_SERVER["REQUEST_URI"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
    <div id="wrapper">
		<?php
			
			include "modules/mHeader.php";
			include "modules/mMenu.php";
			include "modules/mSidebar.php";
		?>
		
		<div id="content">
			<?php
				$a = 1;
				if(isset($_GET["a"]) == true)
					$a = $_GET["a"];
				switch($a)
				{
					case 1:
						include "pages/pIndex.php";
						break;
					case 2:
						include "pages/pSanPhamTheoHang.php";
						break;
					case 3:
						include "pages/pSanPhamTheoLoai.php";
						break;
					case 4:
						include "pages/pChiTiet.php";
						break;
					case 5:
						include "pages/GioHang/pIndex.php";
						break;
					case 6:
						include "pages/TaoTaiKhoan/pIndex.php";
						break;
					case 7:
						include "timkiem/timkiem.php";
						break;
					case 8:
						include "pages/pFilter.php";
					default:
						include "pages/pError.php";
						break;
				}
			?>
		</div>
		<?php include "modules/mFooter.php"; ?>
	</div>
</body>
</html>
	