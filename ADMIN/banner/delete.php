<?php  
if(isset($_GET["id"])){
	$id = $_GET["id"];
			// mở kết nối database
	include("../connect/open.php");
	$sql = "DELETE FROM tbl_banner WHERE BannerID ='$id'";
	$resultPro = mysqli_query($con,$sql);
	header("location: ../index.php?sider=banner");
	include("../connect/close.php");
}else{
	header("location: ../index.php?sider=banner");
}

?>