<a href="#">
    <img src="images/avatar-trang.png" width="50" height="50"/>
</a>
<?php
    if(!isset($_GET["id"]))
		DataProvider::ChangeURL("index.php?c=404");
	
	$id = $_GET["id"];
	$sql = "SELECT * FROM hangsanxuat WHERE MaHangSanXuat = $id";
	$result = DataProvider::ExecuteQuery($sql);
	$row = mysqli_fetch_array($result);
?>
<form action="pages/qlHang/xlCapNhat.php" method="get" onsubmit="return KiemTra();">
    <fieldset>
	    <legend>cập nhật thông tin hãng sản xuất</legend>
		<div>
		    <span>Tên hãng sản xuất:</span>
			<input type="text" name="txtTen" id="txtTen" value="<?php echo $row["TenHangSanXuat"]; ?>" />
			<input type="hidden" name="id" value="<?php echo $row["MaHangSanXuat"]; ?>" />
			<input type="submit" value="Cập nhật" />
		</div>
		<div id="error"></div>
	</fieldset>
</form>
<script type="text/javascript">
    finction KiemTra()
	{
		var ten = document.getElementById("txtTen");
		var err = document.getElementById("error");
		if(ten.value == "")
		{
			err.innerHTML = "Tên hãng sản xuất không được rỗng";
			ten.focus();
			return false;
		}
		else
			err.innerHTML = "";
		
		return true;
	}
</script>
		
	