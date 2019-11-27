<?php
if (isset($_POST['btn_mail'])) {
	include 'config.php';
	$hoten = $_POST['txt_hoten'];
	$email = $_POST['txt_email'];
	$dienthoai = $_POST['txt_dienthoai'];
	$bds = $_POST['sl_select'];
	$nhucau = $_POST['txt_nhucau'];
	$sql = "INSERT INTO `tbl_emailkh` (`IDKH`, `HoVaTen`, `Email`, `DienThoai`, `BDS`, `NhuCauKH`) VALUES (NULL, '$hoten', '$email', '$dienthoai', '$bds', '$nhucau');";
	$kq = mysqli_query($con, $sql);
// 	$re = mysqli_num_rows($kq);
// 	if($re > 0){
// 	    echo "<script>alert('Đã gửi thành công : $hoten');</script>";
// 	}else{
// 	    echo "<script>alert('Gửi không thành công : $hoten');</script>";
// 	}
	
}
?>