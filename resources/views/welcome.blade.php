@extends('layout.app')
@section('content')


 <div class="container">
  <div class="card mt-3 shadow-sm p-1 bg-white rounded">
    <div class="card-body">
      <form action="{{route('index')}}" method="GET">
        <div class="row justify-content-center align-content-center">
        

          <div class="col-md-3">
            <div class="form-group">
              <label for="to">تاريخ الي </label>
              <input type="date" name="date_to" class="form-control">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="from">تاريخ من </label>
              <input type="date" name="date_from" class="form-control">
            </div>
          </div>
          <div class="col-md-2 mt-4">
            <div class="form-group">
              <button type="submit" class="btn btn-info"> <i class="fa fa-search"></i> بحث</button>
              <a href="{{route('index')}}" class="btn btn-primary"><i class="fa fa-filter"></i></a>

            </div>
          </div>
          </div>
      </form>
    </div>
  </div>
 </div>
<div class="container-fluid">
  <!--end breadcrumb-->
    <div class="card mt-3 shadow-sm p-3 mb-5 bg-white rounded">
      <div class="row">
        <div class="col-md-2">
          <a href="{{route('create')}}" class="btn btn-success"><i class="fa fa-plus"></i> اضافة التزام</a>
        </div>
      </div>
      <div class="card-body">
      
        <div class="table-responsive">
          <table id="example2" dir="rtl" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>م</th>
                <th>التاريخ</th>
                <th>اليوم</th>
                <th>الالتزام</th>
                <th>المكان</th>
                <th>السعة</th>

                <th>الملاحظات</th>
                <th>العمليات</th> <!-- Added column for actions -->
              </tr>
            </thead>
            <tbody>
              
             @foreach ( $data as $index => $item )
                <tr>
                  <td>{{$index+1}}</td>
                  <td>{{$item->date}}</td>
                  <td>{{$item->day}}</td>
                  <td>{{$item->name}}</td>
                  <td>{{$item->place}}</td>
                  <td>{{$item->time_from}} : {{$item->time_to}}</td>
                  <td>{{$item->note}}</td>
                  <td>
                    <a href="{{route('edit',$item->id)}}" class="btn btn-info btn-sm" ><i class="fa-solid fa-pen"></i></a> <!-- Update icon -->
                    <a href="{{route('delete',$item->id)}}" class="btn btn-danger btn-sm deletebtn" ><i class="fa fa-trash"></i></a> <!-- Delete icon -->												
                  </td>
                </tr>
              @endforeach
            </tbody>
            
          </table>

          <div class="d-flex justify-content-center">
            {!! $data->links() !!}
        </div>
        </div>
      </div>
  
  
  </div>
</div>
 
@endsection

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>