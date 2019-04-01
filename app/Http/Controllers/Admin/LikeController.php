<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin\AddLikes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\AddPoll;
use App\Http\Requests\Admin\LikeRequest;

class LikeController extends Controller
{
    protected $likecontroller,$likecategory;
    public function __construct()
    {
        $this->likecontroller= new AddPoll();
        $this->likecategory = new AddLikes();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //$like_result=$this->likecontroller->get();
       // $id = '1';
        $likegorgia_1=$this->likecontroller->where('likegorgia_1',1)->get();
        $likegorgia_2=$this->likecontroller->where('likegorgia_2',1)->get();
        $likegorgia_3=$this->likecontroller->where('likegorgia_3',1)->get();
        $likegorgia_4=$this->likecontroller->where('likegorgia_4',1)->get();
        $likegorgia_5=$this->likecontroller->where('likegorgia_5',1)->get();
        $likegorgia_6=$this->likecontroller->where('likegorgia_6',1)->get();
        $likegorgia_7=$this->likecontroller->where('likegorgia_7',1)->get();
        $likegorgia_8=$this->likecontroller->where('likegorgia_8',1)->get();
        $likegorgia_9=$this->likecontroller->where('likegorgia_9',1)->get();
        $likegorgia_10=$this->likecontroller->where('likegorgia_10',1)->get();
        $likegorgia_11=$this->likecontroller->where('likegorgia_11',1)->get();
        $likegorgia_12=$this->likecontroller->where('likegorgia_12',1)->get();
        $likegorgia_13=$this->likecontroller->where('likegorgia_13',1)->get();
        $likegorgia_14=$this->likecontroller->where('likegorgia_14',1)->get();
        $likegorgia_15=$this->likecontroller->where('likegorgia_15',1)->get();
        return view('admin.like.index')
            ->with('likegorgia_1',$likegorgia_1)
            ->with('likegorgia_2',$likegorgia_2)
            ->with('likegorgia_3',$likegorgia_3)
            ->with('likegorgia_4',$likegorgia_4)
            ->with('likegorgia_5',$likegorgia_5)
            ->with('likegorgia_6',$likegorgia_6)
            ->with('likegorgia_7',$likegorgia_7)
            ->with('likegorgia_8',$likegorgia_8)
            ->with('likegorgia_9',$likegorgia_9)
            ->with('likegorgia_10',$likegorgia_10)
            ->with('likegorgia_11',$likegorgia_11)
            ->with('likegorgia_12',$likegorgia_12)
            ->with('likegorgia_13',$likegorgia_13)
            ->with('likegorgia_14',$likegorgia_14)
            ->with('likegorgia_15',$likegorgia_15);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.like.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LikeRequest $request)
    {
        //DB::beginTransactio();
        try {
            $addlikecat = $request->toArray();
            $this->likecategory->create($addlikecat);
            //DB::commit();
            return redirect()->route('admin.like.index');
        } catch (\Exception $e) {
            //DB::rollback();
            //return redirect(route('admin.like.create'));
            dd($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
