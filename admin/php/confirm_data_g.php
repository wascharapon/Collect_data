<?php 
include'../../login/php/connect.php';
$confirm_date=$_GET['confirm_date']; 
$time=date("Y-m-d",time());
$sql ="UPDATE data_list
SET confirm = 'Yes',confirm_date = '$time'
WHERE Month(date) = '$confirm_date'";

if($rs = @mysqli_query($con, $sql))
{
	echo "<script>alert('ยืนยันรายการสำเร็จ');window.location.href = '../search_data.php?page=search_data';</script>";
}
else
{
	echo "<script>alert('ทำรายการไม่สำเร็จ');</script>".mysqli_errno($con);
}
?>