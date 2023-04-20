<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Dashboard"></x-navbars.navs.auth>
        <!-- End Navbar -->

        <div class="card  mt-2  w-95" style="margin-left: 24px;">
            <div class="card-header ">
                <h4 class="-mb-2">Add Course</h4>
            </div>
                <div class="card-body container-fluid py-0 px-4 ">
                    <form action="{{ route('admin.store_course_outlines')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="row ">
                            <div class="col-md-12 mb-3 ">
                                <select class="form-select" name="course_id">
                                    <option value="select">Select Course</option>
                                    @foreach ($courses as $course)
                                    <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                                    @endforeach

                                  </select>
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <label for="outline">Course Outline</label>
                                <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="outline" :value="old('outline')">
                            </div>
                            <div class="col-md-12 mb-3">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
</x-layout>
