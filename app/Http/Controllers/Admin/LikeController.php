<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin\AddLikes;
use App\Model\LikeResult;
use App\Model\Web\AddLike;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\AddPoll;
use App\Http\Requests\Admin\LikeRequest;

class LikeController extends Controller
{
    protected $pollcategory,$likecategory;
    public function __construct()
    {
        $this->pollcategory= new AddPoll();
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
        $likes = AddLike::all();

        return view('admin.like.index')
            ->with('likes',$likes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.like.create')->with('likecategories',$this->likecategory->get());
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
            return redirect()->route('admin.like.create');
        } catch (\Exception $e) {
            //DB::rollback();
            return redirect(route('admin.like.create'));
            //dd($e->getMessage());
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
    public function update(LikeRequest $request, $id)
    {
        try {
            $addlikecat = $request->toArray();
            $this->likecategory->find($id)->update($addlikecat);
            return redirect()->route('admin.like.create');
        } catch (\Exception $e) {
            return redirect(route('admin.like.create'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->likecategory->find($id)->delete();
        return redirect()->route('admin.like.create');
    }
}
