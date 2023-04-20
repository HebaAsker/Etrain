<section class="special_cource padding_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <p>popular courses</p>
                    <h2>Special Courses</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($courses as $course)
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        @if (isset($course->image))
                            <img src="{{ asset('images/courses/'. $course->image) }}" class="special-img-height-width" alt="">
                        @else
                            <img src="{{asset('etrain-master/img/special_cource_1.png') }}" alt="">
                        @endif
                        <div class="special_cource_text">
                            @if (Auth::guest()||Auth::user()->role=='student')
                            <a href="{{ route('pages.course_details',$course->id.$course->course_name) }}" class="btn_4">{{ $course->course_category }}</a>
                            @elseif (Auth::user()->role=='teacher')
                            <a href="{{ route('admin.view_courses') }}" class="btn_4">{{ $course->course_category }}</a>
                            @endif
                            <h4>{{ $course->course_fee }}</h4>
                            <a href="{{ route('pages.course_details',$course->id.$course->course_name) }}"><h3>{{ $course->course_name }}</h3></a>
                            <p>{{ $course->description }}</p>
                            <div class="author_info">
                                <div class="author_img">
                                    @if (isset($course->teacher->image))
                                        <img src="{{ asset('images/users/'. $course->teacher->image) }}" alt="">
                                    @else
                                        <img src="{{asset('etrain-master/img/author/profile.png') }}" alt="">
                                    @endif
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">{{ $course->teacher_name }}</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="{{ asset('etrain-master/img/icon/color_star.svg') }}" alt=""></a>
                                        <a href="#"><img src="{{ asset('etrain-master/img/icon/color_star.svg') }}" alt=""></a>
                                        <a href="#"><img src="{{ asset('etrain-master/img/icon/color_star.svg') }}" alt=""></a>
                                        <a href="#"><img src="{{ asset('etrain-master/img/icon/color_star.svg') }}" alt=""></a>
                                        <a href="#"><img src="{{ asset('etrain-master/img/icon/star.svg') }}" alt=""></a>
                                    </div>
                                    <p>{{ $course? $course->getRatingAvg($course->id) : '0' }} Ratings</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
