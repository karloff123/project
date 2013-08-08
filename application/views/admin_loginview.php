<div style = "background:url(<?php echo base_url();?>img/container_bg.png);-moz-box-shadow:0px 0px 10px 2px #333;-webkit-box-shadow: 0px 0px 10px 2px #333;box-shadow:0px 0px 10px 2px #333;" class = "span11 offset1">
	<div class = "row-fluid" style = "border-bottom:1px solid #666666">
		<div class = "span10">
			
		</div>
		
		<div class = "span2" style = "margin-top:88px; padding:0px">
			<span style = "color:#ffffff;font-size:13px;">PTS Version 0.1.2</span>
		</div>
		
	</div>
	<div class = "row-fluid" style = "border-top:1px solid #999999;">
		<div style = "background:#efefef url(<?php echo base_url();?>img/white-stage_gradientBG.png) no-repeat scroll 0 0;width:94%;height:auto;margin-left:3%;margin-top:1%;margin-bottom:1%;padding-top:3%;padding-bottom:3%">
			<div style = "width:94%;height:526px;margin-left:auto;margin-right:auto;">
				<div style = "width:300px;height:150px;margin-left:auto;margin-right:auto;padding-top:17%">
					
						<center>
							<span style = "color:#2a5604;font-weight:bold;font-size:18px;margin-top:20%">Admin Authentication</span>
							<?php echo form_open('user_validate/admin_validate_credentials'); ?>
							<input type = "text" name = "username" id = "username" value = "" class = "input-xlarge" style = "margin-top:3%;margin-bottom:3%;border:1px solid #777777;	-webkit-box-shadow: inset 0px 0px 5px 0px #777777;-moz-box-shadow: inset 0px 0px 5px 0px #777777;box-shadow: inset 0px 0px 5px 0px #777777;" placeholder = "username"/>
							<input type = "text" name = "password" id = "password" value = "" class = "input-xlarge" style = "margin-top:3%;margin-bottom:3%;border:1px solid #777777;	-webkit-box-shadow: inset 0px 0px 5px 0px #777777;-moz-box-shadow: inset 0px 0px 5px 0px #777777;box-shadow: inset 0px 0px 5px 0px #777777;" placeholder = "password"/>
							<button class = "btn-primary" style = "float:right;text-shadow: 0px -1px 0px #60656b;
							filter: dropshadow(color=#60656b, offx=0, offy=-1);
							-webkit-border-radius:4px;
							-moz-border-radius:4px;
							border-radius:4px;
							border:1px solid #2b5704;
							background-image: -webkit-gradient(linear,left bottom,left top,color-stop(0, rgb(43,87,4)),color-stop(1, rgb(83,122,15)));
							background-image: -moz-linear-gradient(center bottom,rgb(103,114,132) 0%,rgb(116,129,146) 50%,
							rgb(122,138,154) 100%);
							padding:3px 10px;
							cursor:pointer;
							-webkit-box-shadow: 1px 1px 3px 0px rgba(0, 0, 0, .5);
							-moz-box-shadow: 1px 1px 3px 0px rgba(0, 0, 0, .5);
							box-shadow: 1px 1px 3px 0px rgba(0, 0, 0, .5);font-size:14px">Login</button>
							<?php echo form_close(); ?>
						</center>
					
				</div>
			</div>
		</div>
	</div>
	<div class = "row-fluid">
		<center>
			<span style = "color:white;font-size:10px">Copyright © 2012. Real Property Tax System Version 0.1.2 | DataTrend Global Resources Inc.
				<img src = "<?php echo base_url();?>img/dgri_foot_logo_small.png" />
			</span>
		</center>
	</div>
</div>