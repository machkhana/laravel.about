<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Web\AddPoll;
use App\Model\Web\AddLike;
use App\Http\Requests\Web\PollRequest;

class PollController extends Controller
{
    protected $addpollcategory;

    public function __construct()
    {
        $this->addpollcategory = new AddPoll();
    }
    public function store(PollRequest $request){
        try {
            $pollreq=$request->toArray();
            $addPoll = $this->addpollcategory->create($pollreq);
            $addPoll->like_results()->sync($request->cat_id);
            return redirect()->route('home');
        } catch (\Exception $e) {
            //DB::rollback();
            return redirect(route('home'));
            //dd($e->getMessage());
        }
    }
}
