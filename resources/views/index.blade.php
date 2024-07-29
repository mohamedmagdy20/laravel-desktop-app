@extends('layout.app')

@section('title','السيد رئيس اركان المشاة')
@section('css')
<style>
    .wrimagecard{	
	margin-top: 0;
    margin-bottom: 1.5rem;
    text-align: left;
    position: relative;
    background: #fff;
    box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
    border-radius: 4px;
    transition: all 0.3s ease;
}
.wrimagecard .fa{
	position: relative;
    font-size: 70px;
}
.wrimagecard-topimage_header{
padding: 20px;
}
a.wrimagecard:hover, .wrimagecard-topimage:hover {
    box-shadow: 2px 4px 8px 0px rgba(46,61,73,0.2);
}
.wrimagecard-topimage a {
    width: 100%;
    height: 100%;
    display: block;
}
.wrimagecard-topimage_title {
    padding: 20px 24px;
    height: 80px;
    padding-bottom: 0.75rem;
    position: relative;
}
.wrimagecard-topimage a {
    border-bottom: none;
    text-decoration: none;
    color: #525c65;
    transition: color 0.3s ease;
}
.badge {
    display: inline-block;
    min-width: 10px;
    padding: 3px 7px;
    font-size: 25px;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    background-color: #777;
    border-radius: 10px;
}
.pull-right {
    float: right !important;
}

</style>
@endsection
@section('content')
<div class="row mt-5">
    <div class="row">
     <div class="col-md-4 col-sm-4">
        <div class="wrimagecard wrimagecard-topimage">
              <a href="{{route('officers.index')}}">
              <div class="wrimagecard-topimage_header" style="background-color:rgba(0, 0, 0, 0.1) ">
                <center><i class="fa-solid fa-person-military-pointing" style="font-size: 50px; color: #3369e8" ></i></center>
              </div>
              <div class="wrimagecard-topimage_title">
                <h4>ضباط
                <div class="pull-right badge">{{$officerCount}}</div></h4>
              </div>
            </a>
        </div>
    </div>

    <div class="col-md-4 col-sm-4">
        <div class="wrimagecard wrimagecard-topimage">
              <a href="{{route('non.index')}}">
              <div class="wrimagecard-topimage_header" style="background-color:rgba(0, 0, 0, 0.1) ">
                <center><i class="fa-solid fa-person-military-pointing" style="font-size: 50px; color: #d50f25" ></i></center>
              </div>
              <div class="wrimagecard-topimage_title">
                <h4>ضباط صف
                <div class="pull-right badge">{{$non}}</div></h4>
              </div>
            </a>
        </div>
    </div>

    <div class="col-md-4 col-sm-4">
        <div class="wrimagecard wrimagecard-topimage">
              <a href="#">
              <div class="wrimagecard-topimage_header" style="background-color:rgba(0, 0, 0, 0.1) ">
                <center><i class="fa-solid fa-user" style="font-size: 50px; color: #16A085" ></i></center>
              </div>
              <div class="wrimagecard-topimage_title">
                <h4> جنود
                <div class="pull-right badge">0</div></h4>
              </div>
            </a>
        </div>
    </div>
        
</div>
@endsection