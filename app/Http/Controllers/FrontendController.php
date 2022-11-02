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
        $data['color'] = '#000000';
        $data['primary'] = '#000000';
        return view("page.index", $data);
    }
    
    public function menu($name)
    {
        $data['color'] = '#000000';
        $data['primary'] = '#000000';
        $data['content'] = DB::table('ifg_menu')
                ->join('ifg_pages_content', 'ifg_pages_content.id_menu', '=', 'ifg_menu.id')
                ->select('ifg_pages_content.id as id', 'ifg_pages_content.content_title as content_title', 'ifg_pages_content.content_body as content_body'
                , 'ifg_pages_content.picture as picture', 'ifg_menu.parent_id_kip as parent_id_kip', 'ifg_menu.menu_link_slug as menu_link_slug', 'ifg_menu.id as ifg_menu_id')
                ->where('ifg_menu.menu_link_slug', '=', 'menu/'.$name)->get();
        return view("page.informasi", $data);
    }
    
    public function informasi()
    {
        $data['color'] = '#000000';
        $data['primary'] = '#000000';
        return view("page.informasi", $data);
    }

    public function profil()
    {
        $data['color'] = '#000000';
        $data['primary'] = '#000000';
        $data['content'] = DB::table('ifg_menu')
                ->join('ifg_pages_content', 'ifg_pages_content.id_menu', '=', 'ifg_menu.id')
                ->select('ifg_pages_content.id as id', 'ifg_pages_content.content_title as content_title', 'ifg_pages_content.content_body as content_body'
                , 'ifg_pages_content.picture as picture', 'ifg_menu.parent_id_kip as parent_id_kip', 'ifg_menu.menu_link_slug as menu_link_slug', 'ifg_menu.id as ifg_menu_id')
                ->where('ifg_menu.menu_link_slug', '=', 'profil')->get();
        return view("page.profil", $data);
    }

    public function kontak()
    {
        $data['color'] = '#000000';
        $data['primary'] = '#000000';
        return view("page.kontak", $data);
    }

    public function jalur_pelayanan()
    {
        $data['color'] = '#000000';
        $data['primary'] = '#000000';
        return view("page.jalur_pelayanan", $data);
    }

    public function faq()
    {
        $data['color'] = '#000000';
        $data['primary'] = '#000000';
        $data['content'] = DB::table('ifg_menu')
                ->join('ifg_pages_content', 'ifg_pages_content.id_menu', '=', 'ifg_menu.id')
                ->select('ifg_pages_content.id as id', 'ifg_pages_content.content_title as content_title', 'ifg_pages_content.content_body as content_body'
                , 'ifg_pages_content.picture as picture', 'ifg_menu.parent_id_kip as parent_id_kip', 'ifg_menu.menu_link_slug as menu_link_slug', 'ifg_menu.id as ifg_menu_id')
                ->where('ifg_menu.menu_link_slug', '=', 'faq')->get();
        return view("page.faq", $data);
    }
}
