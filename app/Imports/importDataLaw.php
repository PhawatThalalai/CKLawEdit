<?php

namespace App\Imports;

use App\Models\Customer;
use App\Models\tbl_customer;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Hash;

class importDataLaw implements ToCollection
{    
    // public $ids = [];
    public function collection(Collection $rows)
    {
        $array = [];
        foreach($rows as $item){
            dump($item['con_no']);
            $array[]=[
                'CON_NO' => $item['con_no'],
            ];
        }
        dd($array);
        // return 123 ;
        // return $rows;
    }
    // public function model(array $row){
    //     return $row;
    // }

    // public function model(array $row)
    // {
       
    //     $data = new Customer([
    //         "CON_NO" => $row['con_no'],
    //         "prefix" => $row['prefix'],
    //         "name" => $row['name'],
    //         "surname" => $row['surname'],
    //         "status_tribunal" => $row['status_tribunal'],
    //         "status_com" => $row['status_com'],
    //         "status_exe" => $row['status_exe'],
    //         "status_close" => $row['status_close'],
    //     ]);
    //     $data->save();
    //     $this->ids[] = $data->id;
        
    //      return $row;
    // }
    

}
