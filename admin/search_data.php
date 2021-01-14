<?php include'header.php'?>

	<!-- Section: intro -->
    <section id="intro" class="intro">
		<div class="intro-content">
			<div class="container">
				<div class="row">
				<div class="col-lg-12">
						<div class="form-wrapper">
						<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
						
							<div class="panel panel-skin">
							<div class="panel-heading">
									<h3 class="panel-title"><span class="fa fa-search"></span>ค้นหาข้อมูล</small></h3>
									</div>
									<div class="panel-body">
									<form role="form" class="lead" action="search_data.php" method="GET" >
										<div class="row">
										<input type="hidden" name="page" value="search_data">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>เลขบัตรประจำตัวประชาชน</label>
													<input type="text" name="id_card" class="form-control input-md">
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label id="table_select">&nbsp;</label>
											<a ><button type="submit"  class="btn btn-skin btn-block btn-lg"><span class="fa fa-search">&nbsp;</span></button></a>
												</div>
											</div>
										</div>
							
										
								
									</form>
								</div>
							</div>				
						
						</div>
					<div class="col-lg-12">
						<div class="form-wrapper">
						<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
						
							<div class="panel panel-skin">
							<div class="panel-heading">
									<h3 class="panel-title"><span class="fa fa-table"></span>ตารางข้อมูล<small></small></h3>
									</div>
									<div class="panel-body" style="overflow-y:auto;height:600px">
									<table id="customers">
  					<tr>
						<th><center>ลำดับ</center></th>
    <th><center>เลขบัตรประจำตัว</center></th>
	<th><center >ชื่อ - นามสกุล</center></th>
	<th style="width:300px"><center>ที่อยู่</center></th>
    <th style="width:100px"><center>อายุ</center></th>
	<th style="width:100px"><center>เงินที่ได้รับ</center></th>
	<th style="width:100px"><center>วันที่ลงทะเบียน</center></th>
	<th><center >ยืนยันรายการ</center></th>
	
	
  </tr>
	<?php 
	$count=1;
	if((isset(($_GET['month']))==false)||($_GET['month']==''))
	{
		$checking = false;
	if((isset(($_GET['id_card']))==false)||($_GET['id_card']==''))
		{
			?>
			<script>window.location = window.location+'#table_select'</script> 
			<?php 
		$sql ="SELECT * FROM data_list  ORDER BY confirm ASC "; 
		}
		else
		{
		$sql ="SELECT * FROM data_list where id_card = '$_GET[id_card]' ORDER BY confirm ASC"; 
		}
	}
	else
	{
		$checking = true;
		$sql ="SELECT * FROM data_list where Month(date) = '$_GET[month]' ORDER BY confirm ASC"; 
	}

		$rs = @mysqli_query($con, $sql);
			while ($row = mysqli_fetch_array($rs))
	         {	 ?>
  <tr>
	<?php $day=	date("d-m-Y",strtotime($row['date'])); ?>
	<td><center><?php echo $count++;?></center></td>
	<td><center><?php echo $row['id_card'];?></center></td>
	<td><center><?php echo $row['name'];?></center></td>
	<td><center><?php echo $row['address'];?></center></td>
	<td><center><?php echo $row['age'];?></center></td>
	<td><center><?php echo $row['pay'];?></center></td>
	<td><center><?php echo $day;?></center></td>
	 <?php if($row['confirm']=='No'){?>
		<td><button onclick="confirm_user(<?php echo $row['id'];?>)" style="background-color:#ff5151;border-color:#ff5151 ;" class="btn btn-skin btn-block btn-lg"><span class="fa fa-close" style="font-size:30px;">&nbsp;</span></button></td>
	 <?php } else { ?>
		<td ><button onclick="disable_user(<?php echo $row['id'];?>)" style="background-color:#62D627;border-color:#62D627 ;" class="btn btn-skin btn-block btn-lg"><span class="fa fa-check" style="font-size:30px;">&nbsp;</span></button></td>
	  <?php } ?>
	
	
	
	</tr>
			 <?php } ?>
  <tr> </table>
								</div>
							</div>				
						

							<div class="panel panel-skin">
							<div class="panel-heading">
									<h3 class="panel-title"><span class="fa fa-check"></span>ยืนยันรายการ</small></h3>
									</div>
									<div class="panel-body">
									<form role="form" class="lead" action="php/confirm_data_g.php" >
										<div class="row">
			
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>วันที่ลงทะเบียน</label>
													<select style="font-size:16px" name="confirm_date" id="confirm_date" class="form-control input-md">
													<?php if($checking == true) 
													{ switch($_GET['month']){
														case 1:$date_temp = 'มกราคม';break;
														case 2:$date_temp = 'กุมภาพันธ์';break;
														case 3:$date_temp = 'มีนาคม';break;
														case 4:$date_temp = 'เมษายน';break;
														case 5:$date_temp = 'พฤษภาคม';break;
														case 6:$date_temp = 'มิถุนายน';break;
														case 7:$date_temp = 'กรกฎาคม';break;
														case 8:$date_temp = 'สิงหาคม';break; 
														case 9:$date_temp = 'กันยายน';break;
														case 10:$date_temp = 'ตุลาคม';break;
														case 11:$date_temp = 'พฤศจิกายน';break;
														case 12:$date_temp = 'ธันวาคม';break;
													}
														?>
														  <script>window.location = window.location+'#table_select'</script>
														<option value="<?php echo $_GET['month'];?>"><?php echo $date_temp;?></option>
													<?php } ?>
  													<option value="1">มกราคม</option>
														<option value="2">กุมภาพันธ์</option>
														<option value="3">มีนาคม</option>
														<option value="4">เมษายน</option>
														<option value="5">พฤษภาคม</option>
														<option value="6">มิถุนายน</option>
														<option value="7">กรกฎาคม</option>
														<option value="8">สิงหาคม</option>
														<option value="9">กันยายน</option>
														<option value="10">ตุลาคม</option>
														<option value="11">พฤศจิกายน</option>
														<option value="12">ธันวาคม</option>
													</select>
												
												</div>
											</div>
											<div  class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>&nbsp;</label>
													 <button type="button" onclick="checking_data()" class="btn btn-skin btn-block btn-lg"><span class="fa fa-search">ตรวจสอบ</span></button>
												</div>
											</div>
										</div>
										<center>
										<a><button  type="submit" style="background-color:#62D627;border-color:#62D627 ; width:150px;height:34px" class="btn btn-skin btn-block btn-lg"><span class="fa fa-check" style="font-size:12px;">&nbsp;</span></button></a>
										</center>
										</form>
						</div>
						</div>
							
					</div>					
				</div>		
			</div>
		</div>		
    </section>
	
	<!-- /Section: intro -->
		
	
	<?php include'footer.php'?>