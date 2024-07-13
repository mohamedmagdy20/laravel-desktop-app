<?php

namespace App\Http\Controllers;

use App\Models\Commitment;
use Illuminate\Http\Request;

class CommitmentController extends Controller
{
    //
    public function index(Request $request)
    {
        $data = Commitment::filter($request->all())->latest()->paginate(7);
        return view('welcome',['data'=>$data]);
    }

    public function create()
    {
        return view('create');
    }

    public function edit($id)
    {
        $data = Commitment::find($id);
        return view('edit',['data'=>$data]);
    }

    public function delete($id)
    {
        $data = Commitment::find($id);
        $data->delete();
        return redirect()->back()->with('success','تم الحذف بنجاج');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'day'=>'required',
            'date'=>'required',
            'place'=>'required'
        ]);
        $data = $request->all();
        Commitment::create($data);
        return redirect()->route('index')->with('success','تم الاضافة بنجاح');

    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'day'=>'required',
            'date'=>'required',
            'place'=>'required'
        ]);
        $data = $request->all();
        $commit = Commitment::find($id);
        $commit->update($data);
        return redirect()->route('index')->with('success','تم التعديل بنجاح');

    }
}
