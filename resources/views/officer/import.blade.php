@extends('layout.app')
@section('content')
<div class="container">
    <div class="card mt-3 shadow-sm p-1 bg-white rounded">
        <div class="card-body">
          <form action="{{route('officers.import')}}" method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="row">


                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">اضف اسم</label>
                  <input type="text" name="name" class="form-control">
                  @error('name')
                      <span style="color: red">{{$message}}</span>
                  @enderror
                  </div>
                </div>

                <div class="col-md-12 mb-3 mt-3 text-center">
                  <button type="submit" class="btn btn-primary">حفظ</button>
                </div>

                
               
              </div>
          </form>
        </div>
      </div>
    
</div>
@endsection
