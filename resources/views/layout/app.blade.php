<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>التزامات رئيس اركان المشاه</title>
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.5.2-web/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('sidebar/style.css')}}">
    @vite('resources/js/app.js')
  
</head>
<body class="bg-light">
  <nav class="navbar navbar-expand-lg navbar-light bg-dark shadow">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{asset('image/logo1.jpg')}}" alt="" width="100" height="80" id="logo-main" class="d-inline-block align-text-top">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav m-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class=" btn btn-outline-light shadow  rounded" style="font-size: 30px" >إلتزامات السيد رئيس أركان المشاة</a>
          </li>
        </ul>
        <img src="{{asset('image/logo2.png')}}" alt="" width="150" height="80" class="d-inline-block align-text-top">
       
      </div>
    </div>
</nav>
<div class="sidebar active">
  <div class="top">
    {{-- <div class="logo">
      <i class="fa fa-cab"></i>
      <span>لوحة التحكم</span>
    </div> --}}
    <i class="fa fa-bars" onclick="toggleNav()" id="btn"></i>

  </div>
  <div class="user">
    {{-- <img src="{{asset('image/logo1.jpg')}}" class="user-img" alt=""> --}}
    {{-- <div>
      <p class="bold">Client</p>
      <p>admin</p>
    </div> --}}
  </div>
  <ul>
    

    <li>
      <a href="{{route('commitment')}}">
        <i style="margin-right:8px" class="fa fa-list"></i>
        <span class="nav-item">الالتزامات </span>
      </a>
      <span class="tooltip">الالتزامات</span>
    </li>

    <li>
      <a href="#">
        <i style="margin-right:8px" class="fa-solid fa-person-military-pointing"></i>
        <span class="nav-item">ضباط</span>
      </a>
      <span class="tooltip">ضباط</span>
    </li>

    <li>
      <a href="#">
        <i class="fa fa-box"></i>
        <span class="nav-item">Products</span>
      </a>
      <span class="tooltip">Products</span>
    </li>

    <li>
      <a href="#">
        <i class="fa fa-orcid"></i>
        <span class="nav-item">Order</span>
      </a>
      <span class="tooltip">Order</span>
    </li>


    <li>
      <a href="#">
        <i class="fa fa-person"></i>
        <span class="nav-item">Customer</span>
      </a>
      <span class="tooltip">Customer</span>
    </li>
  </ul>
</div>

<div class="main-content">
  <div class="container">
    @yield('content')

  </div>
</div>
    <script src="{{asset('bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('bootstrap/sweetalert.js')}}"></script>
    <script src="{{asset('fontawesome-free-6.5.2-web/js/all.min.js')}}"></script>
    <script>
      function toggleNav(){
        // let btn = document.querySelector("#btn");
        let sidebar = document.querySelector(".sidebar");
        sidebar.classList.toggle('active') 
        
      }
    </script>
   <script>
    document.querySelectorAll('.deletebtn').forEach(function(button) {
    button.addEventListener('click', function(e) {
    e.preventDefault();
    const url = this.getAttribute('href');
    Swal.fire({
      title: "هل انت متاكد من حذف البيانات",
      text: "لم يتم استرجاع هذه البيانات مره اخري",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "حذف",
      cancelButtonText: "الغاء",
      closeOnConfirm: false,
      closeOnCancel: false
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire("عملية ناحجة", "تم عملية الحذف بنجاح", "success");
        window.location.href = url;
      } else {
        Swal.fire("الغاء العملية", "", "error");
      }
    });
  });
});
 </script>


</body>
</html>