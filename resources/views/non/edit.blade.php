@extends('layout.app')
@section('title','بيانات ظباط الادارة')

@section('content')
<div class="container">
    <div class="card mt-3 shadow-sm p-1 bg-white rounded">
        <div class="card-body">
          <form action="{{route('non.update',$data->id)}}" method="POST" >
            @csrf
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="">الاسم</label>
                  <input type="text" name="name" value="{{old('name',$data->name)}}" class="form-control">
                </div>
                @error('name')
                    <span style="color: red">{{$message}}</span>
                    @enderror
              </div>


              <div class="col-md-12">
                <div class="form-group">
                  <label for="">رقم العسكري</label>
                  <input type="text" name="code" value="{{old('code',$data->code)}}" class="form-control">
                </div>
                @error('code')
                    <span style="color: red">{{$message}}</span>
                  @enderror
              </div>

                 <div class="col-md-6 mb-4">
                  <div class="form-group">
                  <label for="">الرتبة</label>

                    <select name="degree_id" class="form-select" id="">
                      <option >اختر الرتبة</option>
                      @foreach ($degrees as $item )
                      <option value="{{$item->id}}" {{$data->degree_id == $item->id ? 'selected' : ''}} >{{$item->name}}</option>
                      @endforeach
                    </select>
                    @error('degree_id')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                  </div>
                </div>

                <div class="col-md-6 mb-4">
                  <div class="form-group">
                  <label for="">القسم او الفرع</label>

                    <select name="department_id" class="form-select" id="">
                      <option >اختر القسم او الفرع</option>
                      @foreach ($departments as $item )
                      <option value="{{$item->id}}" {{$data->department_id == $item->id ? 'selected' : ''}} >{{$item->name}}</option>
                      @endforeach
                    </select>
                    @error('department_id')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                  </div>
                </div>

                
                <div class="col-md-6 mb-4">
                  <div class="form-group">
                    <label for="">السلاح</label>
                    <select name="weapon_name" class="form-select" id="">
                      <option >السلاح</option>
                      <option value="المشاة" {{$data->weapon_name == 'المشاة' ? 'selected' : ''}}>المشاة</option>
                      <option value="الاشارة" {{$data->weapon_name == 'الاشارة' ? 'selected' : ''}}>الاشارة</option>
                      <option value="حرب الكترونية" {{$data->weapon_name == 'حرب الكترونية' ? 'selected' : ''}}>حرب الكترونية</option>
                      <option value="اسلحة و ذخيرة" {{$data->weapon_name == 'اسلحة و ذخيرة' ? 'selected' : ''}}>اسلحة و ذخيرة</option>

                       </select>
                    @error('weapon_name')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                  </div>
                </div>

                <div class="col-md-6 mb-4">
                  <div class="form-group">
                  <label for="">الوظيفة</label>
                  <input type="text" class="form-control" value="{{old('job_name',$data->job_name)}}" name="job_name" >
                  </div> 
                  @error('job_name')
                  <span style="color: red">{{$message}}</span>
                  @enderror
                </div>

                
                <div class="col-md-6 mb-4">
                  <div class="form-group">
                  <label for="">تاريخ الترقية</label>
                  <input type="date" class="form-control" value="{{old('date_upgrade',$data->date_upgrade)}}" name="date_upgrade" >
                  </div> 
                  @error('date_upgrade')
                  <span style="color: red">{{$message}}</span>
                  @enderror
                </div>


                <div class="col-md-6 mb-4">
                  <div class="form-group">
                  <label for="">رقم الهاتف</label>
                  <input type="text" class="form-control" value="{{old('phone',$data->phone)}}" name="phone" >
                  </div> 
                  @error('phone')
                  <span style="color: red">{{$message}}</span>
                  @enderror
                </div>                
                <div class="col-md-6 mb-4">
                  <div class="form-group">
                  <label for="">المحافظة</label>
                  <input type="text" class="form-control" value="{{old('city',$data->city)}}" name="city" >
                  </div> 
                  @error('city')
                  <span style="color: red">{{$message}}</span>
                  @enderror
                </div>

                <div class="col-md-6 mb-4">
                  <div class="form-group">
                    <label for="">التمام</label>
                    <select name="status" class="form-select" id="">
                      <option value="exist" {{$data->status == 'exist' ?'selected' : ''}}>موجود</option>
                      <option value="sick_leave" {{$data->status == 'sick_leave' ?'selected' : ''}}>اجازة مرضية</option>
                      <option value="vacation" {{$data->status == 'vacation' ?'selected' : ''}}>راحة</option>
                      <option value="mission" {{$data->status == 'mission' ?'selected' : ''}}>مامورية</option>
                      <option value="mission_out" {{$data->status == 'mission_out' ?'selected' : ''}} >مهمة تدريبية</option>
                       </select>
                    @error('status')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">الملاحظات</label>
                  <input type="text" name="note" value="{{old('note',$data->note)}}" class="form-control">
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
