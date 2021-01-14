<?php 
include'../../login/php/connect.php';
$name=$_POST['name'];
$id_card=$_POST['id_card'];
$address=$_POST['address'];
$age=$_POST['age'];
$cetegory=$_POST['cetegory'];
$confirm='No';
$confirm_date=0;
$date_time=date("Y-m-d",time());
function timespan($seconds = 1, $time = '')
{
	if ( ! is_numeric($seconds))
	{
		$seconds = 1;
	}

	if ( ! is_numeric($time))
	{
		$time = time();
	}

	if ($time <= $seconds)
	{
		$seconds = 1;
	}
	else
	{
		$seconds = $time - $seconds;
	}
	
	$str = '';
	$years = floor($seconds / 31536000);

	if ($years > 0)
	{	
		$str .= $years.' ปี, ';
	}	

	$seconds -= $years * 31536000;
	$months = floor($seconds / 2628000);

	if ($years > 0 OR $months > 0)
	{
		if ($months > 0)
		{	
			$str .= $months.' เดือน, ';
		}	

		$seconds -= $months * 2628000;
	}

	$weeks = floor($seconds / 604800);

	if ($years > 0 OR $months > 0 OR $weeks > 0)
	{
		if ($weeks > 0)
		{	
			$str .= $weeks.' สัปดาห์, ';
		}
	
		$seconds -= $weeks * 604800;
	}			

	$days = floor($seconds / 86400);

	if ($months > 0 OR $weeks > 0 OR $days > 0)
	{
		if ($days > 0)
		{	
			$str .= $days.' วัน, ';
		}

		$seconds -= $days * 86400;
	}

	$hours = floor($seconds / 3600);

	if ($days > 0 OR $hours > 0)
	{
		if ($hours > 0)
		{
			$str .= $hours.' ชั่วโมง, ';
		}
	
		$seconds -= $hours * 3600;
	}

	$minutes = floor($seconds / 60);

	if ($days > 0 OR $hours > 0 OR $minutes > 0)
	{
		if ($minutes > 0)
		{	
			$str .= $minutes.' นาที, ';
		}
	
		$seconds -= $minutes * 60;
	}

	if ($str == '')
	{
		$str .= $seconds.' วินาที';
	}
		
	return substr(trim($str), 0, -1);
}
$birthdate_sub =date("Y-m-d",strtotime($age)); 
$birthdate = strtotime($birthdate_sub);
$today = time();
$age=(int)timespan( $birthdate , $today );

if($cetegory=='normal')
	{
		$pay=0;
	}
elseif($cetegory=='disabled')
	{
		$pay=800;
	}

	if(($age>=60)&&($age<=69))
	{
		$pay+=600;
	}
	else if(($age>=70)&&($age<=79))
	{
		$pay+=700;
	}
	else if(($age>=80)&&($age<=89))
	{
		$pay+=800;
	}
	else if(($age>=90)&&($age<=99))
	{
		$pay+=900;
	}
	else if(($age>=100)&&($age<=109))
	{
		$pay+=1000;
	}
	else if(($age>=110)&&($age<=119))
	{
		$pay+=1100;
	}

$sql ="INSERT INTO data_list (name,id_card,address,age,pay,confirm,confirm_date,date) 
	VALUES ('$name','$id_card','$address','$age','$pay','$confirm','$confirm_date','$date_time');";
if($rs = @mysqli_query($con, $sql))
{
	echo "<script>alert('เพิ่มข้อมูลเรียบร้อย');window.location.href = '../index.php?page=add_data';</script>";
}
else
{
	echo "<script>alert('แก้ไขข้อมูลไม่สำเร็จ');window.location.href = '../index.php?page=add_data;</script>".mysqli_errno($con);
}
?>

