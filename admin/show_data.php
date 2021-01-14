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
									<form role="form" class="lead" action="show_data.php" method="GET" >
										<div class="row">
										<input type="hidden" name="page" value="show_data">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>วันที่ยืนยันรายการ</label>
													<select style="font-size:16px" name="confirm_date" id="confirm_date" class="form-control input-md">
													<?php if(isset($_GET['confirm_date']) == true) 
													{ 
														switch($_GET['confirm_date'])
														{
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
														<option value="<?php echo $_GET['confirm_date'];?>"><?php echo $date_temp;?></option>
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
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label id="table_select">&nbsp;</label>
											<a><button type="submit"  class="btn btn-skin btn-block btn-lg"><span class="fa fa-search"></span></button></a>
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
	
	<th><center >วันที่ยืนยันรายการ</center></th>
	
	
  </tr>
	<?php 
	$total=0;
	$count=1;
	if((isset(($_GET['confirm_date']))==false)||($_GET['confirm_date']==''))
		{
		$sql ="SELECT * FROM data_list where confirm='Yes' ORDER BY id ASC "; 
		}
		else
		{
		$sql ="SELECT * FROM data_list where Month(confirm_date) = '$_GET[confirm_date]' ORDER BY id ASC"; 
		}
		$rs = @mysqli_query($con, $sql);
			while ($row = mysqli_fetch_array($rs))
	         { $total += $row['pay'];
						 ?>
  <tr>
	<?php $day=	date("d-m-Y",strtotime($row['confirm_date'])); ?>
	<td><center><?php echo $count++;?></center></td>
	<td><center><?php echo $row['id_card'];?></center></td>
	<td><center><?php echo $row['name'];?></center></td>
	<td><center><?php echo $row['address'];?></center></td>
	<td><center><?php echo $row['age'];?></center></td>
	<td><center><?php echo $row['pay'];?></center></td>
	<td><center><?php echo $day;?></center></td>
	
	</tr>
			 <?php } ?>
  <tr> </table>
								</div>
							</div>				
						

							<div class="panel panel-skin">
							<div class="panel-heading">
									<h3 class="panel-title"><span class="fa fa-money" aria-hidden="true"></span>บัญชีรายการจ่ายเงิน</small></h3>
									</div>
									<div class="panel-body">
									<form role="form" class="lead" action="show_data.php" method="GET" >
										<div class="row">
									
										<table id="customers">
  					<tr>
						<th><center>รายการทั้งหมด</center></th>
    <th><center>รวมเป็นเงิน</center></th>
	
	
  </tr>

  <tr>
	
	<td><center><?php echo $count-1;?></center></td>
	<td><center><?php echo $total;?></center></td>
	
	
	</tr>
  <tr> </table>
	<center>
	<br>	<a onclick="window.print()"><button  style="width:200px;background-color:#4FE105;border-color:#4FE105;"class="btn btn-skin btn-block btn-lg"><span class="fa fa-print">&nbsp;</span></button></a>
					</center>				
										</div>
							
										
								
									</form>
								</div>
							</div>				
						
						</div>

						</div>
						</div>
						
					</div>					
				</div>		
			</div>
		</div>		
    </section>
	
	<!-- /Section: intro -->
		
	
	<?php include'footer.php'?>