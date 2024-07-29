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
    @yield('css')
    @vite('resources/js/app.js')
  
</head>
<body class="bg-light">
@include('layout.nav')
@include('layout.sidebar')
<div class="main-content">
  <div class="container-fluid">
    @yield('content')

  </div>
</div>
    <script>
       var $ = jQuery = require("jquery")
    </script>
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

@yield('js')

</body>
</html>