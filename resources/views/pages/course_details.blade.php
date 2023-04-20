@include('front-layouts.header')
    <!-- Header part end-->

    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Course Details</h2>
                            <p>Home<span>/</span>Course Details</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--================ Start Course Details Area =================-->
    <section class="course_details_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 course_details_left">
                    <div class="main_image">
                        <img class="img-fluid" src="{{ asset('images/courses/'. $course->image) }}" alt="">
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title_top">Objectives</h4>
                        <div class="content">
                            {{$course->description}}
                            <br>
                        </div>


                        <h4 class="title">Course Outline</h4>
                        <div class="content">
                            <ul class="course_list">
                                @foreach ($course_outlines as $course_outline)
                                    <li class="justify-content-between align-items-center d-flex">
                                        <p>{{ $course_outline->outline }}</p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 right-contents">
                    <div class="sidebar_top">
                        <ul>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Trainer’s Name</p>
                                    <span class="color">{{ $course->teacher_name }}</span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Course Fee </p>
                                    <span>{{ $course->course_fee }}</span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Available Seats </p>
                                    <span>{{ $course->available_seats }}</span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Schedule </p>
                                    <span>{{ $course->schedule }}</span>
                                </a>
                            </li>

                        </ul>
                        <a href="#" class="btn_1 d-block">Enroll the course</a>
                    </div>

                    <h4 class="title">Reviews</h4>
                    <div class="content">
                        <form action="{{ route('course.review',$course->id.$course->name) }}" method="post" role="form">
                            @csrf
                            <div class="review-top row pt-40">
                                <div class="col-lg-12">
                                    <input type="hidden" name="course_id" value="{{ $course->id }}">
                                    <h6 class="mb-15">Provide Your Rating</h6>
                                    <div class="d-flex flex-row reviews justify-content-between">
                                        <span>Quality</span>
                                        <div class="rate">
                                            <input type="radio" id="star5" name="star_rating" value="5" />
                                            <label for="star5" title="text">5 stars</label>
                                            <input type="radio" id="star4" name="star_rating" value="4" />
                                            <label for="star4" title="text">4 stars</label>
                                            <input type="radio" id="star3" name="star_rating" value="3" />
                                            <label for="star3" title="text">3 stars</label>
                                            <input type="radio" id="star2" name="star_rating" value="2" />
                                            <label for="star2" title="0text">2 stars</label>
                                            <input type="radio" id="star1" name="star_rating" value="1" />
                                            <label for="star1" title="text">1 star</label>
                                        </div>
                                        <span>Outstanding</span>
                                    </div>
                                </div>
                            </div>
                            <div class="feedeback">
                                <h6>Your Feedback</h6>
                                <textarea name="comment" class="form-control" cols="10" rows="10"></textarea>
                            <div class="mt-10 text-right">
                                <button class="btn_1">Submit</button>
                            </div>
                        </form>
                    </div>
                        <div class="comments-area mb-30">
                            @foreach ($reviews as $review)
                            <div class="comment-list">
                                <div class="single-comment single-reviews justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            @if (isset($review->user->image))
                                                <img src="{{asset('images/users/'. $review->user->image) }}" alt="">
                                            @else
                                                <img src="{{asset('etrain-master/img/author/profile.png') }}" alt="">
                                            @endif
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">{{ $review->user->name ?? 'Unknown'}}</a>
                                            </h5>
                                            <div class="rating">
                                                @for ($i=1; $i<=$review->star_rating; $i++)
                                                    <i class="fa fa-star checked"></i>
                                                @endfor
                                                @if ($review->star_rating<5)
                                                    @for ($i=5; $i>$review->star_rating; $i--)
                                                        <i class="fa fa-star" style="color: #e6e6e6;"></i>
                                                    @endfor
                                                @endif
                                            </div>
                                            <p class="comment">
                                                {{$review->comment}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Course Details Area =================-->

    <!-- footer part start-->
    @include('front-layouts.footer')
    <!-- footer part end-->
