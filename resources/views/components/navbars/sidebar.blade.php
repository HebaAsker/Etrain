@props(['activePage'])

<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 d-flex text-wrap align-items-center" href=" /dashboard">
            <img src="{{ asset('dash_assets') }}/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-2 font-weight-bold text-white">Admin Dashboard</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('/')? 'active bg-gradient-primary': '' }} "
                    href="/">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">home</i>
                    </div>
                    <span class="nav-link-text ms-1">Website Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('dashboard')? 'active bg-gradient-primary': '' }} "
                    href="/dashboard">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('courses')? 'active bg-gradient-primary': '' }}" href="{{ route('admin.view_courses') }}">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">book</i>
                  </div>
                  <span class="nav-link-text ms-1">Courses</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('courses/create')? 'active bg-gradient-primary': '' }}" href="{{ route('admin.create_courses') }}" >
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">add_circle_outline</i>
                  </div>
                  <span class="nav-link-text ms-1">Add Course</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white {{  Request::is('courses-outline')? 'active bg-gradient-primary': ''}}" href="{{ route('admin.view_course_outlines') }}">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">menu</i>
                  </div>
                  <span class="nav-link-text ms-1">Courses Outlines</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('courses-outline/create')? 'active bg-gradient-primary': '' }} " href="{{ route('admin.create_course_outlines') }}">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">shopping_cart</i>
                  </div>
                  <span class="nav-link-text ms-1">Add Courses Outlines</span>
                </a>
              </li>
        </ul>
    </div>

</aside>
