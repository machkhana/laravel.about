<?php

namespace App\Model\Admin;

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
}
