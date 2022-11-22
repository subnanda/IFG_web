<?php

namespace App\Helpers;

use App\Models\FrontendModel;
use Illuminate\Support\Facades\DB;

class AppHelper
{
    public static function menu_parent()
    {
        return DB::table('ifg_menu')
        ->select('*')
        ->where('parent_id_kip', '=', 0)
        ->where('is_hidden', '=', 'N')->get();
    }

    public static function menu_child($a)
    {
        return DB::table('ifg_menu')
            ->select('*')
            ->where('is_hidden', '=', 'N')
            ->where('parent_id_kip', '=', $a)->get();
    }

    public static function menu_child_num($a)
    {
        return DB::table('ifg_menu')
            ->select('id')
            ->where('is_hidden', '=', 'N')
            ->where('parent_id_kip', '=', $a)->count();
    }

    public static function menu_child_num2($a)
    {
        return DB::table('ifg_menu')
            ->select('id')
            ->where('is_hidden', '=', 'N')
            ->where('parent_id_kip', '<>', 0)
            ->where('id', '=', $a)->count();
    }

    public static function menu_child2($a)
    {
        $parent = '';
        $query = DB::table('ifg_menu')
            ->select('parent_id_kip')
            ->where('is_hidden', '=', 'N')
            ->where('id', '=', $a)->get();
        foreach ($query as $row) {
            $parent = $row->parent_id_kip;
        }
        return DB::table('ifg_menu')
            ->select('ifg_menu.parent_id_kip as parent_id_kip', 'ifg_menu.menu_name as menu_name', 'ifg_menu.menu_link as menu_link', 'ifg_menu.menu_link_slug as menu_link_slug', 'ifg_menu.id as ifg_menu_id')
            ->where('is_hidden', '=', 'N')
            ->where('id', '=', $parent)->get();
    }

    public static function select_ifg_pages_content_list_item($a)
    {
        return DB::table('ifg_pages_content_list_item')
            ->select('*')
            ->where('id_pages_content', '=', $a)
            ->orderBy('id', 'ASC')->get();
    }

    public static function menu_id($a)
    {
        $parent = '';
        $query = DB::table('ifg_menu')
            ->select('parent_id_kip')
            ->where('is_hidden', '=', 'N')
            ->where('id', '=', $a)->get();
        foreach ($query as $row) {
            $parent = $row->parent_id_kip;
        }
        return DB::table('ifg_menu')
        ->select('id', 'menu_name')
        ->where('is_hidden', '=', 'N')
        ->where('id', '=', $parent)->get();    
    }

    public static function menu_id2($a)
    {
        return DB::table('ifg_menu')
        ->select('id', 'menu_name', 'parent_id_kip', 'menu_link', 'menu_link_slug')
        ->where('is_hidden', '=', 'N')
        ->where('id', '=', $a)->get();    
    }

    public static function footer_company()
    {
        return DB::table('ifg_pages_content')
            ->select('content_title', 'content_body')
            ->where('id', '=', 22)
            ->get();
    }

    public static function footer_hubungi($a)
    {
        return DB::table('ifg_pages_content_list_item')
            ->select('item_body', 'item_link', 'item_file')
            ->where('item_type', '=', 'HBK')
            ->where('item_body', '=', $a)
            ->get();
    }

    public static function footer_medsos($a)
    {
        return DB::table('ifg_pages_content_list_item')
            ->select('id', 'item_body', 'item_link', 'item_file')
            ->where('item_type', '=', 'IKM')
            ->where('item_body', '=', $a)
            ->get();
    }
}
