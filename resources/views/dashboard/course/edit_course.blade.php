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
                    <form action="{{ route('admin.update_courses',$course->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row ">
                            <div class="col-md-6 mb-3 ">
                                <label for="course_name">Course Name</label>
                                <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="course_name" value="{{ $course->course_name }}">
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <label for="course_category">Course Category</label>
                                <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="course_category" value="{{ $course->course_category }}">
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <label for="description">Course Description</label>
                                <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="description" value="{{ $course->description }}">
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <label for="teacher_name">Teacher Name</label>
                                <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="teacher_name" value="{{ $course->teacher_name }}">
                            </div>
                            <div class="col-md-6  mb-3">
                                <label for="course_fee">Course Fee</label>
                                <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="course_fee" value="{{ $course->course_fee }}">
                            </div>
                            <div class="col-md-6  mb-3">
                                <label for="available_seats">Available Seats</label>
                                <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="available_seats" value="{{ $course->available_seats }}">
                            </div>
                            <div class="col-md-12  mb-3">
                                <label for="schedule">Schedule</label>
                                <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="schedule" value="{{ $course->schedule }}">
                            </div>
                            <div class="col-md-12  mb-3">
                                <label for="image">Upload Image</label>
                                <input type="file"  class="form-control border border-gray-200 rounded p-2 w-full" name="image" value="{{ $course->image }}">
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
</x-layout>
