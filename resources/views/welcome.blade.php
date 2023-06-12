@extends('layouts.landing.master')
@section('content')
    <!-- home start -->
    <section class="bg-home bg-gradient" id="about">
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-sm-6">
                            <div class="home-title">
                                <h5 class="mb-3 text-white-50">Discover Volunfis Today</h5>
                                <h2 class="mb-4 text-white">Volunfis</h2>
                                <p class="text-white-50 home-desc font-16 mb-5">Volunfis is a platform that provides
                                    information about community service, competition and research for student in Telkom
                                    University. This platform is a policy from the lecturers of Telkom University to provide
                                    access for students to experience the opportunity to participate in becoming active and
                                    outstanding students in off-campus activities.</p>
                                <div class="watch-video mt-5">
                                    <a href="#" class="btn btn-custom me-4">About Volunfis<i
                                            class="mdi mdi-chevron-right ms-1"></i></a>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-1 col-sm-6">
                            <div class="home-img mo-mt-20">
                                <img src="{{ asset('landing') }}/images/home-1.png" alt=""
                                    class="img-fluid mx-auto d-block">
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                </div>
                <!-- end container-fluid -->
            </div>
        </div>
    </section>
    <!-- home end -->

    <!-- features start -->
    <section class="features" id="activity">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-pills nav-justified features-tab mb-5" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" id="pills-code-tab" data-bs-toggle="pill" href="#pills-code" role="tab"
                                aria-controls="pills-code" aria-selected="true">
                                <div class="clearfix">
                                    <div class="features-icon float-end">
                                        <h1><i class="pe-7s-notebook tab-icon"></i></h1>
                                    </div>
                                    <div class="d-none d-lg-block me-4">
                                        <h5 class="tab-title">Community Service</h5>
                                        <p>Details</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-customize-tab" data-bs-toggle="pill"
                                href="#pills-customize" role="tab" aria-controls="pills-customize"
                                aria-selected="false">
                                <div class="clearfix">
                                    <div class="features-icon float-end">
                                        <h1><i class="pe-7s-edit tab-icon"></i></h1>
                                    </div>
                                    <div class="d-none d-lg-block me-4">
                                        <h5 class="tab-title">Research</h5>
                                        <p>Details</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-support-tab" data-bs-toggle="pill" href="#pills-support"
                                role="tab" aria-controls="pills-support" aria-selected="false">
                                <div class="features-icon float-end">
                                    <h1><i class="pe-7s-headphones tab-icon"></i></h1>
                                </div>
                                <div class="d-none d-lg-block me-4">
                                    <h5 class="tab-title">Competition</h5>
                                    <p>Details</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade" id="pills-code" role="tabpanel" aria-labelledby="pills-code-tab">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-4 col-sm-6">
                                    <div>
                                        <img src="{{ asset('landing') }}/images/home-2.png" alt=""
                                            class="img-fluid mx-auto d-block">
                                    </div>
                                </div>
                                <div class="col-lg-6 offset-lg-1">
                                    <div>
                                        <div class="feature-icon mb-4">
                                            <h1><i class="pe-7s-notebook text-primary"></i>
                                                <h1>
                                        </div>
                                        <h5 class="mb-3">Community Service</h5>
                                        <p class="text-muted">Community service is unpaid work performed by a person or
                                            group of people for the benefit and betterment of their community without any
                                            form of compensation. Community service can be distinct from volunteering, since
                                            it is not always performed on a voluntary basis and may be compulsory.</p>
                                        <div class="mt-4">
                                            <a href="#" class="btn btn-custom">Activity List <i
                                                    class="mdi mdi-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <!-- end row -->
                        </div>
                        <div class="tab-pane fades how active" id="pills-customize" role="tabpanel"
                            aria-labelledby="pills-customize-tab">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-4 col-sm-6">
                                    <div>
                                        <img src="{{ asset('landing') }}/images/home-1.png" alt=""
                                            class="img-fluid mx-auto d-block">
                                    </div>
                                </div>
                                <div class="col-lg-6 offset-lg-1">
                                    <div>
                                        <div class="feature-icon mb-4">
                                            <h1><i class="pe-7s-edit text-primary"></i></h1>
                                        </div>
                                        <h5 class="mb-3">Research</h5>
                                        <p class="text-muted">Research is defined as the creation of new knowledge and/or
                                            the use of existing knowledge in a new and creative way so as to generate new
                                            concepts, methodologies and understandings. This could include synthesis and
                                            analysis of previous research to the extent that it leads to new and creative
                                            outcomes.</p>
                                        <div class="mt-4">
                                            <a href="#" class="btn btn-custom">Activity List<i
                                                    class="mdi mdi-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                        <div class="tab-pane fade" id="pills-support" role="tabpanel"
                            aria-labelledby="pills-support-tab">

                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-4 col-sm-6">
                                    <div>
                                        <img src="{{ asset('landing') }}/images/hero-img.png" alt=""
                                            class="img-fluid mx-auto d-block">
                                    </div>
                                </div>
                                <div class="col-lg-6 offset-lg-1">
                                    <div>
                                        <div class="feature-icon mb-4">
                                            <i class="pe-7s-headphones h1 text-primary"></i>
                                        </div>
                                        <h5 class="mb-3">Competition</h5>
                                        <p class="text-muted">
                                            Competitions typically challenge students to demonstrate their proficiency in
                                            academic subjects at a level above that of a typical classroom setting or
                                            standardized testing.</p>
                                        <div class="mt-4">
                                            <a href="#" class="btn btn-custom">Activity List<i
                                                    class="mdi mdi-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <!-- end row -->
                        </div>
                    </div>
                    <!-- end tab-content -->
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </section>
    <!-- features end -->

    <!-- Testimoni start -->
    <section class="section bg-light" id="testimoni">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center mb-4">
                        <h6 class="text-primary small-title">Testimoni</h6>
                        <h4>What our Users Says</h4>
                        <p class="text-muted">At solmen va esser far uniform grammatica.</p>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="testi-box p-4 bg-white mt-4 text-center">
                        <p class="text-muted mb-4">" The designer of this theme delivered a quality product. I am not a
                            front-end developer and I hate when the theme I download has glitches or needs minor tweaks
                            here and there. This worked for my needs just out of the boxes. Also, it is fast and
                            elegant."</p>
                        <div class="testi-img mb-4">
                            <img src="{{ asset('landing') }}/images/testi/img-1.png" alt=""
                                class="rounded-circle img-thumbnail">
                        </div>
                        <p class="text-muted mb-1"> - Volunfis User</p>
                        <h5 class="font-18">Xpanta</h5>

                        <div class="testi-icon">
                            <i class="mdi mdi-format-quote-open display-2"></i>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testi-box p-4 bg-white mt-4 text-center">
                        <p class="text-muted mb-4">" Extremely well designed and the documentation is very well done.
                            Super happy with the purchase and definitely recommend this! "</p>
                        <div class="testi-img mb-4">
                            <img src="{{ asset('landing') }}/images/testi/img-2.png" alt=""
                                class="rounded-circle img-thumbnail">
                        </div>
                        <p class="text-muted mb-1"> - Volunfis User</p>
                        <h5 class="font-18">G_Sam</h5>

                        <div class="testi-icon">
                            <i class="mdi mdi-format-quote-open display-2"></i>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testi-box p-4 bg-white mt-4 text-center">
                        <p class="text-muted mb-4">" We used this theme to save some design time but... wow it has
                            everything you didn't realize you would need later. I highly recommend this landing to get
                            your web design headed in the right direction quickly. "</p>
                        <div class="testi-img mb-4">
                            <img src="{{ asset('landing') }}/images/testi/img-3.png" alt=""
                                class="rounded-circle img-thumbnail">
                        </div>
                        <p class="text-muted mb-1"> - Volunfis User</p>
                        <h5 class="font-18">Isaacfab</h5>

                        <div class="testi-icon">
                            <i class="mdi mdi-format-quote-open display-2"></i>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </section>
    <!-- Testimoni end -->

    <!-- counter start -->
    <section class="section bg-gradient">
        <div class="container-fluid">
            <div class="row" id="counter">
                <div class="col-lg-3 col-sm-6">
                    <div class="text-center p-3">
                        <div class="counter-icon text-white-50 mb-4">
                            <i class="pe-7s-add-user display-4"></i>
                        </div>
                        <div class="counter-content">
                            <h5 class="counter-name text-white">Knowledge exploration and abilities in the field.</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="text-center p-3">
                        <div class="counter-icon text-white-50 mb-4">
                            <i class="pe-7s-cart display-4"></i>
                        </div>
                        <div class="counter-content">
                            <h5 class="counter-name text-white">Gain knowledge directly from partners quality.</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="text-center p-3">
                        <div class="counter-icon text-white-50 mb-4">
                            <i class="pe-7s-smile display-4"></i>
                        </div>
                        <div class="counter-content">
                            <h5 class="counter-name text-white">Grab the golden opportunity become a student achievement!
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="text-center p-3">
                        <div class="counter-icon text-white-50 mb-4">
                            <i class="pe-7s-medal display-4"></i>
                        </div>
                        <div class="counter-content">
                            <h5 class="counter-name text-white">Adding experience students and improve student concern to
                                the social environment.</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- counter end -->

    <!-- contact start -->
    <section class="section" id="faq">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center mb-5">
                        <h4>FAQ?</h4>
                        <p class="text-muted">Frequently Asked Question</p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="card mb-3 col-lg-6">
                    <div class="card-header" id="headingOne">
                        <h5 class="m-0 position-relative">
                            <a class="custom-accordion-title text-reset d-block"
                                data-bs-toggle="collapse" href="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                Q. How to join the program? <i
                                    class="mdi mdi-chevron-down accordion-arrow"></i>
                            </a>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse"
                        aria-labelledby="headingOne"
                        data-bs-parent="#custom-accordion-one">
                        <div class="card-body">
                            Yup, the marketplace license allows you to use this theme
                            in any end products.
                            For more information on licenses, please refere <a
                                href="https://themeforest.net/licenses/standard" target="_blank">here</a>.
                        </div>
                    </div>
                </div>
                <div class="card mb-3 col-lg-6">
                    <div class="card-header" id="headingTwo">
                        <h5 class="m-0 position-relative">
                            <a class="custom-accordion-title text-reset collapsed d-block"
                                data-bs-toggle="collapse" href="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                Q. What is the requirement to join the program? <i
                                    class="mdi mdi-chevron-down accordion-arrow"></i>
                            </a>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse"
                        aria-labelledby="headingTwo"
                        data-bs-parent="#custom-accordion-one">
                        <div class="card-body">
                            No. This is a HTML template. It won't directly with
                            wordpress, though you can convert this into wordpress
                            compatible theme
                        </div>
                    </div>
                </div>
                <div class="card mb-3 col-lg-6">
                    <div class="card-header" id="headingThree">
                        <h5 class="m-0 position-relative">
                            <a class="custom-accordion-title text-reset collapsed d-block"
                                data-bs-toggle="collapse" href="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                Q. What benefit will i get from this program? <i
                                    class="mdi mdi-chevron-down accordion-arrow"></i>
                            </a>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                        data-bs-parent="#custom-accordion-one">
                        <div class="card-body">
                            Use our dedicated support email (support@coderthemes.com) to
                            send your issues or feedback. We are here to help anytime
                        </div>
                    </div>
                </div>
                <div class="card mb-3 col-lg-6">
                    <div class="card-header" id="headingFour">
                        <h5 class="m-0 position-relative">
                            <a class="custom-accordion-title text-reset collapsed d-block"
                                data-bs-toggle="collapse" href="#collapseFour"
                                aria-expanded="false" aria-controls="collapseFour">
                                Q. Does this program require a fee? <i
                                    class="mdi mdi-chevron-down accordion-arrow"></i>
                            </a>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse"
                        aria-labelledby="headingFour"
                        data-bs-parent="#custom-accordion-one">
                        <div class="card-body">
                            Yes, We will update the Adminto regularly. All the
                            future updates would be available without any cost
                        </div>
                    </div>
                </div>
                <div class="card mb-3 col-lg-6">
                    <div class="card-header" id="headingFive">
                        <h5 class="m-0 position-relative">
                            <a class="custom-accordion-title text-reset collapsed d-block"
                                data-bs-toggle="collapse" href="#collapseFive"
                                aria-expanded="false" aria-controls="collapseFive">
                                Q. How to upload my files? <i
                                    class="mdi mdi-chevron-down accordion-arrow"></i>
                            </a>
                        </h5>
                    </div>
                    <div id="collapseFive" class="collapse"
                        aria-labelledby="headingFive"
                        data-bs-parent="#custom-accordion-one">
                        <div class="card-body">
                            Yes, We will update the Adminto regularly. All the
                            future updates would be available without any cost
                        </div>
                    </div>
                </div>
                <div class="card mb-3 col-lg-6">
                    <div class="card-header" id="headingSix">
                        <h5 class="m-0 position-relative">
                            <a class="custom-accordion-title text-reset collapsed d-block"
                                data-bs-toggle="collapse" href="#collapseSix"
                                aria-expanded="false" aria-controls="collapseSix">
                                Q. How do i see my activity status? <i
                                    class="mdi mdi-chevron-down accordion-arrow"></i>
                            </a>
                        </h5>
                    </div>
                    <div id="collapseSix" class="collapse"
                        aria-labelledby="headingSix"
                        data-bs-parent="#custom-accordion-one">
                        <div class="card-body">
                            Yes, We will update the Adminto regularly. All the
                            future updates would be available without any cost
                        </div>
                    </div>
                </div>
                <div class="card mb-3 col-lg-6">
                    <div class="card-header" id="headingSeven">
                        <h5 class="m-0 position-relative">
                            <a class="custom-accordion-title text-reset collapsed d-block"
                                data-bs-toggle="collapse" href="#collapseSeven"
                                aria-expanded="false" aria-controls="collapseSeven">
                                Q. Can i apply for more than one program? <i
                                    class="mdi mdi-chevron-down accordion-arrow"></i>
                            </a>
                        </h5>
                    </div>
                    <div id="collapseSeven" class="collapse"
                        aria-labelledby="headingSeven"
                        data-bs-parent="#custom-accordion-one">
                        <div class="card-body">
                            Yes, We will update the Adminto regularly. All the
                            future updates would be available without any cost
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </section>
    <!-- contact end -->
@endsection
