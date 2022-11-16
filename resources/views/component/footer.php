	<!-- Start Footer -->
    <footer class="footer-box" style="background-color:#191919;">
        <div style="width:90%; padding-left:5%;">
            <div class="row">
				<div class="col-md-12">
				   <a href=""><img src="<?= url('image/logo-white.pn'); ?>g" alt="image" style="height:70px;"></a>
				</div>
                <div class="col-md-5 margin-bottom_30">
				   <div style="margin-top:20px;">
				   	   <?php
					   $query = \App\Helpers\AppHelper::footer_company();
					   foreach ($query as $row) {
					   ?>
				       <table>
				           <tr>
				               <td valign="top" style="padding-top:5px;">
				                   <font class="fa fa-map-marker" style="color:#FFFFFF; font-size:25px;"></font>
				               </td>
				               <td style="padding-left:15px;">
				                   <div style="color:#fff; font-size:15px; margin-bottom:3px;"><?php echo $row->content_title; ?></div>
				                   <div style="color:#fff;"><?php echo $row->content_body; ?></div>
				               </td>
				           </tr>
						   <!--
				           <tr>
				               <td valign="top">
				                   <font class="fa fa-phone" style="color:#FFFFFF;"></font>
				               </td>
				               <td style="padding-left:5px;">
				                   <div style="color:#fff; font-size:15px; margin-bottom:3px;">(+62) 021 2505080</div>
				               </td>
				           </tr>
				           <tr>
				               <td valign="top">
				                   <font class="fa fa-map-marker" style="color:#FFFFFF;"></font>
				               </td>
				               <td style="padding-left:5px;">
				                   <div style="color:#fff; font-size:15px; margin-bottom:3px;">cs@ifg.id</div>
				               </td>
				           </tr>
						   -->
				       </table>
					   <?php } ?>
				   </div>
				</div>
				<!--
				<div class="col-md-3 text-left" style="margin-bottom:35px;">
			     <div class="footer_blog footer_menu">
				    <div style="font-weight:bold; color:#FFF; font-size:21px; margin-bottom:7px;">Profil EPPID IFG</div>
				    <div>
						<ul> 
							<li><a href=""><font style="font-size:16px; color:#FFF;">Tentang EPPID IFG</font></a></li>
							<li><a href=""><font style="font-size:16px; color:#FFF;">Jalur dan Waktu Pelayanan</font></a></li>
						</ul>
					</div>
					<div style="height:20px;"></div>
				    <div style="font-weight:bold; color:#FFF; font-size:21px; margin-bottom:7px;">Informasi</div>
					<div>
						<ul> 
							<li><a href=""><font style="font-size:16px; color:#FFF;">Informasi Berkala</font></a></li>
							<li><a href=""><font style="font-size:16px; color:#FFF;">Informasi Tersedia Setiap Saat</font></a></li>
							<li><a href=""><font style="font-size:16px; color:#FFF;">Informasi Serta Merta</font></a></li>
						</ul>
					</div>	
				 </div>
				</div>
                
                <div class="col-md-3 text-left">
				    <div style="color:#000000; font-size:17px; margin-bottom:-15px;">
				    	<div style="font-weight:bold; color:#FFF; font-size:21px; margin-bottom:7px;">Alur Pengajuan KIP</div>
						<div style="color:#FFF; line-height:1.3;">Alur Pengajuan Informasi Publik Indonesia Financial Group</div>
						<div style="color:#FFF; line-height:1.3; margin-top:15px;">Alur Pengajuan Keberatan Publik Indonesia Financial Group</div>
				    </div>
                </div>
				-->
                <div class="col-md-4 text-left">
				    <div style="font-weight:bold; color:#000000; font-size:17px; margin-bottom:15px;">
				    	<div style="font-weight:bold; color:#FFF; font-size:21px; margin-bottom:7px;">Hubungi Kami</div>
				    </div>
					<table>
					   <tr>
						   <td valign="top">
						   	   <div style="border:1px solid #fff; background-color:#fff; padding:5px 8px 1px 8px;">
							   		<font class="fa fa-phone" style="color:#000; font-size:20px;"></font>
							   </div>		
						   </td>
						   <td style="padding-left:5px;">
						   		<?php
								$query = \App\Helpers\AppHelper::footer_hubungi('Telepon');
								foreach ($query as $row) {
								?>
						  	 	<div style="color:#fff; font-size:17px; margin-bottom:3px;"><?php echo $row->item_link; ?></div>
								<?php } ?>
						   </td>
					   </tr>
					   <tr>
					   		<td colspan="2" height="10"></td>
					   </tr>
					   <tr>
						   <td valign="top">
						   	   <div style="border:1px solid #fff; background-color:#fff; padding:5px 8px 1px 8px;">
							   		<font class="fa fa-envelope" style="color:#000; font-size:20px;"></font>
							   </div>		
						   </td>
						   <td style="padding-left:5px;">
						   	   <?php
								$query = \App\Helpers\AppHelper::footer_hubungi('Email');
								foreach ($query as $row) {
							   ?>		
							   <div style="color:#fff; font-size:17px; margin-bottom:3px;"><?php echo $row->item_link; ?></div>
							   <?php } ?>
						   </td>
					   </tr>
					</table>
				</div>
				
                <div class="col-md-3 text-left">
				    <div style="font-weight:bold; color:#000000; font-size:17px; margin-bottom:-15px;">
				    	<div style="font-weight:bold; color:#FFF; font-size:21px; margin-bottom:7px;">Ikuti Kami</div>
				    </div>
					<div>
						<table>
						  <tr>
						    <?php
							$query = \App\Helpers\AppHelper::footer_medsos('Instagram');
							foreach ($query as $row) {
							?>
							<td>
								<a href="<?php echo $row->item_link; ?>" style="margin:5px 5px 5px 5px;" target="_blank">
									<div style="border:1px solid #fff; background-color:#fff; padding:7px 7px 5px 7px;">
										<font class="fa fa-instagram" style="color:#000; font-size:27px;"></font>
									</div>
								</a>
							</td>
							<?php } ?>
						    <?php
							$query = \App\Helpers\AppHelper::footer_medsos('Facebook');
							foreach ($query as $row) {
							?>
							<td style="padding-left:10px;">
								<a href="<?php echo $row->item_link; ?>" style="margin:5px 5px 5px 5px;" target="_blank">
									<div style="border:1px solid #fff; background-color:#fff; padding:7px 10px 5px 10px;">
										<font class="fa fa-facebook" style="color:#000; font-size:27px;"></font>
									</div>
								</a>
							</td>
							<?php } ?>
						    <?php
							$query = \App\Helpers\AppHelper::footer_medsos('Twitter');
							foreach ($query as $row) {
							?>
							<td style="padding-left:10px;">
								<a href="<?php echo $row->item_link; ?>" style="margin:5px 5px 5px 5px;" target="_blank">
									<div style="border:1px solid #fff; background-color:#fff; padding:7px 7px 5px 7px;">
										<font class="fa fa-twitter" style="color:#000; font-size:27px;"></font>
									</div>
								</a>
							</td>
							<?php } ?>
						    <?php
							$query = \App\Helpers\AppHelper::footer_medsos('Linkedln');
							foreach ($query as $row) {
							?>
							<td style="padding-left:10px;">
								<a href="<?php echo $row->item_link; ?>" style="margin:5px 5px 5px 5px;" target="_blank">
									<div style="border:1px solid #fff; background-color:#fff; padding:9px 9px 9px 9px;">
										<img src="<?= url('image/linkedin.png"'); ?> width="20px;">
									</div>
								</a>
							</td>
							<?php } ?>
						  </tr>
						</table>
					</div>
					<div style="position:absolute; margin-top:-210px; margin-left:-150px;">
						<img src="<?= url('image/ifg_white.png'); ?>" style="width:500px;">
					</div>
                </div>
                <div class="col-12">
					<p class="crp" style="color:#FFFFFF;">© 2022 IFG . All Rights Reserved.</p>
				</div>
            </div>
            
        </div>
    </footer>
