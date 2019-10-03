<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public $timestamps     = false;
    protected $connection  = 'website';
    protected $table       = 'news';

    public static function getNews()
    {
        return Blog::select('*')->orderBy('id', 'desc')->get();
    }

    public static function getNewsByID($id)
    {
        return Blog::select('*')->where('id', $id)->get();
    }

    public static function getFiveNews($id)
    {
        return Blog::select('*')->orderBy('id', 'desc')->limit('5')->get();
    }

    public static function getCountNews($id)
    {
        return Blog::select('*')->where('id', $id)->count();
    }

    public function comments()
    {
          return $this->hasMany(NewsComments::class, 'newsId');
    }


}
