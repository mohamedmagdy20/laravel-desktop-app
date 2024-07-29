<?php

namespace App\Http\Controllers;

use App\Models\Commitment;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class CommitmentController extends Controller
{
    //
    public $model;
    public function __construct(Commitment $model){
        $this->model = $model;
    }
    public function index(Request $request)
    {
        $today = Carbon::today();
        $todayCommitment = $this->model->whereDate('date',$today)->get();
        $data  = $this->model->whereDate('date','!=',$today)->filter($request->all())->orderBy('date','asc')->get();
        $allData = $todayCommitment->merge($data);
        $final = $this->paginate($allData,7,$request->page);
        // $data = Commitment::filter($request->all())->latest()->paginate(7);
        return view('welcome',['data'=>$final,'today'=>Carbon::today()->format('Y-m-d')]);
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
    private function paginate(Collection $items, $perPage = 15, $page = null, $options = [])
    {
        $page = $page ?: (LengthAwarePaginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
