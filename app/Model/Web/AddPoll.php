<?php

namespace App\Model\Web;

use Illuminate\Database\Eloquent\Model;

class AddPoll extends Model
{
    protected $table = 'addpolls';
    protected $fillable =[
        'id',
        'sex',
        'username',
        'surname',
        'birthday',
        'address',
        'mobile',
        'repair',
        'likegorgia_1',
        'likegorgia_2',
        'likegorgia_3',
        'likegorgia_4',
        'likegorgia_5',
        'likegorgia_6',
        'likegorgia_7',
        'likegorgia_8',
        'likegorgia_9',
        'likegorgia_10',
        'likegorgia_11',
        'likegorgia_12',
        'likegorgia_13',
        'likegorgia_14',
        'likegorgia_15'
    ];

}
