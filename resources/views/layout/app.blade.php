<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>التزامات رئيس اركان المشاه</title>
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.5.2-web/css/all.min.css')}}">
  
    @vite('resources/js/app.js')
  
</head>
<body class="bg-light">
  <nav class="navbar navbar-expand-lg navbar-light bg-dark shadow">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{asset('image/logo1.jpg')}}" alt="" width="100" height="80" class="d-inline-block align-text-top">
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
    @yield('content')
    <script src="{{asset('bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('bootstrap/sweetalert.js')}}"></script>
    <script src="{{asset('fontawesome-free-6.5.2-web/js/all.min.js')}}"></script>
   
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