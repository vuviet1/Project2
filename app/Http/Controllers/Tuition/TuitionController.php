<?php

namespace App\Http\Controllers\Tuition;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TuitionController extends Controller
{
    public $data = [];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $this->data['title'] = 'Quản lý học phí';
        $this->data['majors'] = DB::select('SELECT * FROM majors');
        $this->data['course'] = DB::select('SELECT * FROM course');
        $this->data['class'] = DB::select('SELECT * FROM class');
        $this->data['education_program'] = DB::select('SELECT * FROM education_program');

        $this->data['student'] = DB::select('SELECT * FROM student INNER JOIN class ON student.id_class = class.id_class');
        return view('Clients/Tuition/tuition', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $this->data['title'] = 'Thu phí';
        $this->data['student'] = DB::select('SELECT * FROM student');
        $this->data['class'] = DB::select('SELECT * FROM class');
        $this->data['tuition'] = DB::select('SELECT * FROM tuition
    INNER JOIN student ON tuition.id_student = student.id_student
    INNER JOIN class ON student.id_class = class.id_class
    ');
        return view('Clients/Tuition/add', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
