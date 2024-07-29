<?php

namespace App\Http\Controllers;

use App\Models\Degree;
use App\Models\Department;
use App\Models\Officer;
use Illuminate\Http\Request;

class OfficerControlller extends Controller
{
    //
    protected $model;
    public function __construct(Officer $model)
    {
       $this->model = $model;
    }
    public function index()
    {
        return view('officer.index',['data'=>$this->model->all()]);
    }

    public function delete($id)
    {
        $data = $this->model->findOrFail($id)->delete();
        return redirect()->back()->with('success','تم الحذف بنجاح');
    }

    public function create()
    {
        $departments = Department::all();
        $degrees = Degree::where('type',1)->get();
        #endregion
        return view('officer.create',compact('departments','degrees'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'department_id'=>'required',
            'degree_id'=>'required',
            'job_name'=>'required',
            'date_upgrade'=>'nullable',
            'religion'=>'nullable',
            'city'=>'nullable',
            'phone'=>'nullable',
            'weapon_name'=>'required',
            'status'=>'required',
            'vaction_note'=>'nullable',
            'note'=>'nullable'
        ]);

        $data = $request->all();
        $this->model->create($data);
        return redirect()->route('officers.index')->with('success','تم الحفظ');
    }
}
