<?php

namespace App\Model\Web;

use App\Model\LikeResult;
use Illuminate\Database\Eloquent\Model;

class AddLike extends Model
{
    protected $table = 'likecategories';
    protected $fillable =[
        'id',
        'catname',
        'sort'
    ];

    public function results() {
        return $this->hasMany(LikeResult::class, 'cat_id');
    }
}
