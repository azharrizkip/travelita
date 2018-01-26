<script src="<?php echo URL_ASSETS;?>js/jquery2.0.3.min.js"></script>
<link href="<?php echo URL_ASSETS;?>css/stylnya.css" rel="stylesheet" type="text/css">
<style type="text/css">
.bg{
	background: url(<?php echo URL_ASSETS;?>images/log.jpg) no-repeat 0px 0px;
    background-size: cover;
}
</style>
<div class="bg">
		<div class="main-grid">
			<center>
							<div class="panel panel-widget agile-validation">
								<div class="validation-grids validation-grids-right login-form">
									<div class="widget-shadow"> 
										<div class="input-info">
											<h3>Daftar</h3>
										</div>
										<br><br>
											<form data-toggle="validator" novalidate="" action="<?php echo base_url();?>Travelitacon/savedata" method="post">
												<div class="form-group">
													<input type="text" class="form-control inputEmail" name="username" placeholder="Username" required="">
												</div>
												<div class="form-group">
													<input type="password" data-toggle="validator" class="form-control inputPassword" name="password" placeholder="Password" required="">
												</div>
												<div class="form-group">
													<input type="text" class="form-control inputEmail" name="fullname" placeholder="Full Name" required="">
												</div>
												<div class="form-group">
													<input type="text" data-toggle="validator" class="form-control inputPassword" name="level" placeholder="Level" required="">
												</div>
												<br>
												<div class="form-group">
													<button type="submit" class="btn btn-primar">Daftar</button>
												</div>
												
											</form>
									</div>
								</div>
							</div>
							</center>
						</div>
				<!-- //validation -->
			</div>
    <script src="<?php echo URL_ASSETS;?>js/valida.2.1.6.min.js"></script>
    <script src="<?php echo URL_ASSETS;?>js/validator.min.js"></script>