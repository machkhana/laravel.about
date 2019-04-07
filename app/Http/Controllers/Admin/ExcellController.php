<?php

namespace App\Http\Controllers\Admin;

use App\Model\Web\AddLike;
use App\Model\Admin\AddPoll;
use App\Http\Controllers\Controller;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
Use PhpOffice\PhpSpreadsheet\Writer\Xls;

class ExcellController extends Controller
{
    public function export(){
        $polls=AddPoll::all();
        $categories = AddLike::all();
        $spreadsheet = new Spreadsheet;
        $sheet = $spreadsheet->getActiveSheet();

        $abc = ['J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

        $sheet->setCellValue('A1', 'Id');
        $sheet->setCellValue('B1', 'სქესი');
        $sheet->setCellValue('C1', 'პირ. ნომერი');
        $sheet->setCellValue('D1', 'სახელი');
        $sheet->setCellValue('E1', 'გვარი');
        $sheet->setCellValue('F1', 'დაბ. თარიღი');
        $sheet->setCellValue('G1', 'მისამართი');
        $sheet->setCellValue('H1', 'მობილური');
        $sheet->setCellValue('I1', 'მიმდ. რემონტი');

        $i = 0;
        foreach ($categories as $category) {
            $sheet->setCellValue($abc[$i].'1', $category->catname);
            $i++;
        }
        $rows = 2;
        foreach($polls as $poll){
            $sheet->setCellValue('A' . $rows, $poll['id']);
            $sheet->setCellValue('B' . $rows, $poll['sex']);
            $sheet->setCellValue('C' . $rows, $poll['idnumber']);
            $sheet->setCellValue('D' . $rows, $poll['username']);
            $sheet->setCellValue('E' . $rows, $poll['surname']);
            $sheet->setCellValue('F' . $rows, $poll['birthday']);
            $sheet->setCellValue('G' . $rows, $poll['address']);
            $sheet->setCellValue('H' . $rows, $poll['mobile']);
            $sheet->setCellValue('I' . $rows, $poll['repair']);

            $i = 0;
            foreach ($categories as $category) {
                $sheet->setCellValue($abc[$i].$rows, ($poll->likecageories->where('id', $category->id)->first() !== null) ? '1' : '0');

                $i++;
            }
            $rows++;
        }
        $fileName = "export_users.xlsx";
        $writer = new Xlsx($spreadsheet);
        $writer->save("storage/".$fileName);

        return redirect(url("storage/".$fileName));
    }


}
