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
    @media (max-width: 380px) {    
    	#message {
    		position:fixed;
    		right: 1%; 
    		z-index:80; 
    		top:2%; 
    		font-size:14px;
		    width:250px;
		    font-weight:normal;
    	}
    }
    
    @media (min-width: 381px) {
    	#message {
    		position:fixed;
    		right: 3%;
    		z-index:80; 
    		top:2%;
    		font-size:14px;
		    width:250px;
		    font-weight:normal;
    	}
    }
    
     @media (max-width: 980px) {	
        .tab-font{
            font-size:14px; 
            font-weight:bold;
        }
        
        #img-bg{
            margin-top:60px;
        }
        
        .tab-font{
            
        }
        
        .bottom-navigation {
            position: fixed;
            bottom: 0;
            height: 60px;
            width: 100%;
            display: flex;
            flex-wrap: nowrap;
            -webkit-box-pack: justify;
            justify-content: space-between;
            align-items: flex-start;
            z-index: 200;
            color:#ffffff;
            background-color: #ffffff;
            box-shadow: rgba(108,114,124,.16) 0 -2px 4px 0;
            right: 0;
            left: 0;
            margin-right: auto;
            margin-left: auto;
            padding: 0;
            margin: 0 auto;
        }
        
        .bottom-navigation__item {
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
            position: relative;
            z-index: 0;
            text-align: center;
            white-space: nowrap;
            flex-flow: column nowrap;
            padding: 8px;
            transition: color .2s ease-out 0s;
            cursor: pointer;
            width: 33%;
            text-decoration: none !important;
            color: <?php echo $color; ?>;
        }
        
        
        .bottom-navigation__item .menu--icons {
            display: block;
            position: relative;
            height: 24px;
            width: 30px;
            margin: auto auto 5px;
            overflow: hidden;
        }
        
        .bottom-navigation__item .menu--text {
            display: block;
            position: relative;
            font-weight: 600;
            font-size: 11px;
            line-height: 16px;
            color: <?php echo $color; ?>;
            text-decoration: initial;
            margin: -2px 0px 0px 0px;
        }      
    }     
    
    @media (min-width: 981px) {
        .tab-font{
            font-size:20px; 
            font-weight:bold;
        }
        
        .bottom-navigation {
            padding:0px;
    	    margin: 0 auto;
    	    /*max-width: 30em;
    	    min-width: 18.75em;*/
    	    width:100%;
    	    background-color:#ffffff;
            position: fixed;
            bottom: 0;
            height: 60px;
            display: flex;
            flex-wrap: nowrap;
            -webkit-box-pack: justify;
            justify-content: space-between;
            align-items: flex-start;
            z-index: 200;
            box-shadow: rgba(108,114,124,.16) 0 -2px 4px 0;
            right: 0;
            left: 0;
            margin-right: auto;
            margin-left: auto;
            padding: 0;
            margin: 0 auto;
        }
        
        .bottom-navigation__item {
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
            position: relative;
            z-index: 0;
            text-align: center;
            white-space: nowrap;
            flex-flow: column nowrap;
            padding: 8px;
            transition: color .2s ease-out 0s;
            cursor: pointer;
            width: 33%;
            text-decoration: none !important;
            color: <?php echo $color; ?>;
        }
        
        .bottom-navigation__item .menu--icons {
            display: block;
            position: relative;
            height: 24px;
            width: 30px;
            margin: auto auto 5px;
            overflow: hidden;
        }
        
        .bottom-navigation__item .menu--icons2 {
            display: block;
            position: relative;
            height: 34px;
            width: 40px;
            margin: auto auto 5px;
            overflow: hidden;
        }
        
        .bottom-navigation__item .menu--text {
            display: block;
            position: relative;
            font-weight: 600;
            font-size: 13px;
            line-height: 16px;
            color: <?php echo $color; ?>;
            text-decoration: initial;
            margin: -2px 0px 0px 0px;
        }     
    }

    @media (min-width: 701px) {  
    	#chatss {
            position:fixed;
            right: 1%;
            font-size:16px;
            font-weight:bold; 
            z-index:1; 
            color:#333333;
            top:83%; 
        }
        
        #chatss2 {
            display:none;
        }
	}
    
	@media (max-width: 700px) {  
	    #width-logo{
	        width:250px;
	    }
	    
    	#chatss {
            display:none;
        }
        
        #chatss2 {
            position:fixed;
            right: 4%;
            font-size:16px;
            font-weight:bold; 
            z-index:1; 
            color:#333333;
            top:80.5%; 
        }
	}

    #mixedSlider {
      position: relative;
    }
    #mixedSlider .MS-content {
      white-space: nowrap;
      overflow: hidden;
      margin: 0 0%;
    }
    #mixedSlider .MS-content .item {
      display: inline-block;
      width: 50%;
      position: relative;
      vertical-align: top;
      overflow: hidden;
      height: 100%;
      white-space: normal;
      padding: 0 10px;
    }
    @media (max-width: 991px) {
      #mixedSlider .MS-content .item {
        width: 50%;
      }
    }
    @media (max-width: 767px) {
      #mixedSlider .MS-content .item {
        width: 100%;
      }
    }
    #mixedSlider .MS-content .item .imgTitle {
      position: relative;
    }
    #mixedSlider .MS-content .item .imgTitle .blogTitle {
      margin: 0;
      text-align: left;
      letter-spacing: 2px;
      color: #252525;
      font-style: italic;
      position: absolute;
      background-color: rgba(255, 255, 255, 0.5);
      width: 100%;
      bottom: 0;
      font-weight: bold;
      padding: 0 0 2px 10px;
    }
    #mixedSlider .MS-content .item .imgTitle img {
      height: auto;
      width: 100%;
    }
    #mixedSlider .MS-content .item p {
      font-size: 16px;
      margin: 2px 10px 0 5px;
      text-indent: 15px;
    }
    #mixedSlider .MS-content .item a {
      float: right;
      margin: 0 20px 0 0;
      font-size: 16px;
      font-style: italic;
      color: rgba(173, 0, 0, 0.82);
      font-weight: bold;
      letter-spacing: 1px;
      transition: linear 0.1s;
    }
    #mixedSlider .MS-content .item a:hover {
      text-shadow: 0 0 1px grey;
    }
    #mixedSlider .MS-controls button {
      position: absolute;
      border: none;
      background-color: #ffffff;
      padding:5px;
      border-radius:15px;
      outline: 0;
      font-size: 20px;
      top: 40%;
      color: rgba(0, 0, 0, 0.4);
      transition: 0.15s linear;
    }
    #mixedSlider .MS-controls button:hover {
      color: rgba(0, 0, 0, 0.8);
    }
    @media (max-width: 992px) {
      #mixedSlider .MS-controls button {
        font-size: 30px;
      }
    }
    @media (max-width: 767px) {
      #mixedSlider .MS-controls button {
        font-size: 20px;
      }
    }
    #mixedSlider .MS-controls .MS-left {
      left:15px;
    }
    @media (max-width: 767px) {
      #mixedSlider .MS-controls .MS-left {
        left: 20px;
      }
    }
    #mixedSlider .MS-controls .MS-right {
      right: 15px;
    }
    
    @media (max-width: 992px) {
        #slider{
            display:inline;
            margin-top:-85px;
        }
        
        #slider2{
            display:none;
        }
        
        #menu-icon{
            margin-top:15px;
            padding:0px; 
        }
        
        #melancong{
            display:none;
        }
        
        #melancong2{
            display:inline;
            padding:0px; 
            margin-top:-25px;
        }
        
        #box-travel{
            margin-top:20px;
            padding:15px;
        }
    }
    
    @media (min-width: 993px) {
        #slider{
            display:none;
        }
        
        #slider2{
            display:inline;
            margin-top:-30px;
        }
        
        #menu-icon{
            margin-top:10px;
            padding-left:20px; 
            padding-right:20px;
        }
        
        #melancong{
            display:inline;
        }
        
        #melancong2{
            display:none;
        }
        
        #box-travel{
            margin-top:10px;
            padding:15px;    
        }
    }
    
    @media (max-width: 990px) {
        #left_slider{
            margin-left:-30px;
            background-color:none;
        }
        
        .carousel a.carousel-control-prev{
            background-color:none;
            padding:0px;
        }
        
        #right_slider{
            margin-right:-30px;
            background-color:none;
        }
        
        .carousel a.carousel-control-next{
            background-color:none;
            padding:0px;
        }
        
        .img-trx{
            display:none;
        }
    }
    
    @media (min-width: 991px) {
        #left_slider{
            margin-left:100px;
        }
        
        #right_slider{
            margin-right:100px;
        }
        
        #left_slider2{
            margin-left:60px;
        }
        
        #right_slider2{
            margin-right:60px;
        }
        
        .img-trx{
            display:inline;
            padding-right:0px;
        }
    }
    
    @media (max-width: 500px) {
        #left_slider{
            margin-top:-7px;
        }
        
        #right_slider{
            margin-top:-7px;
        }
        
        #left_slider2{
            margin-left:-34px;
        }
        
        #right_slider2{
            margin-right:-34px;
        }
    }
    
    @media (min-width: 991px) {
        #product-div{ 
            margin-top:90px;
        }
    }
    
    @media (max-width: 990px) {
        #product-div{ 
            margin-top:15px;
        }
    }
    
    @media (min-width: 767px) {
        #title-news{
            font-size:21px;    
        }
        
        #title-news2{
            font-size:24px;    
        }
        
        #title-news3{
            font-size:28px;    
        }
    }

    @media (max-width: 990px) {
        #title-all{
            margin-top:-30px;
        }
        
        #title-all2{
            margin-top:0px;
        }
    }
    
    @media (min-width: 991px) {
        #title-all{
            margin-top:50px;
        }
        
        #title-all2{
            margin-top:60px;
        }
    }

    @media (max-width: 400px) {
        #dws{
            display:none;
        } 
        
        #dws2{
            display:inline;
            margin-bottom:5px;
        }
        
        #anak{
            display:none;
        } 
        
        #anak2{
            display:inline;
        }
        
        #bayi{
            display:none;
        } 
        
        #bayi2{
            display:inline;
        }
    }

    @media (min-width: 401px) {
        #dws{
            display:inline;
            margin-bottom:5px;
        } 
        
        #dws2{
            display:none;
        }
        
        #anak{
            display:inline;
        } 
        
        #anak2{
            display:none;
        }
        
        #bayi{
            display:inline;
        } 
        
        #bayi2{
            display:none;
        }
    }    
    .icon2{
		font-size:26px;
		color:<?php echo $color; ?>;
	}
	
	#cart_items{
    	font-size:14px;
    	color:#ffffff;
    	background-color:#f2184f;
    	padding:3px 5px 3px 5px;
    	border:2px solid #ffffff;
    	border-radius:10px;
    	font-weight:600;
    	cursor:pointer;
    	margin-top:10px;
    	opacity:0.85;
    }

    @media (max-width: 766px) {    
    	#cart {
    		position:fixed;
            right: 4%;
            font-size:18px;
            font-weight:bold; 
            z-index:1; 
            color:<?php echo $color; ?>;
            top:78%;
    	}
    }
    
    @media (min-width: 767px) {
    	#cart {
    		position:fixed;
            right: 1%;
            font-size:18px;
            font-weight:bold; 
            z-index:1; 
            color:<?php echo $color; ?>;
            top:76%; 
    	}
    }
	
	#bar-div{
		background-image: linear-gradient(#cccccc, #ffffff);
		color:#333333; 
		font-weight:bold; 
		font-size:27px;
		padding:5%;
	}
	
	#bar-div:hover{
		background-image: linear-gradient(#ff0000, #F76675);
		color:#fff; 
	}
	
	#bar-div2{
		background-image: linear-gradient(#cccccc, #ffffff);
		color:#333333; 
		font-weight:bold; 
		font-size:27px;
		padding:5%;
	}
	
	#bar-div2:hover{
		background-image: linear-gradient(#ff0000, #F76675);
		color:#fff; 
	}

    @media (max-width: 766px) { 
		#logo-web{ 
			height:40px;
			width:90px;
		}
	}

    @media (min-width: 767px) { 
		#logo-web{ 
			height:50px;
		}
	}

    @media (min-width: 991px) { 
		.layout_padding{
			margin-top:90px;
		}
	}

    @media (min-width:767px) and (max-width:900px) {
		.layout_padding{
			margin-top:0px;
		}
	}

    @media (max-width: 766px) { 
		.layout_padding{
			margin-top:-10px;
		}
	}
	
	.line-width{
		border:3px solid #fff;
		width:70px;
		margin-bottom:30px;
		background-color:#fff;
		-webkit-border-radius: 1px;
		-moz-border-radius: 1px;
		border-radius: 1px;
		-webkit-transition: all 0.2s linear;
		-moz-transition: all 0.2s linear;
		-o-transition: all 0.2s linear;
	}
	
	.part-pointer{
		background-image: linear-gradient(#ff0000, #F76675, #ff0000); 
		color:#FFFFFF; 
		padding:18px; 
		position:absolute; 
		width:92%; 
		height:100%; 
		z-index:15;
		display:none;
	}
	
	.part-pointer2{
		background-image: linear-gradient(#ff0000, #F76675, #ff0000); 
		color:#FFFFFF; 
		padding:18px; 
		position:absolute; 
		width:92%; 
		height:100%; 
		z-index:15;
		display:none;
	}
	
	.part-pointer3{
		background-image: linear-gradient(#ff0000, #F76675, #ff0000); 
		color:#FFFFFF; 
		padding:18px; 
		position:absolute; 
		width:92%; 
		height:100%; 
		z-index:15;
		display:none;
	}
	
	.part-pointer4{
		background-image: linear-gradient(#ff0000, #F76675, #ff0000); 
		color:#FFFFFF; 
		padding:18px; 
		position:absolute; 
		width:92%; 
		height:100%; 
		z-index:15;
		display:none;
	}
</style>
@endsection	
@section('content')
	<div class="section layout_padding">
        <div>
            <div id="demo" class="carousel slide" data-ride="carousel">
                
                <!-- Indicators -->
                  <ol class="carousel-indicators" style="margin-top:10px;">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                  </ol>
                
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div>
                            <a href="">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <img class="img-responsive" src="{{ url('slider/slide.jpg') }}" />
                                </div>
                            </div>
                            </a>
                        </div>   
                    </div>
                    <div class="carousel-item">
                        <div>
                            <a href="">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <img class="img-responsive" src="{{ url('slider/slide.jpg') }}" />
                                </div>
                            </div>
                            </a>
                        </div>   
                    </div>
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
	
	<div style="margin-top:-100px;">
		<img class="img-responsive" src="{{ url('image/slide-bottom.jpg') }}" style="width:100%;" />
	</div>
	
	<div class="section">
        <div class="" style="width:88%; margin-left:6%; padding-top:55px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <center>
                            <h2 style="color:#ff0000; font-size:23px; font-weight:bold;">
								LAYANAN KETERBUKAAN INFORMASI PUBLIK
							</h2>
					    </center>
                    </div>
                </div>
            </div>
        
			<div class="row" style="margin-top:35px;">
			     
			   <div class="col-lg-3 col-md-3 col-sm-6 part-pointer-hover2" style="margin-bottom:20px;">
				 <div class="part-pointer2">
					 <center>
						<div class="line-width"></div>
						<h2 style="color:#FFFFFF; font-weight:bold;">Informasi Berkala</h2>
						<div style="padding:15px; font-size:17px;">
							Informasi setiap saat adalah informasi yang harus tersedia dan disediakan badan publik untuk bisa diberikan langsung diberikan kepada pemohon.
						</div>
					</center>	
				 </div>
			     <div style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 10px 0 rgba(0, 0, 0, 0.10); border-radius:10px;">
				    <div>
				        <div>
				            <img class="img-fluid" src="{{ url('service/service1.PNG') }}" style="width:100%;" alt="#">
				        </div>
						<div valign="top" style="padding-top:25px; padding-bottom:20px; background-color:#454545;">
							<center>
							 <h3 style="font-weight:bold; color:#FFFFFF;">
								 Informasi Berkala
							 </h3>
							</center> 
						</div>
					</div>
				 </div>
			   </div>
			   
			   <div class="col-lg-3 col-md-3 col-sm-6 part-pointer-hover3" style="margin-bottom:20px;">
				 <div class="part-pointer3">
					 <center>
						<div class="line-width"></div>
						<h2 style="color:#FFFFFF; font-weight:bold;">Informasi Serta Merta</h2>
						<div style="padding:15px; font-size:17px;">
							Informasi setiap saat adalah informasi yang harus tersedia dan disediakan badan publik untuk bisa diberikan langsung diberikan kepada pemohon.
						</div>
					</center>	
				 </div>
			     <div style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 10px 0 rgba(0, 0, 0, 0.10); border-radius:10px;">
				    <div>
				        <div>
				            <img class="img-fluid" src="{{ url('service/service1.PNG') }}" style="width:100%;" alt="#">
				        </div>
						<div valign="top" style="padding-top:25px; padding-bottom:20px; background-color:#454545;">
							<center>
							 <h3 style="font-weight:bold; color:#FFFFFF;">
								 Informasi Serta Merta
							 </h3>
							</center> 
						</div>
					</div>
				 </div>
			   </div>
			   
			   <div class="col-lg-3 col-md-3 col-sm-6 part-pointer-hover4" style="margin-bottom:20px;">
				 <div class="part-pointer4">
					 <center>
						<div class="line-width"></div>
						<h2 style="color:#FFFFFF; font-weight:bold;">Informasi Tersedia Setiap Saat</h2>
						<div style="padding:15px; font-size:17px;">
							Informasi setiap saat adalah informasi yang harus tersedia dan disediakan badan publik untuk bisa diberikan langsung diberikan kepada pemohon.
						</div>
					</center>	
				 </div>
			     <div style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 10px 0 rgba(0, 0, 0, 0.10); border-radius:10px;">
				    <div>
				        <div>
				            <img class="img-fluid" src="{{ url('service/service1.PNG') }}" style="width:100%;" alt="#">
				        </div>
						<div valign="top" style="padding-top:25px; padding-bottom:20px; background-color:#454545;">
							<center>
							 <h3 style="font-weight:bold; color:#FFFFFF;">
								 Informasi Tersedia Setiap Saat
							 </h3>
							</center> 
						</div>
					</div>
				 </div>
			   </div>
			   
			   <div class="col-lg-3 col-md-3 col-sm-6 part-pointer-hover" style="margin-bottom:20px;">
				 <div class="part-pointer">
					 <center>
						<div class="line-width"></div>
						<h2 style="color:#FFFFFF; font-weight:bold;">Alur Pengajuan KIP</h2>
						<div style="padding:15px; font-size:17px;">
							Informasi setiap saat adalah informasi yang harus tersedia dan disediakan badan publik untuk bisa diberikan langsung diberikan kepada pemohon.
						</div>
					</center>	
				 </div>
			     <div style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 10px 0 rgba(0, 0, 0, 0.10); border-radius:10px;">
				    <div>
				        <div>
				            <img class="img-fluid" src="{{ url('service/service1.PNG') }}" style="width:100%;" alt="#">
				        </div>
						<div valign="top" style="padding-top:25px; padding-bottom:20px; background-color:#454545;">
							<center>
							 <h3 style="font-weight:bold; color:#FFFFFF;">
								 Alur Pengajuan KIP
							 </h3>
							</center> 
						</div>
					</div>
				 </div>
			   </div>
			   
			</div>
        </div>
    </div>
	
	<div class="section">
        <div class="" style="width:88%; margin-left:6%; padding-top:40px; margin-bottom:50px;">
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
        </div>
    </div>
	@endsection	
	@section('script_additional')
	<script>
	$(document).ready(function(){
        $(".part-pointer-hover").hover(function(){
            $('.part-pointer').toggle();
        });
        $(".part-pointer-hover2").hover(function(){
            $('.part-pointer2').toggle();
        });
        $(".part-pointer-hover3").hover(function(){
            $('.part-pointer3').toggle();
        });
        $(".part-pointer-hover4").hover(function(){
            $('.part-pointer4').toggle();
        });
    });
	</script>
	@endsection