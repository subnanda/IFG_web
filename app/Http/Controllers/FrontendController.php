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
        $data['card'] = DB::table('ifg_pages_content_list_item')
                        ->select('*')
                        ->where('id_pages_content', '=', 3)->get();
        $data['card_title'] = DB::table('ifg_pages_content')
                        ->select('*')
                        ->where('id', '=', 3)->get();
        $data['company'] = DB::table('ifg_pages_content')
                        ->select('*')
                        ->where('id', '=', 4)->get();
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
        return view("page.index", $data);
    }
    
    public function beranda($name)
    {
        redirect('index');
    }

    public function searching()
    {
        $pencarian = DB::table('ifg_pages_content')
            ->join('ifg_menu', 'ifg_menu.id', '=', 'ifg_pages_content.id_menu')
            ->select('ifg_pages_content.content_title', 'ifg_pages_content.content_body', 'ifg_menu.menu_link', 'ifg_menu.menu_link_slug')
            ->where('ifg_pages_content.content_title', 'like', '%' . request('pencarian') . '%')
            ->where('ifg_pages_content.content_body', 'like', '%' . request('pencarian') . '%')
            ->get();
        return response()->json($pencarian);
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
}
