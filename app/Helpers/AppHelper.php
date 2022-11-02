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
        ->where('parent_id_kip', '=', 0)->get();
    }

    public static function menu_child($a)
    {
        return DB::table('ifg_menu')
            ->select('*')
            ->where('parent_id_kip', '=', $a)->get();
    }

    public static function menu_child_num($a)
    {
        return DB::table('ifg_menu')
            ->select('id')
            ->where('parent_id_kip', '=', $a)->count();
    }

    public static function select_ifg_pages_content_list_item($a)
    {
        return DB::table('ifg_pages_content_list_item')
            ->select('*')
            ->where('id_pages_content', '=', $a)
            ->orderBy('id', 'ASC')->get();
    }
}
