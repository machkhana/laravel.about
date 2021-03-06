<?php

namespace App\Model\Web;

use App\Model\LikeResult;
use Illuminate\Database\Eloquent\Model;

class AddPoll extends Model
{
    protected $table = 'addpolls';
    protected $fillable =[
        'id',
        'sex',
        'idnumber',
        'username',
        'surname',
        'birthday',
        'address',
        'mobile',
        'repair'
    ];

    public function like_results() {
        return $this->belongsToMany(AddLike::class, 'likepollresults', 'poll_id', 'cat_id');
    }

}
