	<!-- Start Footer -->
    <?php
    $url_cms = 'http://10.1.19.105';
    ?>
    <footer class="footer-box footer-div">
        <div style="width:90%; padding-left:5%;">
            <div class="row">
				<div class="col-md-12">
				   <a href=""><img src="<?= url('image/logo-white.png'); ?>" alt="image" style="height:57px; width:113px;"></a>
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
				                   <div style="color:#fff; font-size:14px; margin-bottom:3px;"><?php echo $row->content_title; ?></div>
				                   <div style="color:#fff;"><?php echo $row->content_body; ?></div>
				               </td>
				           </tr>
				       </table>
					   <?php } ?>
				   </div>
				</div>
                <div class="col-md-4 text-left" style="margin-bottom:40px;">
				    <div style="font-weight:bold; color:#000000; font-size:17px; margin-bottom:15px;">
				    	<div style="font-weight:bold; color:#FFF; font-size:14px; margin-bottom:7px;">Hubungi Kami</div>
				    </div>
					<table>
					   <?php
						$query = \App\Helpers\AppHelper::footer_hubungi('HBK');
						foreach ($query as $row) {
					   ?>
					   <tr>
						   <td valign="top">
						   	   <div style="padding:5px 8px 1px 8px; cursor:pointer;">
									<img src="<?php echo $url_cms.'/storage/files/'.$row->item_file; ?>" style="width: 27px;">
							   </div>		
						   </td>
						   <td style="padding-left:5px;">
						  	 	<div style="color:#fff; font-size:11px; margin-bottom:3px; cursor:pointer;"><?php echo $row->item_link; ?></div>
						   </td>
					   </tr>
					   <tr>
					   		<td colspan="2" height="10"></td>
					   </tr>	
					   <?php } ?>
					</table>
				</div>
				
                <div class="col-md-3 text-left">
				    <div style="font-weight:bold; color:#000000; font-size:17px; margin-bottom:-15px;">
				    	<div style="font-weight:bold; color:#FFF; font-size:14px; margin-bottom:7px;">Ikuti Kami</div>
				    </div>
					<!-- <div id="logo-ifg-footer-position">
						<img src="<?= url('image/ifg_white.png'); ?>" class="logo-ifg-footer">
					</div> -->
					<div>
						<table>
						  <tr>
						    <?php
							$query = \App\Helpers\AppHelper::footer_medsos('IKM');
							foreach ($query as $row) {
							?>
							<td>
								<a href="<?php echo $row->item_link; ?>" style="margin:5px 5px 5px 5px; cursor:pointer;" target="_blank">
									<div>
										<img src="<?php echo $url_cms.'/storage/files/'.$row->item_file; ?>" style="width: 27px;">
									</div>
								</a>
							</td>
							<td width="10"></td>
							<?php } ?>	
						  </tr>
						</table>
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
	<script src="<?= asset('assets/js/slippry.js') ?>"></script>
	<?php
	$query = \App\Helpers\AppHelper::menu_parent();
	foreach ($query as $row) {
	?>
	<style>
	.font-menu<?php echo $row->id; ?>{
		border-bottom:6px solid #ff0000;
		margin-top: 15px;
		width:100%;
		display:none;
		margin-bottom: -15px;
	}

	/* .font-menu-title<?php echo $row->id; ?>:hover{
		margin-top: -10px;
	} */
	</style>
	<script>	
	$(".font-menu-title<?php echo $row->id; ?>").hover(function() {
		$(".font-menuan").fadeOut(5);
		$(".font-menu<?php echo $row->id; ?>").fadeOut(5);
		$(".font-menu<?php echo $row->id; ?>").fadeIn(5);
	});
	</script>
	<?php } ?>
	<script>
	// $("#home").mouseover(function() {
	// 	$(".font-menuan").hide(5);
	// });
	function menu_utama_bgt(a){
		$(".menu-utama"+a).toggle();
		<?php
		$query = \App\Helpers\AppHelper::menu_parent();
		foreach ($query as $row) {
		?>
		if(a != <?php echo $row->id; ?>){
			$(".menu-utama<?php echo $row->id; ?>").hide();
		}
		<?php } ?>
	}

	function submenu(a, b){
		$(function() {
			$(".menu-utama"+a).show();
			$(".dropdown-submenus"+b).toggle();
		});	
	}

	function menu(a){
		$(function() {
			$(".menu-utama"+a).toggle();
		});	
	}

	$(function() {
		var demo1 = $("#demo1").slippry({
			transition: 'fade',
			useCSS: true,
			speed: 800,
			pause: 8000,
			auto: true,
			preload: 'visible',
			autoHover: false
		});

		$('.stop').click(function () {
			demo1.stopAuto();
		});

		$('.start').click(function () {
			demo1.startAuto();
		});

		$('.prev').click(function () {
			demo1.goToPrevSlide();
			return false;
		});
		$('.next').click(function () {
			demo1.goToNextSlide();
			return false;
		});
		$('.reset').click(function () {
			demo1.destroySlider();
			return false;
		});
		$('.reload').click(function () {
			demo1.reloadSlider();
			return false;
		});
		$('.init').click(function () {
			demo1 = $("#demo1").slippry();
			return false;
		});
	});
	</script>
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
	
	// $(document).ready(function() {

	// 	$("#search_action1").keyup(function() {
	// 		var html = "";
	// 		$("#search_hasil1").empty();
	// 		var pencarian = $("#search_action1").val();
	// 		if(pencarian && pencarian.length > 0){				
	// 			$.ajax({
	// 				url: "<?= url('searching') ?>",
	// 				method: "POST",
	// 				data: {
	// 					'_token': '<?= csrf_token() ?>',
	// 					'pencarian': pencarian
	// 				},
	// 				success: function(data) {
	// 					$("#search_hasil1").empty();
	// 					var html_null = '<div id="search_hasil1"></div>';
	// 					$("#search_hasil1").append(html_null);
	// 					var html = '<div id="overflow">';
	// 					var no = 1;
	// 					var url = "<?php echo url('/'); ?>";
	// 					$.each(data, function(i, item) {
	// 						var konten = data[i].content_body;
	// 						var konten = konten.substring(0, 80);
	// 						var title = data[i].content_title;
	// 						html +=
	// 							'<div class="search-border"><a href="'+url+'/'+data[i].menu_link+'/'+data[i].menu_link_slug+'"><div style="font-weight:bold; font-size:14px;">'+title+'</div><div style="border:0.5px solid #ccc; width:100%; margin-top:10px; margin-bottom:10px;"></div></a></div>';
	// 						no++;
	// 					});
	// 					html += '</div>';

	// 					$("#search_hasil1").append(html);
	// 				}
	// 			})
	// 		} else {
	// 			$("#search_hasil1").empty();
	// 			var html_null = '<div id="search_hasil1"></div>';
	// 			$("#search_hasil1").append(html_null);
	// 		}
	// 	})

	// });	

	function search_input(a) {
		//alert(a);
		if(a != ''){
			$.ajax({
				url: "<?= url('searching') ?>",
				method: "POST",
				data: {
					'_token': '<?= csrf_token() ?>',
					'pencarian': a
				},
				success: function(data) {
					$("#search_hasil1").html(data);
				}
			});
		} else {
			document.getElementById('search_hasil1').innerHTML = '<div id="search_hasil1" style="position: absolute; width:47%;"></div>';
		}
	}

	function search_input2(a) {
		//alert(a);
		if(a != ''){
			$.ajax({
				url: "<?= url('searching2') ?>",
				method: "POST",
				data: {
					'_token': '<?= csrf_token() ?>',
					'pencarian': a
				},
				success: function(data) {
					$("#search_hasil2").html(data);
				}
			})
		} else {
			document.getElementById('search_hasil2').innerHTML = '<div id="search_hasil2" style="position: absolute; width:47%;"></div>';
		}
	}

    $(document).ready(function() {

		// $("#search_action1").keyup(function() {
		// 	var html = "";
		// 	$("#search_hasil1").empty();
		// 	var pencarian = $("#search_action1").val();
		// 	if(pencarian && pencarian.length > 0){				
		// 		$.ajax({
		// 			url: "<?= url('searching') ?>",
		// 			method: "POST",
		// 			data: {
		// 				'_token': '<?= csrf_token() ?>',
		// 				'pencarian': pencarian
		// 			},
		// 			success: function(data) {
		// 				$("#search_hasil1").empty();
		// 				var html_null = '<div id="search_hasil1"></div>';
		// 				$("#search_hasil1").append(html_null);
		// 				var html = '<div id="overflow">';
		// 				var no = 1;
		// 				var url = "<?php echo url('/'); ?>";
		// 				$.each(data, function(i, item) {
		// 					var konten = data[i].content_body;
		// 					var konten = konten.substring(0, 80);
		// 					var title = data[i].content_title;
		// 					html +=
		// 						'<div class="search-border"><a href="'+url+'/'+data[i].menu_link+'/'+data[i].menu_link_slug+'"><div style="font-weight:bold; font-size:14px;">'+title+'</div><div style="border:0.5px solid #ccc; width:100%; margin-top:10px; margin-bottom:10px;"></div></a></div>';
		// 					no++;
		// 				});
		// 				html += '</div>';

		// 				$("#search_hasil1").append(html);
		// 			}
		// 		})
		// 	} else {
		// 		$("#search_hasil1").empty();
		// 		var html_null = '<div id="search_hasil1"></div>';
		// 		$("#search_hasil1").append(html_null);
		// 	}
		// })

		// $("#search_action2").keyup(function() {
		// 	var html = "";
		// 	$("#search_hasil2").empty();
		// 	var pencarian = $("#search_action2").val();
		// 	if(pencarian && pencarian.length > 0){				
		// 		$.ajax({
		// 			url: "<?= url('searching') ?>",
		// 			method: "POST",
		// 			data: {
		// 				'_token': '<?= csrf_token() ?>',
		// 				'pencarian': pencarian
		// 			},
		// 			success: function(data) {
		// 				$("#search_hasil2").empty();
		// 				var html_null = '<div id="search_hasil2"></div>';
		// 				$("#search_hasil2").append(html_null);
		// 				var html = '<div id="overflow">';
		// 				var no = 1;
		// 				var url = "<?php echo url('/'); ?>";
		// 				$.each(data, function(i, item) {
		// 					var konten = data[i].content_body;
		// 					var konten = konten.substring(0, 80);
		// 					var title = data[i].content_title;
		// 					html +=
		// 						'<div class="search-border"><a href="'+url+'/'+data[i].menu_link+'/'+data[i].menu_link_slug+'"><div style="font-weight:bold; font-size:14px;">'+title+'</div><div style="border:0.5px solid #ccc; width:100%; margin-top:10px; margin-bottom:10px;"></div></a></div>';
		// 					no++;
		// 				});
		// 				html += '</div>';

		// 				$("#search_hasil2").append(html);
		// 			}
		// 		})
		// 	} else {
		// 		$("#search_hasil2").empty();
		// 		var html_null = '<div id="search_hasil2"></div>';
		// 		$("#search_hasil2").append(html_null);
		// 	}
		// })

	});	
	</script>

    <script src="<?= asset('assets/js/jquery.magnific-popup.min.js') ?>"></script>
    <script src="<?= asset('assets/js/jquery.pogo-slider.min.js') ?>"></script>
    <script src="<?= asset('assets/js/slider-index.js') ?>"></script>
    <script src="<?= asset('assets/js/smoothscroll.js') ?>"></script>
    <script src="<?= asset('assets/js/form-validator.min.js') ?>"></script>
    <script src="<?= asset('assets/js/contact-form-script.js') ?>"></script>
    <script src="<?= asset('assets/js/isotope.min.js') ?>"></script>
    <script src="<?= asset('assets/js/images-loded.min.js') ?>"></script>
	<!-- Swiper Scrollbar plugin -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" /> -->
    
    <script>
	function scroll_company_div() {
		var elem = document.getElementById("company_div");
		elem.scrollIntoView({ behavior: 'smooth' });
	}	

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
		$("#logo-web").show(500);
		$("#search_action").show();
		$("#search_close").hide();
		$("#search_click").show();
		$("#width-search").css("width", "auto");
		$("#width-search").css("margin-top", "");
		document.getElementById('search_hasil2').innerHTML = '<div id="search_hasil2" style="position: absolute; width:47%;"></div>';
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
		document.getElementById('search_hasil1').innerHTML = '<div id="search_hasil1" style="position: absolute; width:47%;"></div>';
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