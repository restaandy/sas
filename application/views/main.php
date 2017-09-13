<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Gallery - Ace Admin</title>

		<meta name="description" content="responsive photo gallery using colorbox" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/colorbox.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="dist/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="dist/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/dist/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="dist/js/html5shiv.min.js"></script>
		<script src="dist/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		
		<?php $this->load->view("layout/nav",$var_nav); ?>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>
		<?php $this->load->view("layout/menu",$var_menu); ?>
			<div class="main-content">
				<div class="main-content-inner">
					<?php $this->load->view("layout/breadcumb",$var_breadcumb); ?>

					<div class="page-content">
					<?php $this->load->view("layout/setup"); ?>	
					<?php $this->load->view("layout/header",$var_header); ?>
					<?php $this->load->view("content/".$content,$var_content); ?>
					</div><!-- /.page-content -->
				</div>
			
			</div><!-- /.main-content -->

			<?php $this->load->view("layout/footer",$var_footer); ?>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		

		<!-- <![endif]-->

		<!--[if IE]>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url(); ?>assets/dist/js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='dist/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url(); ?>assets/dist/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="<?php echo base_url(); ?>assets/dist/js/jquery.colorbox.min.js"></script>

		<!-- ace scripts -->
		<script src="<?php echo base_url(); ?>assets/dist/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/dist/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
	jQuery(function($) {
			var $overflow = '';
			var colorbox_params = {
			rel: 'colorbox',
			reposition:true,
			scalePhotos:true,
			scrolling:false,
			previous:'<i class="ace-icon fa fa-arrow-left"></i>',
			next:'<i class="ace-icon fa fa-arrow-right"></i>',
			close:'&times;',
			current:'{current} of {total}',
			maxWidth:'100%',
			maxHeight:'100%',
			onOpen:function(){
				$overflow = document.body.style.overflow;
				document.body.style.overflow = 'hidden';
			},
			onClosed:function(){
				document.body.style.overflow = $overflow;
			},
			onComplete:function(){
				$.colorbox.resize();
			}
		};

		$('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);
		$("#cboxLoadingGraphic").html("<i class='ace-icon fa fa-spinner orange fa-spin'></i>");//let's add a custom loading icon	
		$(document).one('ajaxloadstart.page', function(e) {
			$('#colorbox, #cboxOverlay').remove();
	   });
	})
		</script>
	</body>
</html>
