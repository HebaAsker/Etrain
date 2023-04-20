<!-- banner part start-->
<section class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-xl-6">
                <div class="banner_text">
                    <div class="banner_text_iner">
                        <h5>Every child yearns to learn</h5>
                        <h1>Making Your Childs
                            World Better</h1>
                        <p>Replenish seasons may male hath fruit beast were seas saw you arrie said man beast whales
                            his void unto last session for bite. Set have great you'll male grass yielding yielding
                            man</p>
                            @if (Auth::guest()||Auth::user()->role=='student')
                                <a href="{{ route('pages.courses') }}" class="btn_1">View Course </a>
                            @elseif (Auth::user()->role=='teacher')
                                <a href="{{ route('admin.create_courses') }}" class="btn_1">Add Course </a>
                            @endif
                        <a href="#" class="btn_2">Get Started </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

