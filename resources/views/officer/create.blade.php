@extends('layout.app')
@section('content')
<div class="container">
    <div class="card mt-3 shadow-sm p-1 bg-white rounded">
        <div class="card-body">
          <form action="{{route('officers.store')}}" method="POST" >
            @csrf
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="">الاسم</label>
                  <input type="text" name="name" class="form-control">
                </div>
                @error('name')
                    <span style="color: red">{{$message}}</span>
                    @enderror
              </div>


              <div class="col-md-6">
                <div class="form-group">
                  <label for="">رقم العسكري</label>
                  <input type="text" name="code" class="form-control">
                </div>
                @error('code')
                    <span style="color: red">{{$message}}</span>
                  @enderror
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="">رقم الاقدمية</label>
                  <input type="text" name="senority" class="form-control">
                </div>
                @error('senority')
                    <span style="color: red">{{$message}}</span>
                  @enderror
              </div>
                 <div class="col-md-6 mb-4">
                  <div class="form-group">
                  <label for="">الرتبة</label>

                    <select name="degree_id" class="form-select" id="">
                      <option >اختر الرتبة</option>
                      @foreach ($degrees as $item )
                      <option value="{{$item->id}}" >{{$item->name}}</option>
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
                      <option value="{{$item->id}}" >{{$item->name}}</option>
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
                      <option value="المشاة">المشاة</option>
                      <option value="الاشارة">الاشارة</option>
                      <option value="حرب الكترونية">حرب الكترونية</option>
                      <option value="اسلحة و ذخيرة">اسلحة و ذخيرة</option>

                       </select>
                    @error('weapon_name')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                  </div>
                </div>

                <div class="col-md-6 mb-4">
                  <div class="form-group">
                  <label for="">الوظيفة</label>
                  <input type="text" class="form-control" name="job_name" >
                  </div> 
                  @error('job_name')
                  <span style="color: red">{{$message}}</span>
                  @enderror
                </div>

                
                <div class="col-md-6 mb-4">
                  <div class="form-group">
                  <label for="">تاريخ الترقية</label>
                  <input type="date" class="form-control" name="date_upgrade" >
                  </div> 
                  @error('date_upgrade')
                  <span style="color: red">{{$message}}</span>
                  @enderror
                </div>


                <div class="col-md-6 mb-4">
                  <div class="form-group">
                  <label for="">رقم الهاتف</label>
                  <input type="text" class="form-control" name="phone" >
                  </div> 
                  @error('phone')
                  <span style="color: red">{{$message}}</span>
                  @enderror
                </div>                
                <div class="col-md-6 mb-4">
                  <div class="form-group">
                  <label for="">المحافظة</label>
                  <input type="text" class="form-control" name="city" >
                  </div> 
                  @error('city')
                  <span style="color: red">{{$message}}</span>
                  @enderror
                </div>

                <div class="col-md-6 mb-4">
                  <div class="form-group">
                    <label for="">التمام</label>
                    <select name="status" class="form-select" id="">
                      <option value="exist">موجود</option>
                      <option value="sick_leave">اجازة مرضية</option>
                      <option value="vacation">راحة</option>
                      <option value="mission">مامورية</option>
                      <option value="mission_out">مهمة تدريبية</option>
                       </select>
                    @error('status')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">الملاحظات</label>
                  <input type="text" name="note" class="form-control">
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
