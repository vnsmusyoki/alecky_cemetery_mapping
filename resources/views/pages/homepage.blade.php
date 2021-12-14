@extends('pages.layout')
@section('title', 'Homepage')
@section('content')
    <!-- Slider Area Start Here-->
    <div class="slider-area">
        <div class="bend niceties preview-2">
            <div id="ensign-nivoslider" class="slides">
                <img src="{{ asset('front-end/img/slides/slide1.jpg') }}" alt="slide1" title="#slider-direction-1" />
                <img src="{{ asset('front-end/img/slides/slide2.jpg') }}" alt="slide2" title="#slider-direction-2" />
                <img src="{{ asset('front-end/img/slides/slide3.jpg') }}" alt="slide3" title="#slider-direction-3" />
            </div>
            <!-- direction 1 -->
            <div id="slider-direction-1" class="t-cn slider-direction">
                <div class="slider-progress"></div>
                <div class="slider-content t-cn s-tb slider-1">
                    <div class="title-container s-tb-c title-compress">
                        <div data-wow-delay="0.2s" data-wow-duration="2s"
                            class="tp-caption big-title rs-title customin customout bg-sld-cp-primary">
                            Funeral Service
                        </div>
                        <div data-wow-delay="0.3s" data-wow-duration="3s"
                            class="tp-caption slider-content-text-area small-content customin customout rs-title-small bg-sld-cp-primary tp-resizeme">
                            <p>We honour and care for our loved ones who die by  ensuring they will never be forgotten. Funded by six Member Governments, our work began with building, and now maintaining, cemeteries at 23,000 locations all over the world.</p>

                        </div>
                    </div>
                    <div data-wow-delay="0.4s" data-wow-duration="4s" class="button">
                        <ul class="slider-read-more">
                            <li><a href="#" class="btn btn-success">Read more<i class="fa fa-arrow-circle-right"
                                        aria-hidden="true"></i></a></li>
                            <li><a href="#" class="btn btn-success">Get Qute<i class="fa fa-arrow-circle-right"
                                        aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- direction 2 -->
            <div id="slider-direction-2" class="t-cn slider-direction">
                <div class="slider-progress"></div>
                <div class="slider-content t-cn s-tb slider-2">
                    <div class="title-container s-tb-c title-compress">
                        <div data-wow-delay="0.2s" data-wow-duration="2s"
                            class="tp-caption big-title rs-title customin customout bg-sld-cp-primary">
                            Funeral Service
                        </div>
                        <div data-wow-delay="0.3s" data-wow-duration="3s"
                            class="tp-caption slider-content-text-area small-content customin customout rs-title-small bg-sld-cp-primary tp-resizeme">
                            <p>Lorem Ipsum has been the industry's standard dummy text ever sinceIt has survived not only
                                five centuries, but also the leap into electronic.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                    <div data-wow-delay="0.4s" data-wow-duration="4s" class="button">
                        <ul class="slider-read-more">
                            <li><a href="#" class="btn btn-success">Read more<i class="fa fa-arrow-circle-right"
                                        aria-hidden="true"></i></a></li>
                            <li><a href="#" class="btn btn-success">Get Qute<i class="fa fa-arrow-circle-right"
                                        aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- direction 3 -->
            <div id="slider-direction-3" class="t-cn slider-direction">
                <div class="slider-progress"></div>
                <div class="slider-content t-cn s-tb slider-3">
                    <div class="title-container s-tb-c title-compress">
                        <div data-wow-delay="0.2s" data-wow-duration="2s"
                            class="tp-caption big-title rs-title customin customout bg-sld-cp-primary">
                            Funeral Service
                        </div>
                        <div data-wow-delay="0.3s" data-wow-duration="3s"
                            class="tp-caption slider-content-text-area small-content customin customout rs-title-small bg-sld-cp-primary tp-resizeme">
                            <p>Lorem Ipsum has been the industry's standard dummy text ever sinceIt has survived not only
                                five centuries, but also the leap into electronic.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                    <div data-wow-delay="0.4s" data-wow-duration="4s" class="button">
                        <ul class="slider-read-more">
                            <li><a href="#" class="btn btn-success">Read more<i class="fa fa-arrow-circle-right"
                                        aria-hidden="true"></i></a></li>
                            <li><a href="#" class="btn btn-success">Get Qute<i class="fa fa-arrow-circle-right"
                                        aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider End-->
    <!-- Obituary Area Start Here -->
    <div class="obituary-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="obituary-left">
                        <h3>Recent Obituaries</h3>
                        <p>Simply dummy text of the printing and typ esetting industry. </p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <div class="obituary-right">
                        <div class="obituary-right-box">
                            <div class="overlay"></div>
                            <img src="{{ asset('front-end/img/obituary/01.jpg') }}" alt="obituary1"
                                class="img-responsive">
                            <div class="obituary-right-box-content">
                                <h4><a href="#">Daizy Roi</a></h4>
                                <span>May 8, 2015</span>
                            </div>
                        </div>
                        <div class="obituary-right-box">
                            <div class="overlay"></div>
                            <img src="{{ asset('front-end/img/obituary/02.jpg') }}" alt="obituary2"
                                class="img-responsive">
                            <div class="obituary-right-box-content">
                                <h4><a href="#">David Smith</a></h4>
                                <span>May 8, 2015</span>
                            </div>
                        </div>
                        <div class="obituary-right-box">
                            <div class="overlay"></div>
                            <img src="{{ asset('front-end/img/obituary/03.jpg') }}" alt="obituary3"
                                class="img-responsive">
                            <div class="obituary-right-box-content">
                                <h4><a href="#">Jamia Marjan</a></h4>
                                <span>May 8, 2015</span>
                            </div>
                        </div>
                        <div class="obituary-right-box">
                            <div class="overlay"></div>
                            <img src="{{ asset('front-end/img/obituary/04.jpg') }}" alt="obituary4"
                                class="img-responsive">
                            <div class="obituary-right-box-content">
                                <h4><a href="#">Daizy Roi</a></h4>
                                <span>May 8, 2015</span>
                            </div>
                        </div>
                        <div class="obituary-right-box">
                            <div class="overlay"></div>
                            <img src="{{ asset('front-end/img/obituary/05.jpg') }}" alt="obituary5"
                                class="img-responsive">
                            <div class="obituary-right-box-content">
                                <h4><a href="#">Rahat Fatey</a></h4>
                                <span>May 8, 2015</span>
                            </div>
                        </div>
                        <div class="obituary-right-box">
                            <div class="overlay"></div>
                            <img src="{{ asset('front-end/img/obituary/01.jpg') }}" alt="obituary1"
                                class="img-responsive">
                            <div class="obituary-right-box-content">
                                <h4><a href="#">Daizy Roi</a></h4>
                                <span>May 8, 2015</span>
                            </div>
                        </div>
                        <div class="obituary-right-box">
                            <div class="overlay"></div>
                            <img src="{{ asset('front-end/img/obituary/02.jpg') }}" alt="obituary2"
                                class="img-responsive">
                            <div class="obituary-right-box-content">
                                <h4><a href="#">David Smith</a></h4>
                                <span>May 8, 2015</span>
                            </div>
                        </div>
                        <div class="obituary-right-box">
                            <div class="overlay"></div>
                            <img src="{{ asset('front-end/img/obituary/03.jpg') }}" alt="obituary3"
                                class="img-responsive">
                            <div class="obituary-right-box-content">
                                <h4><a href="#">Jamia Marjan</a></h4>
                                <span>May 8, 2015</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Obituary Area End Here -->
    <!-- What-we-do Area Start Here -->
    <div class="what-we-do-area section-space" id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="section-title-area">
                        <div class="section-title-area-top">
                            <span>We are Awesome</span>
                            <h2>What We Do</h2>
                        </div>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mol
                        </p>
                    </div>
                </div>
            </div>
            <div class="row margin-top40">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="what-we-do-box">
                        <div class="what-we-do-icon">
                            <i class="fa fa-pagelines" aria-hidden="true"></i>
                        </div>
                        <h3>Funeral</h3>
                        <p>Dorem Ipsum is simply dummy text of the printing and typesetting indusIpsum has been theyery
                            industry's scenturies.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="what-we-do-box">
                        <div class="what-we-do-icon">
                            <i class="fa fa-cog" aria-hidden="true"></i>
                        </div>
                        <h3>Cremation</h3>
                        <p>Dorem Ipsum is simply dummy text of the printing and typesetting indusIpsum has been theyery
                            industry's scenturies.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="what-we-do-box margin-bottom0">
                        <div class="what-we-do-icon">
                            <i class="fa fa-pagelines" aria-hidden="true"></i>
                        </div>
                        <h3>Cemetery</h3>
                        <p>Dorem Ipsum is simply dummy text of the printing and typesetting indusIpsum has been theyery
                            industry's scenturies.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- What-we-do Area End Here -->
    <!-- About us Area Start Here -->
    <div class="about-us-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="about-us-left">
                        <img src="{{ asset('front-end/img/about.jpg') }}" alt="about">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="about-us-right">
                        <div class="about-us-right-title">
                            <h2>About us</h2>
                        </div>
                        <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum
                            formas humanitatis per seacula quarta decima et quinta decima. Duis autem vel eum iriure dolor
                            in hendrerit in vulputate velit esse
                            molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
                            iusto.
                        </p>
                        <p>delted.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About us Area End Here -->
    <!-- Our Services Area Start Here -->
    <div class="services-area section-space" id="book-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="section-title-area">
                        <div class="section-title-area-top">
                            <span>What We Offer</span>
                            <h2>Our Services</h2>
                        </div>
                        <p>what we offer
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="services-carousel">
                    <div class="services-box">
                        <div class="services-box-on-hover">
                            <h3><a href="#">Plan Ahead</a></h3>
                            <p>Dorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry.</p>
                        </div>
                        <img src="{{ asset('front-end/img/services/1.jpg') }}" alt="services1">
                        <h3>Plan Ahead</h3>
                    </div>
                    <div class="services-box">
                        <div class="services-box-on-hover">
                            <h3><a href="#"> Flower & Gift</a></h3>
                            <p>Dorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry.</p>
                        </div>
                        <img src="{{ asset('front-end/img/services/2.jpg') }}">
                        <h3>Flower & Gift</h3>
                    </div>
                    <div class="services-box">
                        <div class="services-box-on-hover">
                            <h3><a href="#">Grief & Healing</a></h3>
                            <p>Dorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry.</p>
                        </div>
                        <img src="{{ asset('front-end/img/services/3.jpg') }}" alt="services3">
                        <h3>Grief & Healing</h3>
                    </div>
                    <div class="services-box">
                        <div class="services-box-on-hover">
                            <h3><a href="#">Plan Ahead</a></h3>
                            <p>Dorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry.</p>
                        </div>
                        <img src="{{ asset('front-end/img/services/1.jpg') }}" alt="services1">
                        <h3>Plan Ahead</h3>
                    </div>
                    <div class="services-box">
                        <div class="services-box-on-hover">
                            <h3><a href="#"> Flower & Gift</a></h3>
                            <p>Dorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry.</p>
                        </div>
                        <img src="{{ asset('front-end/img/services/2.jpg') }}" alt="services2">
                        <h3>Flower & Gift</h3>
                    </div>
                    <div class="services-box">
                        <div class="services-box-on-hover">
                            <h3><a href="#">Grief & Healing</a></h3>
                            <p>Dorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry.</p>
                        </div>
                        <img src="{{ asset('front-end/img/services/3.jpg') }}" alt="services3">
                        <h3>Grief & Healing</h3>
                    </div>
                    <div class="services-box">
                        <div class="services-box-on-hover">
                            <h3><a href="#">Plan Ahead</a></h3>
                            <p>Dorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry.</p>
                        </div>
                        <img src="{{ asset('front-end/img/services/1.jpg') }}" alt="services1">
                        <h3>Plan Ahead</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <!-- Google Map Integrate Start Here -->
    <div class="google-map-area">
        <div id="googleMap" style="width:100%;height:380px;"></div>
    </div>
    <!-- Google Map Integrate End Here -->
@endsection
