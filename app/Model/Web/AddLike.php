<?php

namespace App\Model\Web;

use Illuminate\Database\Eloquent\Model;

class AddLike extends Model
{
    protected $table = 'likecategories';
    protected $fillable =[
        'id',
        'catname',
        'sort'
    ];

    public function polls() {
        return $this->belongsToMany(AddPoll::class, 'likepollresults', 'poll_id', 'cat_id');
    }
}
