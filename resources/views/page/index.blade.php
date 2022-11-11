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
        background-image: linear-gradient(#CC0000, #ff0000, #CC0000); 
        color:#FFFFFF; 
        padding:18px; 
        position:absolute; 
        width:92%; 
        height:100%; 
        z-index:15;
        display:none;
        }
        <?php $i++; } ?>
    </style>
    @endsection	
    @section('content')
    <?php
    $url_cms = 'http://10.1.19.105';
    ?>
	<div class="section layout_padding">
        <div>
            <div id="demo" class="carousel slide" data-ride="carousel">
                
                <!-- Indicators -->

                <ol class="carousel-indicators" style="margin-top:-10px;">
                    <?php
                    $i = 0;
                    foreach($slider as $row){    
                    ?>
                    <li data-target="#demo" data-slide-to="<?php echo $i; ?>" <?php if($i == 0){ ?>class="active"><?php } ?></li>
                    <?php $i++; } ?>
                </ol>
                
                <div class="carousel-inner">
                    <?php
                    $i = 0;
                    foreach($slider as $row){    
                    ?>
                    <div class="carousel-item <?php if($i == 0){ ?>active<?php } ?>">
                        <div>
                            <a href="<?php echo $row->item_file; ?>">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <img class="img-responsive" src="{{ $url_cms.'/storage/files/slider/'.$row->item_file }}" />
                                </div>
                            </div>
                            </a>
                        </div>   
                    </div>
                    <?php $i++; } ?>
                </div>
                
                <a class="carousel-control-prev" id="left_slider" href="#demo" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" id="right_slider" href="#demo" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
        
            </div>
        </div>
    </div>
	
    <?php
    foreach($welcome as $row){    
    ?>
    <div class="section">
        <div style="width:99%; margin-top:-95px;">
            <div class="row" style="padding:0px;">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12" style="background-image: url(<?php echo url('image/bg-red.jpg'); ?>);">
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
			     
                <?php
                $i = 1;
                foreach($card as $row){    
                ?>
			    <div class="col-lg-3 col-md-3 col-sm-6 part-pointer-hover<?php echo $i; ?>" style="margin-bottom:20px;">
                    <div class="part-pointer<?php echo $i; ?>">
                        <div style="float:right;">
                            <img src="<?= url('image/serong.png'); ?>" style="height:20px;">
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
                                <img class="img-fluid" src="{{ $url_cms.'/storage/files/'.$row->item_file }}" style="width:100%;" alt="#">
                            </div>
                            <div valign="top" style="padding-top:25px; padding-bottom:20px; background-image: linear-gradient(#454545, #868686, #454545); ">
                                <center>
                                <h3 style="font-weight:bold; color:#FFFFFF;">
                                <?php echo $row->item_title; ?>
                                </h3>
                                </center> 
                            </div>
                        </div>
                    </div>
			    </div>
			    <?php $i++; } ?>
			   
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
                <div class="col-md-6 text-center" style="padding:0px; background-color:#888888; padding:5%;">
                    <div class="full">
                    <table>
                        <tr>
                            <td>
                                <div style="border-left: 6px solid #ff0000; height: 300px;"></div>
                            </td>
                            <td align="left" style="padding-left:20px;">
                                <div style="color:#fff; font-size:30px; font-weight:bold;"><?php echo $row->content_title; ?></div>
                                <div style="color:#fff; font-size:18px; margin-top:15px; text-align:justify;"><?php echo $row->content_body; ?></div>
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
                            <div id="carousel-example" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner row w-100 mx-auto" role="listbox">
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
                                    <div class="carousel-item col-6 col-sm-6 col-md-3 col-lg-2 active">
                                        <a href="<?php echo $row->item_link; ?>" target="_blank">
                                            <img src="<?php echo $url_cms.'/storage/files/'.$row->item_file; ?>" class="img-fluid mx-auto d-block" alt="img1">
                                        </a>
                                    </div>
                                    <?php } ?>
                                </div>
                                <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev" style="margin-top:-15px;">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next" style="margin-top:-15px;">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                
            </div>            
        </div>
    </div>

    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
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
    </div>
	@endsection	
	@section('script_additional')
	<script>
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