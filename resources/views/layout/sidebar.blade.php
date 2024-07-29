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
        <a href="{{route('index')}}">
          <i style="margin-right:8px" class="fa fa-home"></i>
          <span class="nav-item">الرئيسية </span>
        </a>
        <span class="tooltip">الرئيسية</span>
      </li>
  
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
        <a href="{{route('non.index')}}">
          <i style="margin-right:8px" class="fa-solid fa-person-military-rifle"></i>
          <span class="nav-item">صف ظباط</span>
        </a>
        <span class="tooltip">ضباط</span>
      </li>
  
      
  
  
    </ul>
  </div>
  