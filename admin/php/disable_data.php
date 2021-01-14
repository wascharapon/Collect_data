<?php 
include'../../login/php/connect.php';
$id=$_GET['id'];
$time=date("Y-m-d",time());
$sql ="UPDATE data_list
SET confirm = 'No',confirm_date = '00-00-0000'
WHERE id = '$id'";

if($rs = @mysqli_query($con, $sql))
{
	echo "<script>window.location.href = '../search_data.php?page=search_data';</script>";
}
else
{
	echo "<script>alert('ทำรายการไม่สำเร็จ');</script>".mysqli_errno($con);
}
?>