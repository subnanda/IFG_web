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
@endsection	
@section('content')
	<div class="layout_padding">
		<table background="{{ url('image/bg-informasi.jpg') }}" style="width:100%; height:300px;">
			<tr>
				<td align="center" style="color:#FFFFFF; font-size:18px; padding-left:15px; padding-right:15px;">
					<div style="font-size:35px; font-weight:bold;">Kontak Layanan EPPID IFG</div>
					<div>
					Profil EPPID IFG <font class="fa fa-angle-right" style="color:#fff; font-weight:bold; margin-left:7px; margin-right:7px;"></font> Kontak Layanan EPPID IFG
					</div>
				</td>
			</tr>
		</table>
	</div>
	
	<div>
        <div class="" style="width:95%; margin-top:-74.5px;">
            <div class="row">
                <div class="col-md-3" id="side_div">
                    <div class="full">
                        <div class="panel-group" id="accordion">
						  <div class="panel panel-default" style="background-color:#E5E5E5;">
							<div class="panel-heading" style="padding:15px;">
							  <div class="panel-title">
								<a href="{{ url('profil') }}" style="color:#000; font-size:18px;">Profil</a>
							  </div>
							</div>
						  </div>
						  <div style="border:0.5px solid #ffff; width:100%;"></div>
						  <div class="panel panel-default" style="background-color:#E5E5E5;">
							<div class="panel-heading" style="background-image: linear-gradient(#ff0000, #F76675, #ff0000); padding:15px;">
							  <div class="panel-title">
								<a href="{{ url('kontak') }}" style="color:#fff; font-size:18px;">Kontak Layanan EPPID IFG <font class="fa fa-chevron-right" style="float:right; margin-top:8px;"></font></a>
							  </div>
							</div>
						  </div>
						  <div style="border:0.5px solid #ffff; width:100%;"></div>
						  <div class="panel panel-default" style="background-color:#E5E5E5;">
							<div class="panel-heading" style="padding:15px;">
							  <div class="panel-title">
								<a href="{{ url('jalur_pelayanan') }}" style="color:#000; font-size:18px;">Jalur dan Waktu Layanan</a>
							  </div>
							</div>
						  </div>
						</div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="full" style="padding-top:40px; margin-bottom:20px; padding-left:10px; padding-right:10px;">
						<h2 style="color:#000000; font-size:23px; font-weight:bold;">
							Kontak Layanan EPPID IFG
						</h2>
						<div style="color:#000000; font-size:17px; margin-top:10px; margin-bottom:30px; line-height:1.4; box-shadow: 0 0 2px 2px #ccc; padding:15px;">
							<table>
							   <tr>
								   <td valign="top">
									   <font class="fa fa-phone" style="color:#000; font-size:20px;"></font>	
								   </td>
								   <td style="padding-left:5px;">
									   <div style="color:#000; font-size:17px; margin-bottom:3px;">(+62) 021 2505080</div>
								   </td>
							   </tr>
							   <tr>
									<td colspan="2" height="10"></td>
							   </tr>
							   <tr>
								   <td valign="top">
									   <font class="fa fa-envelope" style="color:#000; font-size:20px;"></font>	
								   </td>
								   <td style="padding-left:5px;">
									   <div style="color:#000; font-size:17px; margin-bottom:3px;">cs@ifg.id</div>
								   </td>
							   </tr>
							</table>
						</div>
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