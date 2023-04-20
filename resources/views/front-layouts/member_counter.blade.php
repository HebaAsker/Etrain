    <!-- member_counter counter start -->
    <section class="member_counter">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{ $users? $users->countTeachers() : '0' }}</span>
                        <h4>All Teachers</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">

                        <span class="counter">{{ $users? $users->countStudents() : '0' }}</span>
                        <h4> All Students</h4>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </section>
