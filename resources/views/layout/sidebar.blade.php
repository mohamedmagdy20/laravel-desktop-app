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
        <a href="{{route('officers.index')}}">
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
  