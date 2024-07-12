<?php

namespace App\Http\Controllers;

use App\Models\ComFinance;
use App\Models\Customer;
use App\Models\Execution_debt;
use App\Models\Finance;
use App\Models\Tribunal_debt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Facade;

use Barryvdh\DomPDF\Facade\Pdf as domPDF;


use PDF;

class DomPdfController extends Controller
{
	public function getPdf(Request $request)
	{

		// $data = [
		//         'title' => 'welcome',
		//         'date' => date('d/m/Y'),    
		// ];

		
		$view = view('ExportPDF.form-finance-pdf');
		$html = $view->render();
		$pdf = new PDF();
		$pdf::SetTitle('test');
		$pdf::AddPage("P", 'A4');
		$pdf::SetMargins(5, 5, 5, 0);
		$pdf::SetFont('thsarabun', '', 12, '', true);
		$pdf::SetAutoPageBreak(true, 20);

		// return View::make('ExportPDF.form-finance-pdf')->render();

		// $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('ExportPDF.form-finance-pdf',$data);
		// return $pdf->download('example.pdf');

		// return  $pdf;

	}

	public function index(Request $request)
	{

		// if ($request->type == 'Datacourt') { // View ชั้นศาล

		//     // $data = Tribunal_debt::where('id', $id);

		//     return view('DataLawsuit.section-court.view');
		// }
		
		
	}

	public function create()
	{
		//
	}

	public function store(Request $request)
	{
		//


	}


	public function show(Request $request, $id)
	{
		
		if ($request->type == 'exportPdf') {
			
			$data = Finance::where('id', $id)->first();
			$textFin = IntconvertThai($data->totalsum);
			
		
			$customer = Customer::where('id',$data->cus_id)->first();
			
			$view = \View::make('ExportPDF.form-finance-pdf',compact('data','customer','textFin'));
			$html = $view->render();
			
			
			$pdf = new PDF();
			$pdf::SetTitle('ใบขอนุมัติเลขที่'.$data->bil_no);
			$pdf::AddPage("P", 'A4');
			$pdf::SetMargins(5, 5, 5, 0);
			$pdf::SetFont('thsarabun', '', 12, '', true);
			$pdf::SetAutoPageBreak(true, 20);

			$pdf::WriteHTML($html, true, false, true, false, '');
            $pdf::Output('report.pdf');
		}
		if ($request->type == 'exportComFin') {
			
			$data = ComFinance::where('id', $id)->first();
			$textFin = IntconvertThai($data->pay_amount);
			
			$customer = Customer::where('id',$data->cus_id)->first();
			$tri_debt = Tribunal_debt::where('id',$data->cus_id)->orderBy('id','DESC')->first();
			$exe_debt = Execution_debt::where('id',$data->cus_id)->orderBy('id','DESC')->first();
			
			$view = \View::make('ExportPDF.form-finance-com',compact('data','customer','textFin','tri_debt','exe_debt'));
			$html = $view->render();
			
			
			$pdf = new PDF();
			$pdf::SetTitle('ใบขอนุมัติเลขที่'.$data->bil_no);
			$pdf::AddPage("L", 'A4');
			$pdf::SetMargins(5, 5, 5, 0);
			$pdf::SetFont('thsarabun', '', 12, '', true);
			$pdf::SetAutoPageBreak(true, 20);

			$pdf::WriteHTML($html, true, false, true, false, '');
            $pdf::Output('report.pdf');
		}
		
	}


	public function edit(Request $request, $id)
	{
		//
	}


	public function update(Request $request, $id)
	{
		//
	}


	public function destroy($id)
	{
		//
	}
}
