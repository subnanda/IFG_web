<?php

namespace App\Http\Controllers;

use App\Models\FrontendModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helpers\AppHelper;

class FrontendController extends Controller
{
    public function index()
    {
        $data['slider'] = DB::table('ifg_pages_content_list_item')
                        ->select('*')
                        ->where('id_pages_content', '=', 1)->get();
        $data['welcome'] = DB::table('ifg_pages_content')
                        ->select('*')
                        ->where('id', '=', 2)->get();
        $data['company'] = DB::table('ifg_pages_content')
                        ->select('*')
                        ->where('id', '=', 4)->get();
        $data['card'] = DB::table('ifg_pages_content_list_item')
                        ->select('*')
                        ->where('id_pages_content', '=', 3)->get();
        $data['card_title'] = DB::table('ifg_pages_content')
                            ->select('*')
                            ->where('id', '=', 3)->get();                
        $data['content'] = DB::table('ifg_menu')
                ->join('ifg_pages_content', 'ifg_pages_content.id_menu', '=', 'ifg_menu.id')
                ->select('ifg_menu.menu_name', 'ifg_pages_content.id as id', 'ifg_pages_content.content_title as content_title', 'ifg_pages_content.content_body as content_body'
                , 'ifg_pages_content.picture as picture', 'ifg_menu.parent_id_kip as parent_id_kip', 'ifg_menu.menu_link as menu_link', 'ifg_menu.menu_link_slug as menu_link_slug', 'ifg_menu.id as ifg_menu_id')
                ->where('ifg_menu.id', '=', 13)
                ->orWhere('ifg_menu.id', '=', 14)->get();
        $data['child_company'] = DB::table('ifg_pages_content_list_item')
                        ->select('item_file', 'item_link')
                        ->where('id_pages_content', '=', 23)->get();
        $data['child_company_count'] = DB::table('ifg_pages_content_list_item')
                        ->select('item_file')
                        ->where('id_pages_content', '=', 23)->count();
        $data['child_company_title'] = DB::table('ifg_pages_content')
                        ->select('content_title')
                        ->where('id', '=', 23)->get();
        $data['pop_up'] = DB::table('ifg_pages_content')
                        ->select('content_title', 'content_body', 'picture')
                        ->where('id', '=', 44)->get();
        return view("page.index", $data);
    }
    
    public function beranda($name)
    {
        redirect('index');
    }

    public function searching()
    {
        ?>
        <div id="search_hasil1">
            <div class="overflow">
                <?php
                if(request('pencarian')){
                $pencarian = DB::table('ifg_pages_content')
                    ->join('ifg_menu', 'ifg_menu.id', '=', 'ifg_pages_content.id_menu')
                    ->select('ifg_pages_content.content_title', 'ifg_pages_content.content_body', 'ifg_menu.menu_link', 'ifg_menu.menu_link_slug')
                    ->where('ifg_pages_content.content_title', 'like%', '%'. request('pencarian') . '%')
                    ->orWhere('ifg_pages_content.content_body', 'like', '%'. request('pencarian') . '%')
                    ->get();
                //return response()->json($pencarian);
                if($pencarian){
                foreach ($pencarian as $row) {
                ?>
                <div class="search-border">
                    <a href="<?php echo url($row->menu_link.'/'.$row->menu_link_slug); ?>">
                        <table style="width: 100%;;">
                            <tr>
                                <td>
                                    <?php
                                    if($row->content_title <> '-'){
                                    ?>
                                    <div style="font-weight:bold; font-size:13px;"><?php echo $row->content_title; ?></div>
                                    <?php } ?>
                                </td>
                                <td valign="middle" rowspan="2" width="60" style="padding-left: 5px; padding-right: 5px; font-size:9px;">Suggested</td>
                            </tr>
                            <tr>
                                <td>
                                    <?php
                                    if(strip_tags($row->content_body) <> '-'){
                                    ?>
                                    <div style="font-size:10px; line-height:1.2;"><?php echo substr(strip_tags($row->content_body), 0, 150).'...'; ?></div>
                                    <?php } ?>        
                                </td>
                            </tr>
                        </table>
                        <div style="border:0.5px solid #ccc; width:100%; margin-top:10px; margin-bottom:10px;"></div>
                    </a>
                </div>
                <?php } ?>
                <?php } else { ?>
                <div style="color:#ff0000; font-size:13px;">
                    <center>Pencarian kata <b>'<?php echo request('pencarian'); ?>'</b> tidak ditemukan</center>
                </div>    
                <?php }} ?>
            </div> 
        </div>
        <?php
    }

    public function searching2()
    {
        ?>
        <div id="search_hasil2">
            <div class="overflow">
                <?php
                if(request('pencarian')){
                $pencarian = DB::table('ifg_pages_content')
                    ->join('ifg_menu', 'ifg_menu.id', '=', 'ifg_pages_content.id_menu')
                    ->select('ifg_pages_content.content_title', 'ifg_pages_content.content_body', 'ifg_menu.menu_link', 'ifg_menu.menu_link_slug')
                    ->where('ifg_pages_content.content_title', 'like', '%'. request('pencarian') . '%')
                    ->orWhere('ifg_pages_content.content_body', 'like', '%'. request('pencarian') . '%')
                    ->get();
                //return response()->json($pencarian);
                if($pencarian){
                foreach ($pencarian as $row) {
                ?>
                <div class="search-border">
                    <a href="<?php echo url($row->menu_link.'/'.$row->menu_link_slug); ?>">
                        <table style="width: 100%;;">
                            <tr>
                                <td>
                                    <?php
                                    if($row->content_title <> '-'){
                                    ?>
                                    <div style="font-weight:bold; font-size:13px;"><?php echo $row->content_title; ?></div>
                                    <?php } ?>
                                </td>
                                <td valign="middle" rowspan="2" width="60" style="padding-left: 5px; padding-right: 5px; font-size:9px;">Suggested</td>
                            </tr>
                            <tr>
                                <td>
                                    <?php
                                    if(strip_tags($row->content_body) <> '-'){
                                    ?>
                                    <div style="font-size:10px; line-height:1.2;"><?php echo substr(strip_tags($row->content_body), 0, 150).'...'; ?></div>
                                    <?php } ?>        
                                </td>
                            </tr>
                        </table>
                        <div style="border:0.5px solid #ccc; width:100%; margin-top:10px; margin-bottom:10px;"></div>
                    </a>
                </div>
                <?php } ?>
                <?php } else { ?>
                <div style="color:#ff0000; font-size:13px;">
                    <center>Pencarian kata <b>'<?php echo request('pencarian'); ?>'</b> tidak ditemukan</center>
                </div>    
                <?php }} ?>
            </div>
        </div>
        <?php
    }
    
