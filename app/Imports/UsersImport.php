<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;

// use Maatwebsite\Excel\Concerns\WithHeadingRow;

// class UsersImport implements ToModel,WithHeadingRow

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // return new User([
        //     //
        // ]);

     

            return new User([
                'serial_no'     => $row['serial_no'],
                        'date'    => $row['date'],
                        'name' => $row['name'],
                        'number1' => $row['number1'],
                        'number2' => $row['number2'],
                        'number3' => $row['number3'],
                        'number4' => $row['number4'],
                        'time' => $row['time'],
                        'number5' => $row['number5'],
                        'number6' => $row['number6'],
                      

                    ]);

     


//         dd($row);

//         return new User([

//             'serial_no'     => $row[0],
//         'date'    => $row[1],
//         'name' => $row[2],
//         'number1' => $row[3],
//         'number2' => $row[4],
//         'number3' => $row[5],
//         'number4' => $row[6],
//         'time' => $row[7],
// 'number5' => $row[8],
// 'number6' => $row[9],




        // ]);




    }
}
