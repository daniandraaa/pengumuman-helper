<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        return view('input-nim');
    }

    public function check(Request $request)
    {
        $request->validate([
            'nim' => 'required|string',
        ]);

        $student = Student::where('nim', $request->nim)->first();

        if ($student) {
            return view('status', [
                'nama' => $student->nama,
                'status' => $student->status_lulus
            ]);
        } else {
            return view('status', ['status' => null]);
        }
    }
}
