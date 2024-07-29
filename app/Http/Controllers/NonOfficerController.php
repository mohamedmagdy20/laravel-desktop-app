<?php

namespace App\Http\Controllers;

use App\Models\Degree;
use App\Models\Department;
use App\Models\NonOfficer;
use Illuminate\Http\Request;

class NonOfficerController extends Controller
{
        //
        protected $model;
        public function __construct(NonOfficer $model)
        {
           $this->model = $model;
        }
        public function index()
        {
            return view('non.index',['data'=>$this->model->all()]);
        }
    
        public function delete($id)
        {
            $data = $this->model->findOrFail($id)->delete();
            return redirect()->back()->with('success','تم الحذف بنجاح');
        }
    
        public function create()
        {
            $departments = Department::all();
            $degrees = Degree::where('type',2)->get();
            #endregion
            return view('non.create',compact('departments','degrees'));
        }
    
        public function store(Request $request)
        {
            $request->validate([
                'code'=>'required',
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
            return redirect()->route('non.index')->with('success','تم الحفظ');
        }
    
       
    
        public function edit($id)
        {
            return view('non.edit',['data'=>NonOfficer::findOrFail($id),'degrees'=>Degree::where('type',2)->get(),'departments'=>Department::all()]);
        }
    
        public function update(Request $request,$id)
        {
            $request->validate([
                'code'=>'required',
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
            $off = $this->model->findOrFail($id)->update($data);
            return redirect()->route('non.index'); 
       
        }
    
}
