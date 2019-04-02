<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Web\AddLike;

class HomeController extends Controller
{
    protected  $likecat;
    public function __construct()
    {
        $this->likecat = new AddLike();
    }

    public function index(){
        $likeres = $this->likecat->orderBy('sort','asc')->get();
        return view('web.home')->with('likeresults',$likeres);
    }
}
