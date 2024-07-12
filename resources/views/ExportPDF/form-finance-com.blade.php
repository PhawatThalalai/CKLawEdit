<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <div>
        <table>
            <tr>
                <th style="text-align: left;"><h2 style="font-size: 20px;">เลขที่สัญญา {{$customer->CON_NO}}</h2></th>
                <th ></th>
                <th style="text-align: center;"><h2 style="font-size: 20px;">วันที่ {{formatDateThaiLong(date('Y-m-d'))}}</h2></th>
            </tr>
            <tr>
                
                <th colspan="3" style="text-align: center;"><img class="img-profile rounded-circle"src="{{ asset('dist/img/leasingLogo1.jpg') }}"style="height: 70px; width: 70px; "></th>
            </tr>
            <tr>
               
                <th colspan="3" style="text-align: center;"><h1 style="font-size: 30px;">ใบรับเงิน</h1> </th>
            </tr>
            {{-- <tr>
                <br>
                <th ></th>
                <th ></th>
                <th colspan="3" style="text-align: right;"><h2 style="font-size: 20px;">วันที่ {{formatDateThaiLong(date('Y-m-d'))}}</h2></th>
            </tr> --}}
            <br>
            
            
            <tr>
                <th style="text-align: left;"><h2 style="font-size: 20px;"> โจทก์ {{$customer->plaintiff}}</h2></th>
            </tr>
            <tr>
                <th style="text-align: left;"><h2 style="font-size: 20px;"> จำเลย {{$customer->prefix}}{{$customer->name}} {{$customer->surname}}</h2></th>
            </tr>
            <tr>
                <th style="text-align: left;"><h2 style="font-size: 20px;"> ศาล {{$customer->CusToTri->tribunal != NULL ? $customer->CusToTri->tribunal : '-'}}</h2></th>
                <th></th>
                <th style="text-align: left;"><h2 style="font-size: 20px;"> หมายเลขดำที่ {{@$customer->CusToTri->black_no != NULL ? @$customer->CusToTri->black_no : '-'}}</h2></th>
            </tr>
           
            <tr>
                
                <th style="text-align: left;"><h2 style="font-size: 20px;"><b> สำนักงานบังคับคดีจังหวัด</b>  {{@$customer->CusToExe->exe_office != NULL ? $customer->CusToExe->exe_office : '-' }}</h2></th>
                <th></th>
                <th style="text-align: left;"><h2 style="font-size: 20px;"><b> หมายเลขแดงที่</b> {{@$customer->CusToTri->red_no != NULL ? $customer->CusToTri->red_no : '-'}}</h2></th>
            </tr>
        </table>
        <br>
        <br>
        <br>
        <table style="border: 1px solid black; ">
            <tr>
                <th style="text-align: center; border: 1px solid black; "><h2 style="font-size: 20px;">วันที่ทำรายการ</h2></th>
                <th style="text-align: center; border: 1px solid black; "><h2 style="font-size: 20px;">รายการ</h2></th>
                <th style="text-align: center; border: 1px solid black; "><h2 style="font-size: 20px;">ยอดเงิน (บาท)</h2></th>
            </tr>
            <tr>
                <th style="text-align: left; border: 1px solid black; "><h2 style="font-size: 20px;">{{formatDateThaiLong(@$data->pay_date)}}</h2></th>
                <th style="text-align: left; border: 1px solid black; "><h2 style="font-size: 20px;">ค่างวด</h2></th>
                <th style="text-align: left; border: 1px solid black; "><h2 style="font-size: 20px;">{{number_format($data->pay_amount)}}</h2></th>
            </tr>
            <tr>
                <th ></th>
                <th style="text-align: left; border: 1px solid black; "><h2 style="font-size: 20px;">ยอดหนี้คงเหลือ **รวมดอกเบี้ย</h2></th>
                <th style="text-align: left; border: 1px solid black; "><h2 style="font-size: 20px;">{{ $textFin }} </h2></th>
            </tr>
           
        </table>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <table>
            <tr>
                <th style="text-align: left;"><h2 style="font-size: 20px;"> โทร. 074-262220-3</h2></th>
                <th></th>
                <th style="text-align: left;"><h2 style="font-size: 20px;"> ลงชื่อ.....................ผู้รับเงิน</h2></th>
            </tr>
        </table>
       

    </div>
</body>

</html>
