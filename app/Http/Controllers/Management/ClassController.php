<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Management\ClassModel;

class ClassController extends Controller
{
    public $data = [];

    private $class;
    public function __construct(){
        $this->class = new ClassModel();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $this->data['title'] = 'Danh sách các lớp học';

        $this->data['classList'] = $this->class->getAllClass();

        return view('Clients/Management/Class/class', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $this->data['title'] = 'Trang thêm thông tin lớp học';
        $this->data['majorsList'] = $this->class->getAllMajors();
        $this->data['courseList'] = $this->class->getAllCourse();
        $this->data['education_programList'] = $this->class->getAllEdu();

        return view('Clients/Management/Class/add', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nameClass' => 'required|min:4',
            'original_fee' => 'required|numeric'
//            Xet truong hop da ton tai
//        'original_fee' => 'required|numeric|unique:class'
        ], [
            'nameClass.required' => 'Tên lớp bắt buộc phải nhập',
            'nameClass.min' => 'Tên lớp phải từ :min ký tự trở nên',
            'original_fee.required' => 'Số tiền bắt buộc phải nhập',
            'original_fee.number' => 'Số tiền phải đúng định dạng'
//            'original_fee.unique' => 'Da ton tai tren he thong',
        ]);
        $dataInsert = [
            $request->nameClass,
            $request->original_fee,
            $request->id_edu,
            $request->id_majors,
            $request->id_course,
            date('Y-m-d H:i:s')
        ];
        $this->data['addClasses'] = $this->class->addClass($dataInsert);
        return redirect()->route('class.index')->with('msg', 'Them lop thanh cong');
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
        $this->data['title'] = 'Trang sửa thông tin lớp học';
        $this->data['majorsList'] = $this->class->getAllMajors();
        $this->data['courseList'] = $this->class->getAllCourse();
        $this->data['education_programList'] = $this->class->getAllEdu();

        if (!empty($id)){
            $this->data['classDetals'] = $this->class->getDetails($id);
            if (!empty($this->data['classDetals'][0])){
                $this->data['classDetals'] = $this->data['classDetals'][0];
            }else{
                return redirect()->route('class.index')->with('msg', 'Thông tin lớp không tồn tại');
            }
        }else{
            return redirect()->route('class.index')->with('msg', 'Liên kết không tồn tại');
        }

        return view('Clients/Management/Class/edit', $this->data);

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
