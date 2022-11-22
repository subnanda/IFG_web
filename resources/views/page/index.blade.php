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

        @media (min-width: 800px) {
            .footer-div { 
                background-color:#191919; 
                font-size:11px; 
                background-image: url('<?= url('image/ifg_white.png'); ?>'); 
                background-repeat: no-repeat; 
                background-size: 600px; 
                background-position: right bottom;
            }
        }

        @media (max-width: 599px) {
            .footer-div { 
                background-color:#191919; 
                font-size:11px; 
                background-image: url('<?= url('image/ifg_white.png'); ?>'); 
                background-repeat: no-repeat; 
                background-size: 400px; 
                background-position: right bottom;
            }
        }
    </style>
    @endsection	
    @section('content')
    <?php
    $url_cms = 'http://10.1.19.105';
    ?>
	<div class="section layout_padding">
        <div id="slideran-div">
            <div class="row" style="padding:0px;">
                <div class="col-lg-12" style="padding:0px;">
                    
                    <ul id="demo1" style="z-index:-10;">
                        <?php
                        $i = 0;
                        foreach($slider as $row){    
                        ?>
                        <li><img src="<?php echo $url_cms.'/storage/files/slider/'.$row->item_file; ?>" class="img-fluid"></li>
                        <?php $i++; } ?>
                    </ul>        
                </div>
            </div>
        </div>    
    </div>
                    
    <?php
    foreach($welcome as $row){    
    ?>
    <div>
        <div style="max-width: 100%; overflow-x: hidden;" class="welcome-div">
            <div class="row">
                <div id="jabat_mobile" class="col-lg-6 col-md-6 col-sm-6 col-12" style="padding:0px;">
                    <div> 
                        <img src="<?php echo $url_cms.'/storage/files/'.$row->picture; ?>" class="img-responsive">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12" style="background-image: linear-gradient(to top right, #BD1D23, #E61E26, #F3131B, #ED1C24);">
                    <div class="full">   
                        <div>
                            <img class="img-responsive" src="{{ url('image/serong-big.png') }}" style="width:100%;" />
                        </div>
                        <div class="centered" style="float:left; width:80%;">
                            <div style="font-weight:bold; color:#fff;" id="title-menu"><?php echo $row->content_title; ?></div>
                            <div style="line-height:1.2; color:#fff;" id="detail-menu">
                                <?php echo $row->content_body; ?> <a class="btn-detail" onclick="scroll_company_div()">Selengkapnya <font style="margin-top: 10px;"><img src="{{ url('image/serong-small.png') }}" style="height:18px; margin-top: 5px;"></font></a>
                            </div>
                        </div>    
                    </div>
                </div>
                <div id="jabat_web" class="col-lg-6 col-md-6 col-sm-6 col-12" style="padding:0px;">
                    <div> 
                        <img src="<?php echo $url_cms.'/storage/files/'.$row->picture; ?>" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>                
    </div>          
	<?php } ?>
    
    <div class="section">
        
        <div style="width: 100%; position:absolute;">
            <table style="width: 100%; height:100%;">
                <tr>
                    <td style="width: 50%;" align="left" valign="bottom"><div class="segitiga-kiri"><img src="{{ url('image/segitiga-kiri.png') }}" style="width:85%"></div></td>
                    <td style="width: 50%;" align="right" valign="top"><div style="margin-top:-2px;"><img src="{{ url('image/segitiga-kanan.png') }}" style="width:85%;"></div></td>
                </tr>
            </table>
        </div>
        
        <div class="" style="width:88%; margin-left:6%; padding-top:55px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <center>
                            <h2 style="color:#ff0000; font-size:23px; font-weight:bold;">
                                <?php
                                foreach($card_title as $row){
                                    echo strtoupper($row->content_title);
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
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 part-pointer-hover<?php echo $i; ?>">
                                        <a href="<?php echo url($row->item_link); ?>">
                                            <div class="part-pointer<?php echo $i; ?>">
                                                <div style="float:right;">
                                                    <img src="<?= url('image/serong.png'); ?>" class="img-fluid mx-auto d-block" style="height:25px;">
                                                </div>
                                                <center>
                                                    <div style="margin-top:35px;">
                                                        <!-- <div class="line-width"></div> -->
                                                        <h2 style="color:#FFFFFF; font-size:21px; font-weight:bold;"><?php echo $row->item_title; ?></h2>
                                                        <div style="padding:10px; font-size:15px; line-height:2;">
                                                            <?php echo $row->item_body; ?>
                                                        </div>
                                                    </div>
                                                    <div style="position: absolute; right:0px; bottom:0px;">
                                                    <img src="<?= url('image/i.png'); ?>" class="img-fluid mx-auto d-block" style="width:80px;">
                                                    </div>
                                                </center>	
                                            </div>
                                            <div style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 10px 0 rgba(0, 0, 0, 0.10); border-radius:10px;">
                                                <div>
                                                    <div>
                                                        <img class="img-fluid" src="<?php echo $url_cms.'/storage/files/'.$row->item_file; ?>" style="width:100%;" alt="#">
                                                    </div>
                                                    <div valign="top" style="padding:25px 5px 20px 5px; background-image: linear-gradient(to right, #525252, #606060, #767676, #909090); ">
                                                        <center>
                                                        <h3 style="font-weight:bold; font-size:18px; color:#FFFFFF;">
                                                        <?php echo $row->item_title; ?>
                                                        </h3>
                                                        </center> 
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
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

	<div class="section" id="company_div">
        <div class="" style="max-width: 100%; overflow-x: hidden; padding-top:35px; margin-bottom:20px;">              
            <?php
            $i = 1;
            foreach($company as $row){    
            ?>        
            <div class="row" style="background-image: url('<?php echo $url_cms.'/storage/files/'.$row->picture; ?>'); width:102%; height:600px; background-repeat: no-repeat; background-size: cover; padding:0px;">
                <div class="col-md-6 text-center" style="padding:0px; background-image:linear-gradient(to bottom, #64656A, #969696); padding:7% 5% 5% 5%;">
                    <div class="full">
                    <table>
                        <tr>
                            <td>
                                <img src="{{ url('image/line.png'); }}" style="height: 300px;">
                                <!-- <div style="border-left: 6px solid #ff0000; height: 300px;"></div> -->
                            </td>
                            <td align="left" style="padding-left:30px;">
                                <div id="contact-header"><?php echo $row->content_title; ?></div>
                                <div id="contact-div"><?php echo $row->content_body; ?> <a class="btn-detail" href="<?= url('profile-ifg/profil-ifg') ?>">Selengkapnya <font style="margin-top: 10px;"><img src="{{ url('image/serong-small.png') }}" style="height:18px; margin-top: 5px;"></font></a></div>
                            </td>
                        </tr>
                    </table>
                    </div>
                </div>
                <div class="col-lg-12" style="background: rgba(255,255,255,0.5); padding: 0px 20px 20px 20px;">
                    <div>  
                        <div class="row">    
                            <?php
                            foreach($content as $row2){    
                            ?> 
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center" style="padding:20px 30px 0px 30px;">
                                <a href="<?= url($row2->menu_link.'/'.$row2->menu_link_slug) ?>">
                                    <div class="bg-contact"><?php echo $row2->menu_name; ?> <font><img src="<?= url('image/serong-red.png'); ?>" class="serong-contact"></font></div>
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
        <div class="" style="width:88%; margin-left:6%; margin-top:40px; margin-bottom:60px;">       
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center" style="margin-bottom: 30px;">
                    <?php 
                    foreach($child_company_title as $row){
                    ?>
                    <h2 style="color:#ff0000; font-size:23px; font-weight:bold;"><?php echo strtoupper($row->content_title); ?></h2>  
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
                                    <a href="<?php echo url($row->item_link); ?>">
                                    <img src="<?php echo $url_cms.'/storage/files/'.$row->item_file; ?>" class="img-fluid" style="max-height:100px;">     
                                    </a>   
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                </div>
                
            </div>            
        </div>
    </div>

    <?php
    foreach($pop_up as $row){
    ?>
    <div class="modal" id="mypopup" style="<?php if($row->picture){ ?>margin-top:3%;<?php } else { ?> margin-top:9%;<?php } ?>">
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
                <?php
                if($row->content_title){
                ?>
				<div id="title-popup">
					<center>
					<?php echo $row->content_title; ?>
					</center>
				</div>
                <?php } ?>
				<div id="info-popup">
                    <?php if($row->picture){ ?>
                    <div style="margin-bottom: 10px;">
                        <img src="<?php echo $url_cms.'/storage/files/'.$row->picture; ?>" class="img-fluid">
                    </div>
                    <?php } ?>
                    <?php echo $row->content_body; ?>
				</div>
			</div>
			<div style="margin-top:-13%;">
				<img src="<?= url('image/serong_popup.png') ?>" style="width:200px;">
			</div>

			</div>
		</div>
	</div>
    <?php } ?>                        
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