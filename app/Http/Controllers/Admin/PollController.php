<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\AddPoll;
use App\Model\Web\AddLike;
use App\Model\LikeResult;
use App\Http\Requests\Admin\PollRequest;
use phpDocumentor\Reflection\Types\Integer;

class PollController extends Controller
{
    protected $pollcontroller, $like;
    public function __construct()
    {
        $this->pollcontroller = new AddPoll();
        $this->like = new AddLike();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $polls=$this->pollcontroller->get();
        return view('admin.poll.index')->with('polls',$polls);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $poll_result = $this->pollcontroller->where('id',$id)->get();
        return view('admin.poll.show')
            ->with('likecategories',AddLike::all())
            ->with('polls',$poll_result);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
