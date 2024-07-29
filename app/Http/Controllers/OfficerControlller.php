<?php

namespace App\Http\Controllers;

use App\Imports\OfficerImport;
use App\Models\Degree;
use App\Models\Department;
use App\Models\Officer;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

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
            'code'=>'required',
            'senority'=>'required',
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

    public function importView()
    {return view('officer.import');}
    public function importExcel(Request $request)
    {
        
        // $request->validate([
        //     'spreedsheet'=>'required|file|mimes:xlsx,xls'
        // ]);
        // if($request->hasFile('spreedsheet'))
        // {
        //     try{
        //         DB::beginTransaction();
        //         Excel::import(new OfficerImport, request()->file('spreedsheet'));
        //         DB::commit();
        //         return redirect()->back()->with('success','تم الاضافة بنجاح');
        //     }catch(Exception $e)
        //     {
        //         DB::rollBack();
        //         return redirect()->back()->with('error',$e->getMessage());
        //     }
        // }else{
        //     return redirect()->back()->with('error','حذث خطا');
        // }
        $data = $request->all();
        Department::create($data);
        return redirect()->back();

    }

    public function edit($id)
    {
        return view('officer.edit',['data'=>Officer::findOrFail($id),'degrees'=>Degree::where('type',1)->get(),'departments'=>Department::all()]);
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'code'=>'required',
            'senority'=>'required',
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
        return redirect()->route('officers.index'); 
   
    }

}