    public function menu($name)
    {
        $data['content'] = DB::table('ifg_menu')
                ->join('ifg_pages_content', 'ifg_pages_content.id_menu', '=', 'ifg_menu.id')
                ->select('ifg_pages_content.id as id', 'ifg_pages_content.content_title as content_title', 'ifg_pages_content.content_body as content_body'
                , 'ifg_pages_content.picture as picture', 'ifg_menu.parent_id_kip as parent_id_kip', 'ifg_menu.menu_link as menu_link', 'ifg_menu.menu_link_slug as menu_link_slug', 'ifg_menu.id as ifg_menu_id')
                ->where('ifg_menu.menu_link_slug', '=', $name)->get();
        return view("page.informasi", $data);
    }
    
    public function informasi_ifg($name)
    {
        $data['content'] = DB::table('ifg_menu')
                ->join('ifg_pages_content', 'ifg_pages_content.id_menu', '=', 'ifg_menu.id')
                ->select('ifg_pages_content.id as id', 'ifg_pages_content.content_title as content_title', 'ifg_pages_content.content_body as content_body'
                , 'ifg_pages_content.picture as picture', 'ifg_menu.parent_id_kip as parent_id_kip', 'ifg_menu.menu_name as menu_name', 'ifg_menu.menu_link as menu_link', 'ifg_menu.menu_link_slug as menu_link_slug', 'ifg_menu.id as ifg_menu_id')
                ->where('ifg_menu.menu_link_slug', '=', $name)->get();
        return view("page.informasi", $data);
    }

    public function profile_ifg($name)
    {
        $data['content'] = DB::table('ifg_menu')
                ->join('ifg_pages_content', 'ifg_pages_content.id_menu', '=', 'ifg_menu.id')
                ->select('ifg_pages_content.id as id', 'ifg_pages_content.content_title as content_title', 'ifg_pages_content.content_body as content_body'
                , 'ifg_pages_content.picture as picture', 'ifg_menu.parent_id_kip as parent_id_kip', 'ifg_menu.menu_name as menu_name', 'ifg_menu.menu_link as menu_link', 'ifg_menu.menu_link_slug as menu_link_slug', 'ifg_menu.id as ifg_menu_id')
                ->where('ifg_menu.menu_link_slug', '=', $name)->get();
        return view("page.profil", $data);
    }

    public function alur_pengajuan_ifg($name)
    {
        $data['content'] = DB::table('ifg_menu')
                ->join('ifg_pages_content', 'ifg_pages_content.id_menu', '=', 'ifg_menu.id')
                ->select('ifg_pages_content.id as id', 'ifg_pages_content.content_title as content_title', 'ifg_pages_content.content_body as content_body'
                , 'ifg_pages_content.picture as picture', 'ifg_menu.parent_id_kip as parent_id_kip', 'ifg_menu.menu_name as menu_name', 'ifg_menu.menu_link as menu_link', 'ifg_menu.menu_link_slug as menu_link_slug', 'ifg_menu.id as ifg_menu_id')
                ->where('ifg_menu.menu_link_slug', '=', $name)->get();
        return view("page.jalur_pelayanan", $data);
    }

    // public function kontak()
    // {
    //     return view("page.kontak", $data);
    // }

    public function faq_ifg($name)
    {
        $data['content'] = DB::table('ifg_menu')
                ->join('ifg_pages_content', 'ifg_pages_content.id_menu', '=', 'ifg_menu.id')
                ->select('ifg_pages_content.id as id', 'ifg_pages_content.content_title as content_title', 'ifg_pages_content.content_body as content_body'
                , 'ifg_pages_content.picture as picture', 'ifg_menu.parent_id_kip as parent_id_kip', 'ifg_menu.menu_name as menu_name', 'ifg_menu.menu_link as menu_link', 'ifg_menu.menu_link_slug as menu_link_slug', 'ifg_menu.id as ifg_menu_id')
                ->where('ifg_menu.menu_link_slug', '=', $name)->get();
        return view("page.faq", $data);
    }

    public function slider_card(){
        ?>
        <div id="slider_card">
            <link rel="stylesheet" href="<?= asset('assets/css/bootstrap.min.css'); ?>" />
            <?php
			$url_cms = 'http://10.1.19.105';
            $card = DB::table('ifg_pages_content_list_item')
            ->select('*')
            ->where('id_pages_content', '=', 3)->get();
            $card_title = DB::table('ifg_pages_content')
                    ->select('*')
                    ->where('id', '=', 3)->get();
            ?>
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
            </style>

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
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
            <script>
                $('#myCarousel').carousel({
                    interval: 10000
                })

                $('.carousel .carousel-item').each(function() {
                    var minPerSlide = -6;
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
        </div>
        <?php
    }
}
