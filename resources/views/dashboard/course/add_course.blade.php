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
                    <form action="{{ route('admin.store_courses')}}" method="POST" enctype="multipart/form-data">
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
                            <div class="col-md-6 mb-3 ">
                                <label for="course_name">Course Name</label>
                                <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="course_name" :value="old('course_name')">
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <label for="course_category">Course Category</label>
                                <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="course_category" :value="old('course_category')">
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <label for="description">Course Description</label>
                                <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="description" :value="old('description')">
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <label for="teacher_name">Teacher Name</label>
                                <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="teacher_name" :value="old('teacher_name')">
                            </div>
                            <div class="col-md-6  mb-3">
                                <label for="course_fee">Course Fee</label>
                                <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="course_fee" :value="old('course_fee')">
                            </div>
                            <div class="col-md-6  mb-3">
                                <label for="available_seats">Available Seats</label>
                                <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="available_seats" :value="old('available_seats')">
                            </div>
                            <div class="col-md-12  mb-3">
                                <label for="schedule">Schedule</label>
                                <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="schedule" :value="old('schedule')">
                            </div>
                            <div class="col-md-12  mb-3">
                                <label for="image">Upload Image</label>
                                <input type="file"  class="form-control border border-gray-200 rounded p-2 w-full" name="image">
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
