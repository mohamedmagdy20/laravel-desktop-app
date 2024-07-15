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
          <form action="{{route('store')}}" method="POST" >
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name" class="p-1">الالتزام <span style="color: red">*</span></label>
                        <textarea name="name" class="form-control name" required id="name" cols="30" rows="10">{{old('name')}}</textarea>
                        @error('name')
                        <span style="color: red">{{$message}}</span>
                        @enderror
                      </div>
                </div>
                <div class="col-md-12">
                    <label for="" class="p-1">المكان <span style="color: red">*</span></label>
                    <input type="text" class="form-control" value="{{old('place')}}" required name="place">
                </div>
                <div class="col-md-6">
                    <label for="" class="p-1">التاريخ <span style="color: red">*</span></label>
                    <input type="date" name="date" id="date" onchange="getDayName()" value="{{old('date')}}" required class="form-control" id="">
                    @error('date')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                  </div>

                <div class="col-md-6">
                    <label for="" class="p-1">اليوم <span style="color: red">*</span></label>
                    <input type="text" id="day" name="day" value="{{old('day')}}" disabled class="form-control">
                    @error('day')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                  </div>
    
              <div class="col-md-6">
                <div class="form-group">
                  <label for="to" class="p-1">سعة من</label>
                  <input type="time" name="time_from" {{old('time_from')}} class="form-control">
                  @error('time_from')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label for="to" class="p-1">سعة الي</label>
                    <input type="time" name="time_to" value="{{old('time_to')}}" class="form-control">
                    @error('time_to')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                  </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                    <label for="note" class="p-1">الملاحظات</label>
                    <input type="text" name="note" value="{{old('note')}}" class="form-control">
                    @error('note')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                  </div>
              </div>
              <div class="col-md-12 mt-4">
                <div class="form-group text-center">
                  <button type="submit" class="btn btn-primary"> <i class="fa fa-plus"></i> تسجيل</button>
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