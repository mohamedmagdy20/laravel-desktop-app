@extends('layout.app')
@section('title','بيانات ضباط الصف الادارة')
@section('css')
<link rel="stylesheet" href="{{asset('datatable/css/dataTables.bootstrap5.min.css')}}">
<style>
  .dataTables_filter {
    display: none;
}
</style>
@endsection
@section('content')


 <div class="container">
  <div class="card mt-3 shadow-sm p-1 bg-white rounded">
    <div class="row">
      <div class="col-md-3">
        <a href="{{route('non.create')}}" class="btn btn-info"><i class="fa fa-plus"></i> اضافة سجل</a>
        {{-- <a href="{{route('officers.import.view')}}" class="btn btn-success"><i class="fa fa-sheet-plastic"></i> اضافة ملف</a> --}}
      
      </div>
    </div>
    <div class="card-body">
      {{-- <form action="{{route('index')}}" method="GET" dir="rtl">
        <div class="row justify-content-center align-content-center">
        

          
          <div class="col-md-3">
            <div class="form-group">
              <label for="from">تاريخ من </label>
              <input type="date" name="date_from" value="{{old('date_from',request()->date_from)}}" class="form-control">
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label for="to">تاريخ الي </label>
              <input type="date" name="date_to" data-date="" data-date-format="DD MMMM YYYY" value="{{old('date_to',request()->date_to)}}" class="form-control">
            </div>
          </div>
          <div class="col-md-2 mt-4">
            <div class="form-group">
              <button type="submit" class="btn btn-info" style="color: #fff"> <i class="fa fa-search"></i> بحث</button>
              <a href="{{route('index')}}" class="btn btn-primary"><i class="fa fa-filter"></i></a>

            </div>
          </div>
          </div>
      </form> --}}
      <div class="form-group">
        <label for="search-input">بحث عام</label>
        <input type="text" id="search-input" placeholder="بحث عام" class="form-control">
      
      </div>
      </div>
  </div>
 </div>
<div class="container-fluid">
  <!--end breadcrumb-->
    <div class="card mt-3 shadow-sm  bg-white rounded">
   
      <div class="card-body">
      
        <div  dir="rtl" class="table-responsive rounded-2 shadow" >
          <table id="Datatable"  class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>م</th>
                <th >الرقم العسكري</th>
                <th style="padding-left: 60px ; padding-right: 60px">الاسم</th>
                <th style="padding-left: 60px ; padding-right: 60px">الرتبة</th>
                <th style="padding-left: 60px ; padding-right: 60px">الوظيفة</th>
                <th style="padding-left: 60px ; padding-right: 60px">القسم</th>
                <th style="padding-left: 60px ; padding-right: 60px">السلاح</th>
                <th style="padding-left: 60px ; padding-right: 60px">الهاتف</th>
                <th style="padding-left: 60px ; padding-right: 60px">المحافظة</th>
                <th style="padding-left: 60px ; padding-right: 60px">تاريخ الترقية</th>
                <th style="padding-left: 60px ; padding-right: 60px">التمام</th>
                <th style="padding-left: 60px ; padding-right: 60px">الملاحظات</th>
                <th >العمليات</th> <!-- Added column for actions -->
              </tr>
            </thead>
            <tbody>
              
             @foreach ( $data as $index => $item )
             <tr>
              <td>{{$index+1}}</td>
              <td>{{$item->code}}</td>

              <td  style="width:200 !important;">{{$item->name}}</td>
              <td>{{optional($item->degree)->name}}</td>
              <td>{{$item->job_name}}</td>
              <td>{{optional($item->department)->name}}</td>
              <td>{{$item->weapon_name}}</td>
              <td style="width: 200px !important;">{{$item->phone}}</td>
              <td>{{$item->city}}</td>
              <td>{{$item->date_upgrade}}</td>
              @if ($item->status == 'exist')
              <td>موجود</td>
              @elseif ($item->status == 'vacation')
              <td>راحة</td>
              @elseif ($item->status == 'sick_leave')
              <td>اجازة مرضية</td>
              @elseif ($item->status == 'mission')
              <td>مامورية</td>
              @elseif($item->status == 'mission_out')
              <td>مهمة تدريبية</td>
              @endif
              <td>{{$item->note}}</td>
              <td>
                <a href="{{route('non.edit',$item->id)}}" class="btn btn-secondary btn-sm" ><i class="fa-solid fa-pen"></i></a> <!-- Update icon -->
                <a href="{{route('non.delete',$item->id)}}" class="btn btn-danger btn-sm deletebtn" ><i class="fa fa-trash"></i></a> <!-- Delete icon -->												
              </td>
            </tr>
              @endforeach
            </tbody>
            
          </table>

          {{-- <div class="d-flex justify-content-center">
            {!! $data->links() !!}
        </div> --}}
        </div>
      </div>
  
  
  </div>
</div>
 
@endsection



@section('js')
<!-- Data table plugin-->
<script src="{{asset('datatable/js/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('datatable/js/jquery.dataTables.min.js')}}"></script>

<script type="text/javascript">
    $('#Datatable').DataTable({
     language: {
           info: 'عرض صفحة _PAGE_ من _PAGES_',
           infoEmpty: 'لا يوجد بيانات متاحة',
           infoFiltered: '(filtered from _MAX_ total records)',
           lengthMenu: 'عرض _MENU_ بيانات كل صفحة',
           zeroRecords: 'لم يتم ايجاد بيانات ',
           search: "بحث عام "
       }
    });

    oTable = $('#Datatable').DataTable();   //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel said
    $('#search-input').keyup(function(){
          oTable.search($(this).val()).draw() ;
    })
</script>
@endsection