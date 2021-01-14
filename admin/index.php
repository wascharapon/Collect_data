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
									<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span>ระบบเก็บข้อมูลผู้สูงอายุและผู้พิการ</h3>
									</div>
									<div class="panel-body">
									<form action="php/add_data.php" method="POST"role="form" class="lead"runat="server"  enctype="multipart/form-data">
										<div class="row">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>ชื่อ-นามสกุล</label>
													<input type="text" name="name"  class="form-control input-md"required>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
												<label>เกิดวันที่</label>
													<input type="date" name="age" class="form-control input-md"required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
												<label>เลขบัตรประจำตัวประชาชน</label>					
													<input type="text" name="id_card" id="id_card" maxlength="13"  class="form-control input-md"required>
												</div>
												<div class="form-group">
												<label>จัดอยู่ในประเภท</label><br>&nbsp;&nbsp;
												<input type="radio"  name="cetegory" value="normal" checked>
  											<label for="huey">ผู้สูงอายุ</label><br>&nbsp;&nbsp;
												<input type="radio"  name="cetegory" value="disabled">
  											<label for="huey">คนพิการ</label>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>ที่อยู่</label>
													 <textarea name="address" style="height:150px" class="form-control input-md"required></textarea>
												</div>
											</div>
										</div>
									
					
										</div>
										</div>
										
										<button type="submit"class="btn btn-skin btn-block btn-lg"><span class="fa fa-save">&nbsp;</span>บันทึก</button>
										
									
									
									</form>
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