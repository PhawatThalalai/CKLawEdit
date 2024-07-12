<?php

namespace App\Exports;

use App\Models\LawExe;
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


class exportDataExe implements FromCollection, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */

    public function collection()
    {
        $Fdate = request('fdate');
        $Tdate = request('tdate');

        if($Fdate == null || $Tdate == null){
            $customer = LawExe::
            where('status_tribunal' ,'Y')
            ->where('status_exe','Y')
            ->get();
            
        }else{
            $customer = LawExe::
            whereBetween('exe_date',[$Fdate,$Tdate])
            ->where('status_tribunal' ,'Y')
            ->where('status_exe','Y')
            ->get();
        }
        
        $customer = $customer->map(function ($post )use ($customer) {
            $post->totalSum = $post->ViewExeToFin->where('status','อนุมัติ')->sum('totalsum');
            $post->type_com = @$post->ViewExeToCom->type_com;
            $post->date_com = @$post->ViewExeToCom->date_com;
            $post->date_com_start = @$post->ViewExeToCom->date_com_start;
            $post->blackout_date = @$post->ViewExeToCom->blackout_date;
            $post->stop_date = @$post->ViewExeToCom->stop_date;
            $post->pay_com = @$post->ViewExeToCom->pay_com;
            $post->pay_first = @$post->ViewExeToCom->pay_first;
            $post->installments = @$post->ViewExeToCom->installments;
            $post->period = @$post->ViewExeToCom->period;
            $post->pay_first = @$post->ViewExeToCom->pay_first;
            $post->type_interest = @$post->ViewExeToCom->type_interest;
            return $post;
        });
       
         // $data = DB::table('Hp_ConCus')->get();
        return collect($customer) ;
    }
    public function headings(): array
    {

        $Fdate = request('fdate');
        $Tdate = request('tdate');
       
        return [
               
            ['จากวันที่ : '.date('d-m-Y', strtotime($Fdate)).'  ถึงวันที่ : '.date('d-m-Y', strtotime($Tdate)),'',''],
            [
                "เลขที่สัญญา",
                "คำนำหน้า",
                "ชื่อ",
                "นามสกุล",
                "เบอร์โทร",
                "สถานะ",
                "วันที่สืบทรัพย์",
                "ผลสืบทรัพย์",
                "ทรัพย์ที่พบเป็น",
                "วันที่คัดโฉนด",
                "ราคาประเมิณ",
                "ผู้ถือกรรมสิทธิ์",
                "ผู้รับจำนอง",
                "ตั้งเรื่องยึดทรัพย์วันที่",
                "รายงานการยึดทรัพย์วันที่",
                "สำนักงานบังคับคดีจังหวัด",
                "ทรัพย์ที่ยึด",
                "โฉนดเลขที่",
                "ที่ตามโฉนดที่ดิน",
                "ผู้ถือกรรมสิทธิ์",
                "รายจำนอง",
                "ราคาที่ดินประมาณ",
                "สภาพที่ดิน",
                "ราคาที่ดินเป็นเงิน",
                "หมายเหตุ",
                "ค่าใช้จ่ายในคดี",
                "สถานะปิดบัญชี",
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
            @$customer->date_investigate_first,  
            @$customer->investigate_result,  
            @$customer->property_found,  
            @$customer->date_deed_certificate,  
            @$customer->estimated_price,  
            @$customer->owner,  
            @$customer->mortgagee,  
            @$customer->date_confiscation,  
            @$customer->date_report,  
            @$customer->exe_office,  
            @$customer->property,  
            @$customer->deed_no,  
            @$customer->land_deed,  
            @$customer->owner_deed,  
            @$customer->mortgage_income,  
            @$customer->some_land_price,  
            @$customer->land_con,  
            @$customer->land_price,  
            @$customer->note_3,  
            @$customer->totalSum,
            @$customer->status_close,
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

    
}
