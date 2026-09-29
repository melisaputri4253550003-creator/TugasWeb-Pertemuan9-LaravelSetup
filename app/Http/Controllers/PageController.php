<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function students()
    {
        $students = Student::all();

        return view('pages.students', compact('students'));
    }

    public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
        ]);

        Student::create([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
        ]);

        return redirect('/students');
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);

        return view('pages.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
        ]);

        $student = Student::findOrFail($id);

        $student->update([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
        ]);

        return redirect('/students');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);

        $student->delete();

        return redirect('/students');
    }
}