<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>ระบบเก็บข้อมูลผู้สูงอายุและผู้พิการ</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body style="background-image:url(images/bg_b.jpg)" > 
	<div class="container" style="opacity:0.9">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo"></h1>
		</div>
		<div class="login-box animated fadeInUp" style="margin-top:-250px">
			<div class="box-header" style="background:green;">
				<h2 style="font-size:20px;background-color:#616f39;">ระบบเก็บข้อมูลผู้สูงอายุและผู้พิการ</h2>
                		<form class="form" action="php/check_login.php" method="post">
			</div>
			<img src="images/logosum.png" alt="Norway" style="width:100%;">
			<label for="username">ชื่อผู้ใช้งาน</label>
			<br/>
			<input type="text" id="username" name="username">
			<br/>
			<label for="password">รหัสผ่าน</label>
			<br/>
			<input type="password" id="password" name="password">
			<br/>
			<button style="width:120px;height:40px;font-size:15px;background:#616f39;" type="submit">เข้าสู่ระบบ</button>&nbsp;&nbsp;
            <button type="button" style="width:120px;height:40px;font-size:15px;background:#616f39;" onClick="window.location.href='../../User/index.php'" >ยกเลิก</button>
            </form>
		</div>
	</div>
</body>

<script>
	$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>

</html>