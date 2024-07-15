@extends('layout.app')
@section('content')
<div class="container">
    <div class="card mt-3 shadow-sm p-1 bg-white rounded">
        <div class="row">
            <div class="col-md-3">
              <a href="{{route('index')}}" class="btn btn-success"><i class="fa fa-backward"></i> الصفحة الرئيسية</a>
            </div>
          </div>
        <div class="card-body">
          <form action="{{route('update',$data->id)}}" method="POST" >
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name" class="p-1">الالتزام <span style="color: red">*</span></label>
                        <textarea name="name" class="form-control" required id="" cols="30" rows="10">{{old('name',$data->name)}}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="" class="p-1">المكان <span style="color: red">*</span></label>
                    <input type="text" class="form-control"  value="{{old('place',$data->place)}}" name="place">
                </div>
                <div class="col-md-6">
                  <label for="" class="p-1">التاريخ <span style="color: red">*</span></label>
                  <input type="date" name="date" id="date" onchange="getDayName()"  value="{{old('date',$data->date)}}" required class="form-control" id="">
                  @error('date')
                  <span style="color: red">{{$message}}</span>
                  @enderror
                </div>

              <div class="col-md-6">
                  <label for="" class="p-1">اليوم <span style="color: red">*</span></label>
                  <input type="text" id="day" name="day" value="{{old('day',$data->day)}}" disabled  class="form-control">
                  @error('day')
                  <span style="color: red">{{$message}}</span>
                  @enderror
                </div>
  
              <div class="col-md-6">
                <div class="form-group">
                  <label for="to" class="p-1">سعة من</label>
                  <input type="time" name="time_from" value="{{old('time_from',$data->time_from)}}" class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label for="to" class="p-1">سعة الي</label>
                    <input type="time" name="time_to" value="{{old('time_to',$data->time_to)}}" class="form-control">
                  </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                    <label for="note" class="p-1">الملاحظات</label>
                    <input type="text" name="note" value="{{old('note',$data->note)}}" class="form-control">
                  </div>
              </div>
              <div class="col-md-12 mt-4">
                <div class="form-group text-center">
                  <button type="submit" class="btn btn-primary"> <i class="fa fa-pen"></i> تعديل</button>
                </div>
              </div>
              </div>
          </form>
        </div>
      </div>
    
</div>
@endsection
<script>

  function getDayName()
  {
    let dateInput = document.getElementById('date').value;
    let daySelect = document.getElementById('day');
    if (dateInput) {
        var date = new Date(dateInput);

        day = date.toLocaleDateString('ar', { weekday: 'long' });
        console.log(day);
        daySelect.value = day;
        document.getElementById('day').disabled = false;


    } else {
        alert("Please select a date.");
    }
  }
</script>