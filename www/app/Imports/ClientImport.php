<?php

namespace App\Imports;

use App\Models\Client;
use Maatwebsite\Excel\Concerns\ToModel;

class ClientImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        if (is_int($row[2])) {
            $row[2] = gmdate('Y-m-d H:i:s', (($row[2] - 25569) * 86400));
        } else {
            $row[2] = date('Y-m-d', strtotime($row[2]));
        }

        return new Client([
            'name'      => $row[1],
            'phone'     => $row[0],
            'birthday'  => $row[2],
        ]);
    }
}
