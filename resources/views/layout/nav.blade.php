<nav class="navbar navbar-expand-lg navbar-light bg-dark shadow position-fixed w-100" style="z-index: 100; padding-top: 0.2rem !important; padding-bottom: 0.2rem !important">
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
            <a class=" btn btn-outline-light shadow  rounded" style="font-size: 30px" >@yield('title')</a>
          </li>
        </ul>
        <img src="{{asset('image/logo2.png')}}" alt="" width="150" height="80" class="d-inline-block align-text-top">
       
      </div>
    </div>
</nav>