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
                    <input type="date" name="date" value="{{old('date',$data->date)}}"  class="form-control" id="">
                </div>

                <div class="col-md-6">
                    <label for="" class="p-1">اليوم <span style="color: red">*</span></label>
                    <select name="day" class="form-select"  id="">
                        <option {{old('day',$data->day == 'السبت' ? 'selected' : '')}} value="السبت">السبت</option>
                        <option {{old('day',$data->day == 'الاحد' ? 'selected' : '')}} value="الاحد">الاحد</option>
                        <option {{old('day',$data->day == 'الاثنين' ? 'selected' : '')}} value="الاثنين">الاثنين</option>
                        <option {{old('day',$data->day == 'الثلاثاء' ? 'selected' : '')}} value="الثلاثاء">الثلاثاء</option>
                        <option {{old('day',$data->day == 'الاربعاء' ? 'selected' : '')}} value="الاربعاء">الاربعاء</option>
                        <option {{old('day',$data->day == 'الخميس' ? 'selected' : '')}} value="الخميس">الخميس</option>
                        <option {{old('day',$data->day == 'الجمعة' ? 'selected' : '')}} value="الجمعة">الجمعة</option>
                    </select>
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
                  <button type="submit" class="btn btn-primary"> <i class="fa fa-plus"></i> تسجيل</button>
                </div>
              </div>
              </div>
          </form>
        </div>
      </div>
    
</div>
@endsection