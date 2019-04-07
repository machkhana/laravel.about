<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\AddPoll;
use App\Model\Web\AddLike;
use App\Model\LikeResult;
use App\Http\Requests\Admin\PollRequest;
use phpDocumentor\Reflection\Types\Integer;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

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

    public function export(){
        $poll=AddPoll::all();
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Id');
        $sheet->setCellValue('B1', 'სქესი');
        $sheet->setCellValue('C1', 'პირ. ნომერი');
        $sheet->setCellValue('D1', 'სახელი');
        $sheet->setCellValue('E1', 'გვარი');
        $sheet->setCellValue('F1', 'დაბ. თარიღი');
        $sheet->setCellValue('G1', 'მისამართი');
        $sheet->setCellValue('H1', 'მობილური');
        $sheet->setCellValue('I1', 'მიმდ. რემონტი');
        $rows = 2;
        foreach($poll as $polls){
            $sheet->setCellValue('A' . $rows, $polls['id']);
            $sheet->setCellValue('B' . $rows, $polls['sex']);
            $sheet->setCellValue('C' . $rows, $polls['idnumber']);
            $sheet->setCellValue('D' . $rows, $polls['username']);
            $sheet->setCellValue('E' . $rows, $polls['surname']);
            $sheet->setCellValue('F' . $rows, $polls['birthday']);
            $sheet->setCellValue('G' . $rows, $polls['address']);
            $sheet->setCellValue('H' . $rows, $polls['mobile']);
            $sheet->setCellValue('I' . $rows, $polls['repair']);
            $rows++;
        }
        $fileName = "export_users.xlsx";
        $writer = new Xlsx($spreadsheet);
        $writer->save("export/".$fileName);
        header("Content-Type: application/vnd.ms-excel");
        return redirect(url('/')."/export/".$fileName);
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
            ->with('likecategories',$this->like->all())
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
