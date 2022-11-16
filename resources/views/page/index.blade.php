    @extends('app')

    @section('header')
        @include('component.header')
    @endsection	

    @section('menu')
        @include('component.menu')
    @endsection	

    @section('footer')
        @include('component.footer')
    @endsection	

    @section('style')
    <style>
        .carousel-control-next-icon2 {
            border-radius:25%;
            background-color: rgba(255, 255, 255, 0.5); 
            width:20px;
            height:20px;
            margin-right:50px;
        }

        .carousel-control-prev-icon2 {
            border-radius:25%;
            background-color: rgba(255, 255, 255, 0.5); 
            width:20px;
            height:20px;
            margin-left:50px;
        }
        <?php
        $i = 1;
        foreach($card as $row){    
        ?>
        .part-pointer<?php echo $i; ?>{
        background-image: linear-gradient(to right, #BD1D23, #E61E26, #F3131B, #ED1C24); 
        color:#FFFFFF; 
        padding:18px; 
        position:absolute; 
        width:92%; 
        height:100%; 
        z-index:15;
        display:none;
        }
        <?php $i++; } ?>
        <?php
        foreach($card as $row){    
        ?>
        .part-pointer<?php echo $i; ?>{
        background-image: linear-gradient(to right, #BD1D23, #E61E26, #F3131B, #ED1C24); 
        color:#FFFFFF; 
        padding:18px; 
        position:absolute; 
        width:92%; 
        height:100%; 
        z-index:15;
        display:none;
        }
        <?php $i++; } ?>

        @media (min-width: 768px) {

        .carousel-inner .carousel-item-right.active,
        .carousel-inner .carousel-item-next {
            transform: translateX(50%);
        }

        .carousel-inner .carousel-item-left.active,
        .carousel-inner .carousel-item-prev {
            transform: translateX(-50%);
        }
        }

        /* large - display 3 */
        @media (min-width: 992px) {

        .carousel-inner .carousel-item-right.active,
        .carousel-inner .carousel-item-next {
            transform: translateX(50%);
        }

        .carousel-inner .carousel-item-left.active,
        .carousel-inner .carousel-item-prev {
            transform: translateX(-50%);
        }
        }

        @media (max-width: 768px) {
        .carousel-inner .carousel-item>div {
            display: none;
        }

        .carousel-inner .carousel-item>div:first-child {
            display: block;
        }
        }

        .carousel-inner .carousel-item.active,
        .carousel-inner .carousel-item-next,
        .carousel-inner .carousel-item-prev {
        display: flex;
        }

        .carousel-inner .carousel-item-right,
        .carousel-inner .carousel-item-left {
        transform: translateX(0);
        }



        img {
        vertical-align: middle;
        }

        /* Position the image container (needed to position the left and right arrows) */
        .container {
        position: relative;
        }

        /* Hide the images by default */
        .mySlides {
        display: none;
        }

        /* Add a pointer when hovering over the thumbnail images */
        .cursor {
        cursor: pointer;
        }

        /* Next & previous buttons */
        .prev,
        .next {
        cursor: pointer;
        position: absolute;
        top: 40%;
        width: auto;
        padding: 16px;
        margin-top: -50px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
        right: 0;
        border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
        }

        /* Number text (1/3 etc) */
        .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
        }

        /* Container for image text */
        .caption-container {
        text-align: center;
        background-color: #222;
        padding: 2px 16px;
        color: white;
        }

        .row:after {
        content: "";
        display: table;
        clear: both;
        }

        /* Six columns side by side */
        .column {
        float: left;
        width: 16.66%;
        }

        /* Add a transparency effect for thumnbail images */
        .demo {
        opacity: 0.6;
        }

        .active,
        .demo:hover {
        opacity: 1;
        }
    </style>
    @endsection	
    @section('content')
    <?php
    $url_cms = 'http://10.1.19.105';
    ?>
	<div class="section layout_padding">
        <div style="width:99%;">
            <div class="row" style="padding:0px;">
                <div class="col-lg-12" style="padding:0px;">
                    
                    <?php
                    $i = 0;
                    foreach($slider as $row){    
                    ?> 
                    <div class="mySlides" style="width:100%">
                        <img src="{{ $url_cms.'/storage/files/slider/'.$row->item_file }}" style="width:100%">
                    </div>
                    <?php $i++; } ?>

                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>

                    <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span> 
                        <span class="dot" onclick="currentSlide(2)"></span> 
                        <span class="dot" onclick="currentSlide(3)"></span> 
                    </div>  

                </div>
            </div>
        </div>    
    </div>
	<script>
	let slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
	showSlides(slideIndex += n);
	}

	function currentSlide(n) {
	showSlides(slideIndex = n);
	}

	function showSlides(n) {
		let i;
		let slides = document.getElementsByClassName("mySlides");
		let dots = document.getElementsByClassName("demo");
		if (n > slides.length) {slideIndex = 1}
		if (n < 1) {slideIndex = slides.length}
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		}
		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		}
		slides[slideIndex-1].style.display = "block";
		dots[slideIndex-1].className += " active";
		captionText.innerHTML = dots[slideIndex-1].alt;
	}
	</script>
    <?php
    foreach($welcome as $row){    
    ?>
    <div class="section">
        <div style="width:99%; margin-top:-95px;">
            <div class="row" style="padding:0px;">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12" style="background-image: linear-gradient(to top right, #BD1D23, #E61E26, #F3131B, #ED1C24);">
                    <div class="full">   
                        <div>
                            <img class="img-responsive" src="{{ url('image/serong-big.png') }}" style="width:100%;" />
                        </div>
                        <div class="centered" style="float:left; width:80%;">
                            <div style="font-weight:bold; color:#fff;" id="title-menu"><?php echo $row->content_title; ?></div>
                            <div style="line-height:1.2; color:#fff;" id="detail-menu">
                                <?php echo $row->content_body; ?>
                            </div>
                        </div>    
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12" style="padding:0px;">
                    <div> 
                        <img src="<?php echo $url_cms.'/storage/files/'.$row->picture; ?>" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>                
    </div>          
	<?php } ?>
    
    <div class="section">
        <div class="" style="width:88%; margin-left:6%; padding-top:55px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <center>
                            <h2 style="color:#ff0000; font-size:23px; font-weight:bold;">
                                <?php
                                foreach($card_title as $row){
                                    echo $row->content_title;
                                }
                                ?>
                            </h2>
                        </center>
                    </div>
                </div>
            </div>
        
            <div class="row" style="margin-top:35px;">
                
                <div class="top-content">
                    <div class="container-fluid">
                        
                        <div id="myCarousel" class="carousel slide w-100" data-ride="carousel">
                            <div class="carousel-inner w-100" role="listbox">
                                <?php 
                                $i = 1;
                                foreach($card as $row){
                                ?>

                                <div class="carousel-item <?php if($i == 1){ ?>active<?php } ?>" style="margin-bottom:20px;">
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 part-pointer-hover<?php echo $i; ?>">
                                        <div class="part-pointer<?php echo $i; ?>">
                                            <div style="float:right;">
                                                <img src="<?= url('image/serong.png'); ?>" class="img-fluid mx-auto d-block" style="height:20px;">
                                            </div>
                                            <center>
                                                <div style="margin-top:35px;">
                                                    <!-- <div class="line-width"></div> -->
                                                    <h2 style="color:#FFFFFF; font-weight:bold;"><?php echo $row->item_title; ?></h2>
                                                    <div style="padding:15px; font-size:17px; line-height:1.4;">
                                                        <?php echo $row->item_body; ?>
                                                    </div>
                                                </div>
                                            </center>	
                                        </div>
                                        <div style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 10px 0 rgba(0, 0, 0, 0.10); border-radius:10px;">
                                            <div>
                                                <div>
                                                    <img class="img-fluid" src="<?php echo $url_cms.'/storage/files/'.$row->item_file; ?>" style="width:100%;" alt="#">
                                                </div>
                                                <div valign="top" style="padding-top:25px; padding-bottom:20px; background-image: linear-gradient(to right, #525252, #606060, #767676, #909090); ">
                                                    <center>
                                                    <h3 style="font-weight:bold; color:#FFFFFF;">
                                                    <?php echo $row->item_title; ?>
                                                    </h3>
                                                    </center> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php $i++; } ?>
                            </div>

                            <a class="carousel-control-prev" id="left_slider_card" href="#myCarousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" id="right_slider_card" href="#myCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>        

                        
                    </div>
                </div>
            
            </div>
        </div>
    </div>      

	<div class="section layout_padding">
        <div class="" style="width:100%; padding-top:10px; margin-bottom:0px;">              
            <?php
            $i = 1;
            foreach($company as $row){    
            ?>        
            <div class="row" style="background-image: url('<?php echo $url_cms.'/storage/files/'.$row->picture; ?>'); width:100%; height:600px; background-repeat: no-repeat; background-size: cover; padding:0px;">
                <div class="col-md-6 text-center" style="padding:0px; background-image:linear-gradient(to bottom, #64656A, #969696); padding:5%;">
                    <div class="full">
                    <table>
                        <tr>
                            <td>
                                <img src="{{ url('image/line.png'); }}" style="height: 300px;">
                                <!-- <div style="border-left: 6px solid #ff0000; height: 300px;"></div> -->
                            </td>
                            <td align="left" style="padding-left:30px;">
                                <div style="color:#fff; font-size:24px; font-weight:bold;"><?php echo $row->content_title; ?></div>
                                <div style="color:#fff; font-size:16px; font-weight:600; margin-top:15px; text-align:justify;"><?php echo $row->content_body; ?></div>
                            </td>
                        </tr>
                    </table>
                    </div>
                </div>
                <div class="col-lg-12" style="background: rgba(255,255,255,0.5);">
                    <div class="full">  
                        <div class="row">    
                            <?php
                            foreach($content as $row2){    
                            ?> 
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center" style="padding:20px 20px 0px 20px;">
                                <a href="<?= url($row2->menu_link.'/'.$row2->menu_link_slug) ?>">
                                    <div style="padding:20px; font-size:22px; font-weight:bold; color:#333333; background-color:#fff;"><?php echo $row2->menu_name; ?> <font><img src="<?= url('image/serong-red.png'); ?>" style="height:30px;"></font></div>
                                </a>
                            </div>
                            <?php } ?>
                        </div>   
                    </div>     
                </div>
            </div>
            <?php } ?>

                    

            <!--
            <div class="row" style="background-color:#454545;">
                <div class="col-md-5" style="padding:0px;">
                    <div class="full">
                        <center>
                            <img src="{{ url('image/eppid.PNG') }}" class="img-fluid">
					    </center>
                    </div>
                </div>
                <div class="col-md-7" style="background-color:#454545; text-align:left; padding:0%;">
                    <div style="padding:15% 5% 15% 5%;">
						<h2 style="color:#fff; font-weight:bold; font-size:27px;">
							Profil EPPIDIFG
						</h2>
						<div style="text-decoration:justify; color:#fff; font-size:20px; text-decoration:justify;">

							EPPID IFG merupakan salah satu sarana utama untuk memastikan publik dapat menerima informasi dan melakukan pengawasan publik terhadap BUMN dalam rangka penyelenggaraan layanan informasi publik yang baik dan dapat dipertanggung jawabkan. Selengkapnya 
						</div>
                    </div>
					<div id="bar-div">
						Kontak Layanan EPPID IFG <font class="fa fa-angle-right" style="float:right; font-size:35px; font-weight:bold; margin-top:5px;"></font>
					</div>
					<div id="bar-div2">
						Jalur dan Waktu Pelayanan <font class="fa fa-angle-right" style="float:right; font-size:35px; font-weight:bold; margin-top:5px;"></font>
					</div>
                </div>
            </div>
            -->
        </div>
    </div>
	  
                   
	<div class="section">
        <div class="" style="width:88%; margin-left:6%; margin-top:0px; margin-bottom:60px;">       
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center" style="margin-bottom: 20px;">
                    <?php 
                    foreach($child_company_title as $row){
                    ?>
                    <h2 style="color:#ff0000; font-size:23px; font-weight:bold;"><?php echo $row->content_title; ?></h2>  
                    <?php } ?> 
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                
                    <div class="top-content">
                        <div class="container-fluid">
                            <div class="row">
                                <?php 
                                if($child_company_count == 1){ 
                                    echo '<div class="carousel-item col-lg-5 col-md-3 col-sm-3 col-3 active" style="width:100%;"></div>'; 
                                } else if($child_company_count == 2){ 
                                    echo '<div class="carousel-item col-lg-4 col-md-3 active" style="width:100%;"></div>'; 
                                } else if($child_company_count == 3){ 
                                    echo '<div class="carousel-item col-lg-3 col-md-1 active" style="width:100%;"><img src="http://10.1.19.105/storage/files/636c6dc164592.jpg" class="img-fluid mx-auto d-block" alt="img1"></div>'; 
                                } ?>
                                <?php 
                                foreach($child_company as $row){
                                ?>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6" style="margin-bottom:15px;">
                                    <img src="<?php echo $url_cms.'/storage/files/'.$row->item_file; ?>" class="img-fluid">        
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                </div>
                
            </div>            
        </div>
    </div>

    <!-- <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </div>

        </div>
    </div> -->
	@endsection	
	@section('script_additional')
	<script>
	function slider_card() {
        //alert(a);
        $.ajax({
            url: "{{ url('slider_card') }}",
            method: "POST",
            data: {
                '_token': '{{ csrf_token() }}'
            },
            success: function(data) {
                $("#slider_card").html(data);
            }
        })
    }

    $(document).ready(function(){
		<?php
		$i = 1;
		foreach($card as $row){    
		?>
		$(".part-pointer-hover<?php echo $i; ?>").hover(function(){
			$('.part-pointer<?php echo $i; ?>').toggle(100);
		});
		<?php $i++; } ?>
	}); 
    </script>
	@endsection