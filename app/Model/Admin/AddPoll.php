<?php

namespace App\Model\Admin;

//use App\Model\LikeResult;
use App\Model\Admin\AddLikes;
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

    public function likecageories(){
        return $this->belongsToMany( AddLikes::class, 'likepollresults', 'poll_id', 'cat_id');
    }
}
