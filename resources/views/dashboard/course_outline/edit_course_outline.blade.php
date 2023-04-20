<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Dashboard"></x-navbars.navs.auth>
        <!-- End Navbar -->

        <div class="card  mt-2 mb-4  w-95" style="margin-left 24px;">
            <div class="card-header ">
                <h4 class="-mb-2">Edit Course</h4>
            </div>
                <div class="card-body container-fluid py-0 px-4 ">
                    <form action="{{ route('admin.update_course_outlines',$course_outline->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row ">
                            <div class="col-md-12 mb-3 ">
                                <select class="form-select" name="course_id">
                                    <option value="{{ $course_outline->id }}">{{ $course_outline->course->course_name }}</option>
                                  </select>
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <label for="outline">Course Outline</label>
                                <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="outline" value="{{ $course_outline->outline }}">
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
