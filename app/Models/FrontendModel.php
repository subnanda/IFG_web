<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrontendModel extends Model
{
    use HasFactory;
    protected $table = 'ifg_menu';
    protected $primaryKey = 'id';

    protected $fillable = [
        'menu_name', 'menu_link', 'menu_link_slug', 'parent_id_kip'
    ];
}