<!-- ALL JS FILES -->
    <script src="<?= asset('assets/js/jquery.min.js') ?>"></script>
	<script src="<?= asset('assets/js/popper.min.js') ?>"></script>
    <script src="<?= asset('assets/js/bootstrap.min.js') ?>"></script>
    <!-- ALL PLUGINS -->
	<script>
	$(document).ready(function(){	
		$("#chat-open").click(function(){
			$("#chat-box").show(100);
			$("#chat-open").hide();
			$("#chat-close").show();
		});	

		$("#chat-close").click(function(){
			$("#chat-box").hide(100);
			$("#chat-open").show();
			$("#chat-close").hide();
		});	
	});
	
	$(document).ready(function() {

		$("#search_action1").keyup(function() {
			var html = "";
			$("#search_hasil1").empty();
			var pencarian = $("#search_action1").val();
			if(pencarian && pencarian.length > 0){				
				$.ajax({
					url: "<?= url('searching') ?>",
					method: "POST",
					data: {
						'_token': '<?= csrf_token() ?>',
						'pencarian': pencarian
					},
					success: function(data) {
						$("#search_hasil1").empty();
						var html_null = '<div id="search_hasil1"></div>';
						$("#search_hasil1").append(html_null);
						var html = '<div id="overflow">';
						var no = 1;
						var url = "<?php echo url('/'); ?>";
						$.each(data, function(i, item) {
							var konten = data[i].content_body;
							var konten = konten.substring(0, 80);
							var title = data[i].content_title;
							html +=
								'<div class="search-border"><a href="'+url+'/'+data[i].menu_link+'/'+data[i].menu_link_slug+'"><div style="font-weight:bold; font-size:14px;">'+title+'</div><div style="border:0.5px solid #ccc; width:100%; margin-top:10px; margin-bottom:10px;"></div></a></div>';
							no++;
						});
						html += '</div>';

						$("#search_hasil1").append(html);
					}
				})
			} else {
				$("#search_hasil1").empty();
				var html_null = '<div id="search_hasil1"></div>';
				$("#search_hasil1").append(html_null);
			}
		})

	});	

    $(document).ready(function() {

		$("#search_action1").keyup(function() {
			var html = "";
			$("#search_hasil1").empty();
			var pencarian = $("#search_action1").val();
			if(pencarian && pencarian.length > 0){				
				$.ajax({
					url: "<?= url('searching') ?>",
					method: "POST",
					data: {
						'_token': '<?= csrf_token() ?>',
						'pencarian': pencarian
					},
					success: function(data) {
						$("#search_hasil1").empty();
						var html_null = '<div id="search_hasil1"></div>';
						$("#search_hasil1").append(html_null);
						var html = '<div id="overflow">';
						var no = 1;
						var url = "<?php echo url('/'); ?>";
						$.each(data, function(i, item) {
							var konten = data[i].content_body;
							var konten = konten.substring(0, 80);
							var title = data[i].content_title;
							html +=
								'<div class="search-border"><a href="'+url+'/'+data[i].menu_link+'/'+data[i].menu_link_slug+'"><div style="font-weight:bold; font-size:14px;">'+title+'</div><div style="border:0.5px solid #ccc; width:100%; margin-top:10px; margin-bottom:10px;"></div></a></div>';
							no++;
						});
						html += '</div>';

						$("#search_hasil1").append(html);
					}
				})
			} else {
				$("#search_hasil1").empty();
				var html_null = '<div id="search_hasil1"></div>';
				$("#search_hasil1").append(html_null);
			}
		})

		$("#search_action2").keyup(function() {
			var html = "";
			$("#search_hasil2").empty();
			var pencarian = $("#search_action2").val();
			if(pencarian && pencarian.length > 0){				
				$.ajax({
					url: "<?= url('searching') ?>",
					method: "POST",
					data: {
						'_token': '<?= csrf_token() ?>',
						'pencarian': pencarian
					},
					success: function(data) {
						$("#search_hasil2").empty();
						var html_null = '<div id="search_hasil2"></div>';
						$("#search_hasil2").append(html_null);
						var html = '<div id="overflow">';
						var no = 1;
						var url = "<?php echo url('/'); ?>";
						$.each(data, function(i, item) {
							var konten = data[i].content_body;
							var konten = konten.substring(0, 80);
							var title = data[i].content_title;
							html +=
								'<div class="search-border"><a href="'+url+'/'+data[i].menu_link+'/'+data[i].menu_link_slug+'"><div style="font-weight:bold; font-size:14px;">'+title+'</div><div style="border:0.5px solid #ccc; width:100%; margin-top:10px; margin-bottom:10px;"></div></a></div>';
							no++;
						});
						html += '</div>';

						$("#search_hasil2").append(html);
					}
				})
			} else {
				$("#search_hasil2").empty();
				var html_null = '<div id="search_hasil2"></div>';
				$("#search_hasil2").append(html_null);
			}
		})

	});	
	</script>

	<div class="modal" id="mypopup" style="margin-top:9%;">
		<div class="modal-dialog modal-lg">
			
			<div style="float:right; position:absolute; z-index:100; right:0px; margin-top:-15px; margin-right:-15px; cursor:pointer;">
				<button type="button" class="btn" data-dismiss="modal" style="background-color:#fff; color:#ff0000; z-index:100; padding:4px 7px 4px 7px; cursor:pointer;"><font class="fa fa-close" style="font-weight:normal; font-size:25px;"></font></button>
			</div>
			
			<div class="modal-content" style="padding:10px;">

			<!-- Modal Header -->
			<div style="background-image: linear-gradient(to right, #BD1D23, #E61E26, #F3131B, #ED1C24); padding-top:15px; padding-bottom:15px;">
				<center><div class="modal-title" style="color: #fff; font-weight:bold; font-size:24px;">Pemberitahuan</div></center>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<div id="title-popup">
					<center>
					Kewaspadaan Terhadap Upaya Penipuan Atas Nama PPID Indonesia Financial Group (IFG) & Subsdiaries 
					</center>
				</div>
				<div id="info-popup">
					Dalam penerapan kebijakan dan penyebaran informasi keterbukaan milik Indonesia Financial Group dapat di akses di https://ifg.id/id/public-information/about. Selain dari sumber website diatas, pihak IFG tidak bertanggung jawab dalam segala bentuk infomasi yang disampaikan.
				</div>
			</div>
			<div style="margin-top:-13%;">
				<img src="<?= url('image/serong_popup.png') ?>" style="width:200px;">
			</div>

			</div>
		</div>
	</div>

    <script src="<?= asset('assets/js/jquery.magnific-popup.min.js') ?>"></script>
    <script src="<?= asset('assets/js/jquery.pogo-slider.min.js') ?>"></script>
    <script src="<?= asset('assets/js/slider-index.js') ?>"></script>
    <script src="<?= asset('assets/js/smoothscroll.js') ?>"></script>
    <script src="<?= asset('assets/js/form-validator.min.js') ?>"></script>
    <script src="<?= asset('assets/js/contact-form-script.js') ?>"></script>
    <script src="<?= asset('assets/js/isotope.min.js') ?>"></script>
    <script src="<?= asset('assets/js/images-loded.min.js') ?>"></script>
    <script src="<?= asset('assets/js/custom.js') ?>"></script>
	
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" /> -->
    
    <script>
	$('#myCarousel').carousel({
		interval: 10000
	})

	$('.carousel .carousel-item').each(function() {
		var minPerSlide = 4;
		var next = $(this).next();
		if (!next.length) {
			next = $(this).siblings(':first');
		}
		next.children(':first-child').clone().appendTo($(this));

		for (var i = 0; i < minPerSlide; i++) {
			next = next.next();
			if (!next.length) {
				next = $(this).siblings(':first');
			}

			next.children(':first-child').clone().appendTo($(this));
		}
	});
	
    $(document).ready(function(){
		slider_card();
        $('#mypopup').modal('show');
    });

	$("#search_click").click(function(){
		$("#logo-web").hide();
		$("#search_input").show(500);
		$("#search_action").hide();
		$("#search_close").show();
		$("#search_click").hide();
		$("#width-search").css("width", "100%");
		$("#width-search").css("margin-top", "-10px");
	});	

	$("#search_close").click(function(){
		$("#search_input").hide(500);
		$("#logo-web").show();
		$("#search_action").show();
		$("#search_close").hide();
		$("#search_click").show();
		$("#width-search").css("width", "auto");
		$("#width-search").css("margin-top", "");
	});	

	$("#search_click2").click(function(){
		$("#search_input2").show(500);
		$(".search_div3").hide(500);
		$(this).parent().find('#search_input2').css('width', '100%');
		$("#search_action2").hide(500);
		$("#search_click2").hide();
	});	

	$("#search_close2").click(function(){
		$("#search_input2").hide(500);
		$(".search_div3").show(500);
		$("#search_action2").show(500);
		$("#search_click2").show();
	});	
	
	// (function ($) {
	// 	$.fn.countTo = function (options) {
	// 		options = options || {};
			
	// 		return $(this).each(function () {
	// 			// set options for current element
	// 			var settings = $.extend({}, $.fn.countTo.defaults, {
	// 				from:            $(this).data('from'),
	// 				to:              $(this).data('to'),
	// 				speed:           $(this).data('speed'),
	// 				refreshInterval: $(this).data('refresh-interval'),
	// 				decimals:        $(this).data('decimals')
	// 			}, options);
				
	// 			// how many times to update the value, and how much to increment the value on each update
	// 			var loops = Math.ceil(settings.speed / settings.refreshInterval),
	// 				increment = (settings.to - settings.from) / loops;
				
	// 			// references & variables that will change with each update
	// 			var self = this,
	// 				$self = $(this),
	// 				loopCount = 0,
	// 				value = settings.from,
	// 				data = $self.data('countTo') || {};
				
	// 			$self.data('countTo', data);
				
	// 			// if an existing interval can be found, clear it first
	// 			if (data.interval) {
	// 				clearInterval(data.interval);
	// 			}
	// 			data.interval = setInterval(updateTimer, settings.refreshInterval);
				
	// 			// initialize the element with the starting value
	// 			render(value);
				
	// 			function updateTimer() {
	// 				value += increment;
	// 				loopCount++;
					
	// 				render(value);
					
	// 				if (typeof(settings.onUpdate) == 'function') {
	// 					settings.onUpdate.call(self, value);
	// 				}
					
	// 				if (loopCount >= loops) {
	// 					// remove the interval
	// 					$self.removeData('countTo');
	// 					clearInterval(data.interval);
	// 					value = settings.to;
						
	// 					if (typeof(settings.onComplete) == 'function') {
	// 						settings.onComplete.call(self, value);
	// 					}
	// 				}
	// 			}
				
	// 			function render(value) {
	// 				var formattedValue = settings.formatter.call(self, value, settings);
	// 				$self.html(formattedValue);
	// 			}
	// 		});
	// 	};
		
	// 	$.fn.countTo.defaults = {
	// 		from: 0,               // the number the element should start at
	// 		to: 0,                 // the number the element should end at
	// 		speed: 1000,           // how long it should take to count between the target numbers
	// 		refreshInterval: 100,  // how often the element should be updated
	// 		decimals: 0,           // the number of decimal places to show
	// 		formatter: formatter,  // handler for formatting the value before rendering
	// 		onUpdate: null,        // callback method for every time the element is updated
	// 		onComplete: null       // callback method for when the element finishes updating
	// 	};
		
	// 	function formatter(value, settings) {
	// 		return value.toFixed(settings.decimals);
	// 	}
	// }(jQuery));
	
	// jQuery(function ($) {
	//   // custom formatting example
	//   $('.count-number').data('countToOptions', {
	// 	formatter: function (value, options) {
	// 	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	// 	}
	//   });
	  
	//   // start all the timers
	//   $('.timer').each(count);  
	  
	//   function count(options) {
	// 	var $this = $(this);
	// 	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	// 	$this.countTo(options);
	//   }
	// });
	
    // $(document).ready(function() {
	// 	$('.datepicker').datepicker({
	// 	  format: 'yyyy-mm-dd'
	// 	});
	// 	$('.timepicker').timepicker();
	// });	
	
	// (function ($) {
	// 	$.fn.countTo = function (options) {
	// 		options = options || {};
			
	// 		return $(this).each(function () {
	// 			// set options for current element
	// 			var settings = $.extend({}, $.fn.countTo.defaults, {
	// 				from:            $(this).data('from'),
	// 				to:              $(this).data('to'),
	// 				speed:           $(this).data('speed'),
	// 				refreshInterval: $(this).data('refresh-interval'),
	// 				decimals:        $(this).data('decimals')
	// 			}, options);
				
	// 			// how many times to update the value, and how much to increment the value on each update
	// 			var loops = Math.ceil(settings.speed / settings.refreshInterval),
	// 				increment = (settings.to - settings.from) / loops;
				
	// 			// references & variables that will change with each update
	// 			var self = this,
	// 				$self = $(this),
	// 				loopCount = 0,
	// 				value = settings.from,
	// 				data = $self.data('countTo') || {};
				
	// 			$self.data('countTo', data);
				
	// 			// if an existing interval can be found, clear it first
	// 			if (data.interval) {
	// 				clearInterval(data.interval);
	// 			}
	// 			data.interval = setInterval(updateTimer, settings.refreshInterval);
				
	// 			// initialize the element with the starting value
	// 			render(value);
				
	// 			function updateTimer() {
	// 				value += increment;
	// 				loopCount++;
					
	// 				render(value);
					
	// 				if (typeof(settings.onUpdate) == 'function') {
	// 					settings.onUpdate.call(self, value);
	// 				}
					
	// 				if (loopCount >= loops) {
	// 					// remove the interval
	// 					$self.removeData('countTo');
	// 					clearInterval(data.interval);
	// 					value = settings.to;
						
	// 					if (typeof(settings.onComplete) == 'function') {
	// 						settings.onComplete.call(self, value);
	// 					}
	// 				}
	// 			}
				
	// 			function render(value) {
	// 				var formattedValue = settings.formatter.call(self, value, settings);
	// 				$self.html(formattedValue);
	// 			}
	// 		});
	// 	};
		
	// 	$.fn.countTo.defaults = {
	// 		from: 0,               // the number the element should start at
	// 		to: 0,                 // the number the element should end at
	// 		speed: 1000,           // how long it should take to count between the target numbers
	// 		refreshInterval: 100,  // how often the element should be updated
	// 		decimals: 0,           // the number of decimal places to show
	// 		formatter: formatter,  // handler for formatting the value before rendering
	// 		onUpdate: null,        // callback method for every time the element is updated
	// 		onComplete: null       // callback method for when the element finishes updating
	// 	};
		
	// 	function formatter(value, settings) {
	// 		return value.toFixed(settings.decimals);
	// 	}
	// }(jQuery));
	
	// jQuery(function ($) {
	//   // custom formatting example
	//   $('.count-number').data('countToOptions', {
	// 	formatter: function (value, options) {
	// 	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	// 	}
	//   });
	  
	//   // start all the timers
	//   $('.timer').each(count);  
	  
	//   function count(options) {
	// 	var $this = $(this);
	// 	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	// 	$this.countTo(options);
	//   }
	// });
</script>