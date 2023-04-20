<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Dashboard"></x-navbars.navs.auth>
        <!-- End Navbar -->

        <div class="card mt-2 mb-4  w-95" style="margin-left: 24px;">
            <div class="card-header bg-primary mb-3">
                <h4 class="-mb-2 text-white">Courses Page</h4>
            </div>
            <div class="card-body container-fluid py-0 px-4 mt-3" style="text-align: center">
                <table class="table table-bordered ">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Course Name</th>
                            <th scope="col">Course Outline</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($course_outline as $course )
                <tr>
                    <td>{{ $course->course->course_name }}</td>
                    <td>{{ $course->outline}}</td>
                    <td>
                       <a href="{{ route('admin.edit_course_outlines',$course->course_id.$course->course_name) }}" class="btn  btn-info">Edit</a>
                       <a href="{{ route('admin.delete_course_outlines',$course->course_id) }}" class="btn  btn-danger">Delete</a>

                    </td>
                </tr>
                @endforeach

                    </tbody>
                </table>
            </div>
        </div>
</x-layout>
