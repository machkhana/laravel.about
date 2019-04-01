<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class AddLikes extends Model
{
    protected $table='likecategories';
    protected $fillable=['id','catname','sort'];
}
