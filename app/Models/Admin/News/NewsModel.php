<?php

namespace App\Models\Admin\News;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsModel extends Model
{
    // use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'news_id';
    protected $fillable = [
          'news_title',  'news_content',  'news_image', 'news_slug','news_arthur','category_id'
    ];
    protected $table = 'tbl_news';

}
