<!--::review_part start::-->
<section class="testimonial_part section_padding">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <p>tesimonials</p>
                    <h2>Happy Students</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="textimonial_iner owl-carousel">
                    @foreach ($messages as $data)
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-xl-6 d-none d-xl-block">
                                    <div class="testimonial_slider_text ">
                                        <p style="font-size: 24px">{{$data->message}}</p>
                                        <h4>{{ $data->name }}</h4>
                                        <h5> {{ $data->subject }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>
<!--::blog_part end::-->
