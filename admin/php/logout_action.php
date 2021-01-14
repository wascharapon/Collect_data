<?php 
session_start();
unset($_SESSION['id']);
unset($_SESSION['status']);
session_destroy();
		echo "<script>alert('ออกจากระบบ');window.location.href = '../../index.php';</script>";
?>