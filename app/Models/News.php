<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'description',
        'picture',
        'cates_id'
    ];

    public function cate_name()
    {
        return $this->belongsTo('App\models\CategoryNew', 'cates_id', 'id');
    }

}
