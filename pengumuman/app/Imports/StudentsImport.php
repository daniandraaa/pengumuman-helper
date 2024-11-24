<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentsImport implements ToModel
{
    public function model(array $row)
    {
        return new Student([
            'nim' => $row[0], // Kolom pertama dalam Excel
            'status_lulus' => filter_var($row[1], FILTER_VALIDATE_BOOLEAN), // Kolom kedua
        ]);
    }
}
