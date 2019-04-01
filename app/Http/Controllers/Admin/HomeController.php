<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\AddPoll;


class HomeController extends Controller
{
    protected $pollcontroller;
    public function __construct()
    {
        $this->pollcontroller = new AddPoll();
    }

    public function index(){
        $selectpoll = $this->pollcontroller->get();
        return view('admin.home.home')->with('polls',$selectpoll);
    }
}
