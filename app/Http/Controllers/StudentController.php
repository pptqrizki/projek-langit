<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $Student = Student::all();

        return view('siswa', compact('Student'));
    }

    public function add()
    {
        return view('student.add-siswa');
    }

    public function store(Request $request)
    {
        Student::create([
            'name' => $request->name,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'email' => $request->email,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
        ]);

        return redirect('/siswa');
    }
    
}