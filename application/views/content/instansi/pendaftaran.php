<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/datepicker.min.css" />
<script src="<?php echo base_url(); ?>assets/dist/js/jquery.maskedinput.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/date-time/bootstrap-datepicker.min.js"></script>

<div class="col-lg-9">
<div class="widget-box">
						<div class="widget-header widget-header-blue widget-header-flat">
							<h4 class="widget-title lighter">Pendaftaran Siswa Didik Baru</h4>
							
						</div>
								<div class="widget-body">
									<div class="widget-main">
										<div id="fuelux-wizard-container">
											<div>
												<ul class="steps">
													<li data-step="1" class="active">
														<span class="step">1</span>
														<span class="title">Data Diri</span>
													</li>
														<li data-step="2" class="">
															<span class="step">2</span>
															<span class="title">Data Orang Tua</span>
														</li>
													</ul>
												</div>

												<hr>

												<div class="step-content pos-rel">
													<div class="step-pane active" data-step="1">
														<h3 class="lighter block green">Lengkapi Data di Bawah Ini</h3>
														<form class="form-horizontal" id="validation-form" method="get">
															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="nisn">NISN:</label>
																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input type="text" name="nisn" id="nisn" class="col-xs-12 col-sm-6">
																	</div>
																</div>
															</div>

															<div class="space-2"></div>
															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="nis">NIS:</label>
																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input type="text" name="nis" id="nis" class="col-xs-12 col-sm-6">
																	</div>
																</div>
															</div>

															<div class="space-2"></div>
															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="nama">Nama Siswa:</label>
																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input type="text" name="nama_siswa" id="nama" class="col-xs-12 col-sm-6">
																	</div>
																</div>
															</div>
															<div class="space-2"></div>
															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="nama">Tempat Lahir:</label>
																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input type="text" name="nama_siswa" id="nama" class="col-xs-12 col-sm-6">
																	</div>
																</div>
															</div>
															<div class="space-2"></div>
															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="nama">Tanggal Lahir:</label>
																<div class="col-xs-12 col-sm-9">
																<div class="input-group col-xs-12 col-sm-6">
																	<input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy">
																	<span class="input-group-addon">
																		<i class="fa fa-calendar bigger-110"></i>
																	</span>
																</div>
															</div>
															</div>
															<div class="space-2"></div>
															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Alamat Email:</label>
																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input type="email" name="email" id="email" class="col-xs-12 col-sm-6">
																	</div>
																</div>
															</div>

															<div class="space-2"></div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password">Password:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input type="password" name="password" id="password" class="col-xs-12 col-sm-4">
																	</div>
																</div>
															</div>

															<div class="space-2"></div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password2">Confirm Password:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input type="password" name="password2" id="password2" class="col-xs-12 col-sm-4">
																	</div>
																</div>
															</div>

															<div class="hr hr-dotted"></div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Company Name:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input type="text" id="name" name="name" class="col-xs-12 col-sm-5">
																	</div>
																</div>
															</div>

															<div class="space-2"></div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="phone">Phone Number:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="ace-icon fa fa-phone"></i>
																		</span>

																		<input type="tel" id="phone" name="phone">
																	</div>
																</div>
															</div>

															<div class="space-2"></div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="url">Company URL:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input type="url" id="url" name="url" class="col-xs-12 col-sm-8">
																	</div>
																</div>
															</div>

															<div class="hr hr-dotted"></div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right">Subscribe to</label>

																<div class="col-xs-12 col-sm-9">
																	<div>
																		<label>
																			<input name="subscription" value="1" type="checkbox" class="ace">
																			<span class="lbl"> Latest news and announcements</span>
																		</label>
																	</div>

																	<div>
																		<label>
																			<input name="subscription" value="2" type="checkbox" class="ace">
																			<span class="lbl"> Product offers and discounts</span>
																		</label>
																	</div>
																</div>
															</div>

															<div class="space-2"></div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right">Gender</label>

																<div class="col-xs-12 col-sm-9">
																	<div>
																		<label class="line-height-1 blue">
																			<input name="gender" value="1" type="radio" class="ace">
																			<span class="lbl"> Male</span>
																		</label>
																	</div>

																	<div>
																		<label class="line-height-1 blue">
																			<input name="gender" value="2" type="radio" class="ace">
																			<span class="lbl"> Female</span>
																		</label>
																	</div>
																</div>
															</div>

															<div class="hr hr-dotted"></div>

															<div class="space-2"></div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="platform">Platform</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<select class="input-medium" id="platform" name="platform">
																			<option value="">------------------</option>
																			<option value="linux">Linux</option>
																			<option value="windows">Windows</option>
																			<option value="mac">Mac OS</option>
																			<option value="ios">iOS</option>
																			<option value="android">Android</option>
																		</select>
																	</div>
																</div>
															</div>

															<div class="space-2"></div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="comment">Comment</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<textarea class="input-xlarge" name="comment" id="comment"></textarea>
																	</div>
																</div>
															</div>

															<div class="space-8"></div>

															<div class="form-group">
																<div class="col-xs-12 col-sm-4 col-sm-offset-3">
																	<label>
																		<input name="agree" id="agree" type="checkbox" class="ace">
																		<span class="lbl"> I accept the policy</span>
																	</label>
																</div>
															</div>
														</form>
													</div>

													<div class="step-pane" data-step="2">
														<div>
															<div class="alert alert-success">
																<button type="button" class="close" data-dismiss="alert">
																	<i class="ace-icon fa fa-times"></i>
																</button>

																<strong>
																	<i class="ace-icon fa fa-check"></i>
																	Well done!
																</strong>

																You successfully read this important alert message.
																<br>
															</div>

															<div class="alert alert-danger">
																<button type="button" class="close" data-dismiss="alert">
																	<i class="ace-icon fa fa-times"></i>
																</button>

																<strong>
																	<i class="ace-icon fa fa-times"></i>
																	Oh snap!
																</strong>

																Change a few things up and try submitting again.
																<br>
															</div>

															<div class="alert alert-warning">
																<button type="button" class="close" data-dismiss="alert">
																	<i class="ace-icon fa fa-times"></i>
																</button>
																<strong>Warning!</strong>

																Best check yo self, you're not looking too good.
																<br>
															</div>

															<div class="alert alert-info">
																<button type="button" class="close" data-dismiss="alert">
																	<i class="ace-icon fa fa-times"></i>
																</button>
																<strong>Heads up!</strong>

																This alert needs your attention, but it's not super important.
																<br>
															</div>
														</div>
													</div>
												</div>
											</div>

											<hr>
											<div class="wizard-actions">
											<button class="btn btn-prev" disabled="disabled">
												<i class="ace-icon fa fa-arrow-left"></i>
												Prev
											</button>
											<button class="btn btn-success btn-next" data-last="Finish">
												Next
												
											<i class="ace-icon fa fa-arrow-right icon-on-right"></i></button>
										</div>
									</div><!-- /.widget-main -->
								</div><!-- /.widget-body -->
							</div>
</div>
<div class="col-lg-3"></div>
<script type="text/javascript">
	$('.date-picker').datepicker({
					autoclose: true,
					todayHighlight: true
				})
</script>
