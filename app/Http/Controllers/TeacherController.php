<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function index(){
        $teacher = DB::table('teacher')->get();

        return view('index',['teacher' => $teacher]);
    }

    public function add(){
        return view('add');
    }

    public function store(Request $request){
        DB::table('teacher')->insert([
            'teacher_name' => $request->teacher_name,
            'gender' => $request->gender,
            'phone_num' => $request->phone_num,
            'age' => $request->age,
            'position' => $request->position,
            'address' => $request->address
        ]);

        return redirect('/teacher');
    }

    public function delete(Request $request){
        DB::table('teacher')->where('teacher_id', $request->id)->delete();

        return redirect('/teacher');
    }

    public function edit($id){
        $teacher = DB::table('teacher')->where('teacher_id', $id)->get();

        return view('edit', ['teacher' => $teacher]);
    }

    public function update(Request $request){
        DB::table('teacher')->where('teacher_id', $request->teacher_id)->update([
            'teacher_name' => $request->teacher_name,
            'gender' => $request->gender,
            'phone_num' => $request->phone_num,
            'age' => $request->age,
            'position' => $request->position,
            'address' => $request->address
        ]);

        return redirect('/teacher');
    }
}
