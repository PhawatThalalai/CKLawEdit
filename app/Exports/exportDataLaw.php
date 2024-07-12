<?php

namespace App\Exports;

use App\Models\LawCus;
use App\Models\tbl_customer;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Http\Controllers\customercontroller;
use App\Models\Customer;


//หัวข้อ
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

//ปรับขนาด
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

//สี
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeExport;
use Maatwebsite\Excel\Events\AfterSheet;

use App\TB_PactContracts\Pact_Contracts;
use App\TB_DataCus\Data_Customer;
use App\TB_Constant\TB_Branchs;
use DB;


use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;


class exportDataLaw implements WithColumnFormatting,FromCollection, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */

    public function collection()
    {
        $Fdate = request('fdate');
        $Tdate = request('tdate');

        if ($Fdate == null || $Tdate == null) {
            $customer =LawCus::
                where('status_tribunal', 'Y')
                ->where('status_exe', 'N')
                ->get();
        } else {
            $customer = LawCus::
                whereBetween('date_tribunal', [$Fdate, $Tdate])
                ->where('status_tribunal', 'Y')
                ->where('status_exe', 'N')
                ->get();
        }
      
        // $test = [];
        // $qqq = [];
        // foreach( $customer as $key => $item){
        //     $test = array('sum'=> 123) ;
        //     // array_push($qqq,$item);
        //     $qqq = array_push($qqq,123);
        // }
        
        // dd($qqq);
        // $totalSum = $customer->ViewCusToFin; 
        // dd( $totalSum);
        $customer = $customer->map(function ($post )use ($customer) {
            $post->totalSum = $post->ViewCusToFin->where('status','อนุมัติ')->sum('totalsum');
            $post->type_com = @$post->ViewCusToCom->type_com;
            $post->date_com = @$post->ViewCusToCom->date_com;
            $post->date_com_start = @$post->ViewCusToCom->date_com_start;
            $post->blackout_date = @$post->ViewCusToCom->blackout_date;
            $post->stop_date = @$post->ViewCusToCom->stop_date;
            $post->pay_com = @$post->ViewCusToCom->pay_com;
            $post->pay_first = @$post->ViewCusToCom->pay_first;
            $post->installments = @$post->ViewCusToCom->installments;
            $post->period = @$post->ViewCusToCom->period;
            $post->pay_first = @$post->ViewCusToCom->pay_first;
            $post->type_interest = @$post->ViewCusToCom->type_interest;
            return $post;
        });
       

        // $data = DB::table('Hp_ConCus')->get();
        return collect($customer);
    }
    public function headings(): array
    {

        $Fdate = request('fdate');
        $Tdate = request('tdate');

        return [

            ['จากวันที่ : ' . date('d-m-Y', strtotime($Fdate)) . '  ถึงวันที่ : ' . date('d-m-Y', strtotime($Tdate)), '', ''],
            [
                "เลขที่สัญญา",
                "คำนำหน้า",
                "ชื่อ",
                "นามสกุล",
                "เบอร์โทร",
                "สถานะ",
                "เลขคดีดำ",
                "เลขคดีแดง",
                "วันที่ศาลรับฟ้อง",
                "ทุนทรัพย์ฟ้อง",
                "ศาลที่รับฟ้อง",
                "ประเภทคดี",
                "วันที่สืบพยาน",
                "สถานะ",
                "วันเลื่อนนัด",
                "ยอดหนี้",
                "วันส่งคำบังคับ",
                "วันที่ออกหมายตั้งเจ้าพนง.บังคับคดี",
                "ค่าใช้จ่ายในคดี",
                "ประเภทประนอมหนี้",
                "ยอดประนอมหนี้",
                "วันที่ประนอม",
                "วันที่ชำระงวดแรก",
                "ยอดต้นเงิน",
                "ค่างวด",
                "ระยะเวลาผ่อน",
                "ดอกเบี้ย %",
                "ประเภทดอกเบี้ย",
                "ยอดเงินก้อนแรก",
            ],
        ];
    }
    public function map($customer): array
    {
        return [

            @$customer->CON_NO,
            @$customer->prefix,
            @$customer->name,
            @$customer->surname,
            @$customer->PhoneNum,
            @$customer->status,
            @$customer->black_no,
            @$customer->red_no,
            \Carbon\Carbon::parse(@$customer->date_tribunal)->format('Y-m-d'),
            @$customer->capital_sue,
            @$customer->tribunal,
            @$customer->case_type,
            \Carbon\Carbon::parse(@$customer->date_witness)->format('Y-m-d'),
            @$customer->witness_status,
            @$customer->date_postponed,
            @$customer->debt_balance,
            @$customer->sub_date,
            @$customer->date_app,
            @$customer->totalSum,
            @$customer->type_com,
            @$customer->pay_com,
            @$customer->date_com_start,
            @$customer->date_com,
            @$customer->principal,
            @$customer->period,
            @$customer->installments,
            @$customer->interest,
            @$customer->type_interest,
            @$customer->pay_first,
        ];
    }

    public function columnFormats(): array
    {
        return [
            'G' => NumberFormat::FORMAT_DATE_DDMMYYYY,
            'K' => NumberFormat::FORMAT_DATE_DDMMYYYY,
        ];
    }
}
