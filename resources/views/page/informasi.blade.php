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

@section('content')
<?php
$url_cms = \App\Helpers\AppHelper::web_backend();
foreach($content as $rowcontent){
    $parent1 = '';
    $parentid1 = '';
    $parent_link1 = '#';
    $query2 = \App\Helpers\AppHelper::menu_id2($rowcontent->parent_id_kip);
    foreach ($query2 as $row2) {
        $parent1 = $row2->menu_name;
        $parentid1 = $row2->parent_id_kip;
        $parent_link1 = $row2->menu_link.'/'.$row2->menu_link_slug;
    }

    $parent2 = '';
    $parent_link2 = '#';
    if($parentid1){
        $query2 = \App\Helpers\AppHelper::menu_id2($parentid1);
        foreach ($query2 as $row2) {
            $parent2 = $row2->menu_name;
            $parent_link2 = $row2->menu_link.'/'.$row2->menu_link_slug;
        }
    }
?>
<div class="layout_padding2 animate-box fadeInDown animated">
    <div class="container-image">
        <img src="{{ url('image/bg-informasi.jpg') }}" alt="Snow" style="width:100%;" id="img-height">
        <div class="centered">
            <div style="font-weight:bold;" id="title-menu"><?php if($parent2){ echo $parent2; } else if($parent1){ echo ''.$parent1; } else { echo $rowcontent->menu_name; } //$rowcontent->menu_name; ?></div>
            <div style="line-height:1.2;" id="detail-menu">
            <?php if($parent2){ echo ''.$parent2.''; ?> <font class="fa fa-angle-right" style="color:#fff; font-weight:bold; margin-left:7px; margin-right:7px;"></font> <?php } if($parent1){ echo ''.$parent1; ?> <font class="fa fa-angle-right" style="color:#fff; font-weight:bold; margin-left:7px; margin-right:7px;"></font> <?php } echo '<a href="'.url($rowcontent->menu_link.'/'.$rowcontent->menu_link_slug).'" style="color:#fff;">'.$rowcontent->menu_name.'</a>'; ?>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<div>
    <div style="width:95%; margin-top:-75px;">
        <div class="row">
            <div class="col-md-3 animate-box fadeInLeft animated left-side" id="side_div">
                <div class="full">
                    <div class="panel-group" id="accordion">
                      <?php
                      foreach($content as $rowcontent){
                        $parent_1 = $rowcontent->parent_id_kip;
                        $num_parent2 = 0;
                        if($parent_1){
                            $num_parent2 = \App\Helpers\AppHelper::menu_child_num2($parent_1); 
                        }
                        if($num_parent2 == 0){
                        $numsub0 = \App\Helpers\AppHelper::menu_child_num($rowcontent->ifg_menu_id);	
                        if($numsub0 > 0 or $rowcontent->parent_id_kip > 0){
                        $query = \App\Helpers\AppHelper::menu_child($rowcontent->parent_id_kip);
                        foreach ($query as $row) {	
                        $numsub1 = \App\Helpers\AppHelper::menu_child_num($row->id);
                        //echo $numsub1.' '.$rowcontent->parent_id_kip;	
                      ?>
                      <div class="panel panel-default" <?php if($rowcontent->menu_link_slug <> $row->menu_link_slug){ ?>style="background-color:#D9D9D9;"<?php } ?>>
                        <div class="panel-heading" <?php if($rowcontent->menu_link_slug == $row->menu_link_slug){ ?>style="background-image: linear-gradient(to right, #BD1D23, #E61E26, #F3131B, #ED1C24); padding:15px 8px 15px 8px; color:#ffffff; font-weight:600;"<?php } else { ?>style="padding:15px 8px 15px 8px; color:#33354c; font-weight:600;"<?php } ?>>
                          <div class="panel-title">
                            <a <?php if($numsub1){ ?>data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $row->id; ?>"<?php } else { ?> href="<?= url($row->menu_link.'/'.$row->menu_link_slug); ?>"<?php } ?> style="font-size:16px;">
                                <?php if($numsub1){ ?>
                                    <table style="width:100%;">
                                        <tr>
                                            <td style="width:100%;">
                                            <font style="<?php if($numsub1){ if($rowcontent->menu_link_slug == $row->menu_link_slug){ echo 'color:#ffffff;'; }} else { if($rowcontent->menu_link_slug == $row->menu_link_slug){ echo 'color:#ffffff; line-height:1.3;'; } else { echo 'line-height:1.3;'; } } ?>"><?php echo $row->menu_name; ?></font> 
                                            </td>
                                            <td width="30" valign="top">
                                            <font class="fa fa-chevron-down" style="float:right; margin-top:8px;"></font>    
                                            </td>
                                        </tr>
                                    </table>
                                <?php } else { ?>
                                    <table style="width:100%;">
                                        <tr>
                                            <td style="width:100%;">
                                                <div style="<?php if($numsub1){ if($rowcontent->menu_link_slug == $row->menu_link_slug){ echo 'color:#ffffff;'; }} else { if($rowcontent->menu_link_slug == $row->menu_link_slug){ echo 'color:#ffffff; line-height:1.3;'; } else { echo 'line-height:1.3;'; } } ?>"><?php echo $row->menu_name; ?></div>
                                            </td>
                                            <td width="30" valign="top">
                                                <?php 
                                                if($rowcontent->menu_link_slug == $row->menu_link_slug){
                                                ?>
                                                <div style="margin-top:-7px;">
                                                <img src="{{ url('image/serong.png') }}" style="width:30px;">
                                                </div>
                                                <?php } ?>    
                                            </td>
                                        </tr>
                                    </table>
                                <?php } ?>
                            </a>
                          </div>
                        </div>
                        <?php
                        if($numsub1){
                        ?>
                        <div id="collapse<?php echo $row->id; ?>" class="panel-collapse collapse <?php if($rowcontent->menu_link_slug == $row->menu_link_slug){ echo 'show'; } ?>">
                            <!-- <div style="background-color:#64656A; position: absolute;">
                                <img src="{{ url('image/serong-kanan.png') }}" class="img-fluid">
                            </div> -->
                            <div style="color:#fff; background-color:#424242;">
                              <?php
                                $query2 = \App\Helpers\AppHelper::menu_child($row->id);
                                foreach ($query2 as $row2) {		
                              ?>
                              <div class="submenu-div"><a href="<?= url($row->menu_link.'/'.$row2->menu_link_slug); ?>" class="submenu-div-menu"><?php echo $row2->menu_name; ?></a></div>
                              <!-- <div style="border:0.5px solid #999999; width:100%;"></div> -->
                              <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                      </div>
                      <!-- <div style="border:0.5px solid #ffff; width:100%;"></div> -->
                      <?php } ?>
                      <?php } else { ?>
                      <div class="panel panel-default">
                        <div class="panel-heading" style="background-image: linear-gradient(to right, #BD1D23, #E61E26, #F3131B, #ED1C24); padding:15px 8px 15px 8px; color:#ffffff;">
                          <div class="panel-title">
                            <a href="<?= url($rowcontent->menu_link.'/'.$rowcontent->menu_link_slug); ?>" style="font-size:16px; font-weight:600;">
                                <table style="width:100%;">
                                    <tr>
                                        <td style="width:100%;">
                                            <div style="color:#ffffff;"><?php echo $rowcontent->menu_name; ?></div>
                                        </td>
                                        <td width="30" valign="top">
                                            <img src="{{ url('image/serong.png') }}" style="width:30px;"> 
                                        </td>
                                    </tr>
                                </table>
                            </a>
                          </div>
                        </div>   
                      </div>   
                      <?php } ?>
                      <?php 
                      } else { 
                        $query_2 = \App\Helpers\AppHelper::menu_child2($parent_1); 
                        foreach ($query_2 as $rowcontent2) {	
                        $numsub0 = \App\Helpers\AppHelper::menu_child_num($rowcontent2->ifg_menu_id);	
                        $query = \App\Helpers\AppHelper::menu_child($rowcontent2->ifg_menu_id);
                        foreach ($query as $row) {	
                        $numsub1 = \App\Helpers\AppHelper::menu_child_num($row->id);  
                      ?>
                      
                      <div class="panel panel-default" <?php if($rowcontent2->menu_link_slug <> $row->menu_link_slug){ ?>style="background-color:#D9D9D9;"<?php } ?>>
                        <div class="panel-heading" <?php if($rowcontent2->menu_link_slug == $row->menu_link_slug){ ?>style="background-image: linear-gradient(to right, #BD1D23, #E61E26, #F3131B, #ED1C24); padding:15px 8px 15px 8px; color:#ffffff; font-weight:600;"<?php } else { ?>style="padding:15px 8px 15px 8px; color:#33354c; font-weight:600;"<?php } ?>>
                          <div class="panel-title">
                            <a <?php if($numsub1){ ?>data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $row->id; ?>"<?php } else { ?> href="<?= url($row->menu_link.'/'.$row->menu_link_slug); ?>"<?php } ?> style="font-size:16px;">
                                
                                <table style="width:100%;">
                                    <tr>
                                        <td style="width:100%;">
                                        <font style="<?php if($numsub1){ if($rowcontent2->menu_link_slug == $row->menu_link_slug){ echo 'color:#ffffff;'; }} else { if($rowcontent2->menu_link_slug == $row->menu_link_slug){ echo 'color:#ffffff; line-height:1.3;'; } else { echo 'line-height:1.3;'; } } ?>"><?php echo $row->menu_name; ?></font> 
                                        </td>
                                        <?php if($numsub1){ ?>
                                        <td width="30" valign="top">
                                        <font class="fa fa-chevron-down" style="float:right; margin-top:8px; <?php if($numsub1){ if($rowcontent2->menu_link_slug == $row->menu_link_slug){ echo 'color:#ffffff;'; }} ?>"></font>    
                                        </td>
                                        <td width="30" valign="top">
                                            <div style="margin-top:-7px;">
                                            <img src="{{ url('image/serong.png') }}" style="width:30px;">
                                            </div>    
                                        </td>
                                        <?php } ?>
                                    </tr>
                                </table>
                                
                            </a>
                          </div>
                        </div>
                        <?php
                        if($numsub1){
                        ?>
                        <div id="collapse<?php echo $row->id; ?>" class="panel-collapse collapse <?php if($rowcontent2->menu_link_slug == $row->menu_link_slug){ echo 'show'; } ?>">
                            <!-- <div style="background-color:#64656A; position: absolute;">
                                <img src="{{ url('image/serong-kanan.png') }}" class="img-fluid">
                            </div> -->
                            <div style="color:#fff;">
                              <?php
                                $query2 = \App\Helpers\AppHelper::menu_child($row->id);
                                foreach ($query2 as $row2) {		
                              ?>
                              <div class="submenu-div" style="<?php if($rowcontent->menu_link_slug == $row2->menu_link_slug){ echo 'background-color:#64656A;'; } ?>"><a href="<?= url($row->menu_link.'/'.$row2->menu_link_slug); ?>" class="submenu-div-menu" style="<?php if($rowcontent->menu_link_slug == $row2->menu_link_slug){ echo 'color:#fff;'; } ?>"><?php echo $row2->menu_name; ?></a></div>
                              <!-- <div style="border:0.5px solid #999999; width:100%;"></div> -->
                              <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                      </div>
                      <!-- <div style="border:0.5px solid #ffff; width:100%;"></div> -->
                      
                      <?php }} ?>
                      <?php }} ?>
                    </div>
                </div>
            </div>
            
            <div class="col-md-9 animate-box fadeInUp animated" id="body-content-inner">
                <div class="full" style="padding-top:20px; padding-left:20px; padding-right:10px; margin-bottom:20px;">
                    <h2 style="color:#33354c; font-size:23px; font-weight:bold;">
                        <?php echo $parent1; ?>
                    </h2>
                    <?php
                    foreach($content as $row){
                    ?>
                    <div style="color:#33354c; text-align:justify; font-size:15px; margin-top:10px; margin-bottom:20px; line-height:1.4;">
                        <?php echo $row->content_body; ?>
                    </div>
                    <h2 style="color:#ff0000; font-size:23px; font-weight:bold;">
                        <?php echo $row->content_title; ?>
                    </h2>
                    <div class="panel-group" id="accordion" style="margin-top:10px;">
                      <?php
                      $no = 1;
                      $query2 = \App\Helpers\AppHelper::select_ifg_pages_content_list_item($row->id);
                      foreach ($query2 as $row2) {	
                        $files = 'https://'.str_replace('https://', '', str_replace('www.', '', str_replace('http://', '', $row2->item_link)));
                        if($row2->item_type == 'FL'){
                            $files = $url_cms.'/storage/files/'.$row2->item_file;
                        }
                      ?>
                        <a style="color:#33354c; font-size:15px;" href="<?= $files; ?>" target="_blank">
                            <div class="panel panel-default" style="background-image: linear-gradient(#ffffff, #F9F9F9); font-size:14px; box-shadow: 0 0 1px 1px #ccc; margin-bottom:20px;">
                            <div class="panel-title">
                                <table style="width:100%;">
                                    <tr>
                                        <td style="padding:8px; font-weight:600;">
                                            <div><?php echo $no; ?>. <font style="margin-left:10px;"><?php echo $row2->item_title; ?></font></div>
                                        </td>
                                        <td width="50" align="right" valign="top">
                                            <div style="margin-top:-4px; margin-right:-2px;">
                                            <img src="{{ url('image/triagle.png') }}" style="height:25px;">
                                            </div>    
                                        </td>
                                    </tr>
                                </table>
                                <!-- <font class="fa fa-file-pdf-o" style="float:right; color:#333333; margin-top:8px;"></font> -->
                            </div>
                            </div>
                        </a>
                      <?php $no++; } ?>
                    </div>
                    <?php } ?>
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