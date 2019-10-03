<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public $timestamps     = false;
    protected $connection  = 'website';
    protected $table       = 'comments';

    public static function getCommentsByID($id)
    {
        return Comments::select('*')->where('id_news', $id)->get();
    }

    public static function getCountCommentsById($id)
    {
        return Comments::select('*')->where('id_news', $id)->count();
    }
}
