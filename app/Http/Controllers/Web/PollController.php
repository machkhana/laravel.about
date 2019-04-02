<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Web\AddPoll;
use App\Http\Requests\Web\PollRequest;

class PollController extends Controller
{
    protected $pollrequest;

    public function __construct()
    {
        $this->pollrequest = new AddPoll();
    }
    public function store(PollRequest $request){
        //DB::beginTransaction();
        try {
            $pollreq=$request->toArray();
            $addPoll = AddPoll::create($pollreq);

            //DB::commit();
            return redirect()->route('home');
        } catch (\Exception $e) {
            //DB::rollback();
            //return redirect(route('home'));
            //return('informacia bazashi ver damatda');
            //$pollreq=$request->toArray();
            dd($e->getMessage());
        }
    }
}
