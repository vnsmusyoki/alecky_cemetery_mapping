@extends('pages.layout')
@section('title', 'Homepage')
@section('content')
        <!-- Slider Area Start Here-->
        <div class="slider-area">
            <div class="bend niceties preview-2">
                <div id="ensign-nivoslider" class="slides">
                    <img src="{{ asset('front-end/img/slides/slide1.jpg') }}" alt="slide1" title="#slider-direction-1" />
                    <img src="{{ asset('front-end/img/slides/slide2.jpg')}}" alt="slide2" title="#slider-direction-2" />
                    <img src="{{ asset('front-end/img/slides/slide3.jpg') }}" alt="slide3" title="#slider-direction-3" />
                </div>
                <!-- direction 1 -->
                <div id="slider-direction-1" class="t-cn slider-direction">
                    <div class="slider-progress"></div>
                    <div class="slider-content t-cn s-tb slider-1">
                        <div class="title-container s-tb-c title-compress">
                            <div data-wow-delay="0.2s" data-wow-duration="2s" class="tp-caption big-title rs-title customin customout bg-sld-cp-primary">
                                Funeral Service
                            </div>
                            <div data-wow-delay="0.3s" data-wow-duration="3s" class="tp-caption slider-content-text-area small-content customin customout rs-title-small bg-sld-cp-primary tp-resizeme">
                                <p>Lorem Ipsum has been the industry's standard dummy text ever sinceIt has survived not only five centuries, but also the leap into electronic.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                        <div data-wow-delay="0.4s" data-wow-duration="4s" class="button">
                            <ul class="slider-read-more">
                                <li><a href="#" class="btn btn-success">Read more<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="btn btn-success">Get Qute<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- direction 2 -->
                <div id="slider-direction-2" class="t-cn slider-direction">
                    <div class="slider-progress"></div>
                    <div class="slider-content t-cn s-tb slider-2">
                        <div class="title-container s-tb-c title-compress">
                            <div data-wow-delay="0.2s" data-wow-duration="2s" class="tp-caption big-title rs-title customin customout bg-sld-cp-primary">
                                Funeral Service
                            </div>
                            <div data-wow-delay="0.3s" data-wow-duration="3s" class="tp-caption slider-content-text-area small-content customin customout rs-title-small bg-sld-cp-primary tp-resizeme">
                                <p>Lorem Ipsum has been the industry's standard dummy text ever sinceIt has survived not only five centuries, but also the leap into electronic.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                        <div data-wow-delay="0.4s" data-wow-duration="4s" class="button">
                            <ul class="slider-read-more">
                                <li><a href="#" class="btn btn-success">Read more<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="btn btn-success">Get Qute<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- direction 3 -->
                <div id="slider-direction-3" class="t-cn slider-direction">
                    <div class="slider-progress"></div>
                    <div class="slider-content t-cn s-tb slider-3">
                        <div class="title-container s-tb-c title-compress">
                            <div data-wow-delay="0.2s" data-wow-duration="2s" class="tp-caption big-title rs-title customin customout bg-sld-cp-primary">
                                Funeral Service
                            </div>
                            <div data-wow-delay="0.3s" data-wow-duration="3s" class="tp-caption slider-content-text-area small-content customin customout rs-title-small bg-sld-cp-primary tp-resizeme">
                                <p>Lorem Ipsum has been the industry's standard dummy text ever sinceIt has survived not only five centuries, but also the leap into electronic.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                        <div data-wow-delay="0.4s" data-wow-duration="4s" class="button">
                            <ul class="slider-read-more">
                                <li><a href="#" class="btn btn-success">Read more<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="btn btn-success">Get Qute<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></li>
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
                                <img src="{{ asset('front-end/img/obituary/01.jpg') }}" alt="obituary1" class="img-responsive">
                                <div class="obituary-right-box-content">
                                    <h4><a href="#">Daizy Roi</a></h4>
                                    <span>May 8, 2015</span>
                                </div>
                            </div>
                            <div class="obituary-right-box">
                                <div class="overlay"></div>
                                <img src="{{ asset('front-end/img/obituary/02.jpg') }}" alt="obituary2" class="img-responsive">
                                <div class="obituary-right-box-content">
                                    <h4><a href="#">David Smith</a></h4>
                                    <span>May 8, 2015</span>
                                </div>
                            </div>
                            <div class="obituary-right-box">
                                <div class="overlay"></div>
                                <img src="{{ asset('front-end/img/obituary/03.jpg') }}" alt="obituary3" class="img-responsive">
                                <div class="obituary-right-box-content">
                                    <h4><a href="#">Jamia Marjan</a></h4>
                                    <span>May 8, 2015</span>
                                </div>
                            </div>
                            <div class="obituary-right-box">
                                <div class="overlay"></div>
                                <img src="{{ asset('front-end/img/obituary/04.jpg') }}" alt="obituary4" class="img-responsive">
                                <div class="obituary-right-box-content">
                                    <h4><a href="#">Daizy Roi</a></h4>
                                    <span>May 8, 2015</span>
                                </div>
                            </div>
                            <div class="obituary-right-box">
                                <div class="overlay"></div>
                                <img src="{{ asset('front-end/img/obituary/05.jpg') }}" alt="obituary5" class="img-responsive">
                                <div class="obituary-right-box-content">
                                    <h4><a href="#">Rahat Fatey</a></h4>
                                    <span>May 8, 2015</span>
                                </div>
                            </div>
                            <div class="obituary-right-box">
                                <div class="overlay"></div>
                                <img src="{{ asset('front-end/img/obituary/01.jpg') }}" alt="obituary1" class="img-responsive">
                                <div class="obituary-right-box-content">
                                    <h4><a href="#">Daizy Roi</a></h4>
                                    <span>May 8, 2015</span>
                                </div>
                            </div>
                            <div class="obituary-right-box">
                                <div class="overlay"></div>
                                <img src="{{ asset('front-end/img/obituary/02.jpg') }}" alt="obituary2" class="img-responsive">
                                <div class="obituary-right-box-content">
                                    <h4><a href="#">David Smith</a></h4>
                                    <span>May 8, 2015</span>
                                </div>
                            </div>
                            <div class="obituary-right-box">
                                <div class="overlay"></div>
                                <img src="{{ asset('front-end/img/obituary/03.jpg') }}" alt="obituary3" class="img-responsive">
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
        <div class="what-we-do-area section-space">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="section-title-area">
                            <div class="section-title-area-top">
                                <span>We are Awesome</span>
                                <h2>What We Do</h2>
                            </div>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mol</p>
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
                            <p>Dorem Ipsum is simply dummy text of the printing and typesetting indusIpsum has been theyery industry's scenturies.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="what-we-do-box">
                            <div class="what-we-do-icon">
                                <i class="fa fa-cog" aria-hidden="true"></i>
                            </div>
                            <h3>Cremation</h3>
                            <p>Dorem Ipsum is simply dummy text of the printing and typesetting indusIpsum has been theyery industry's scenturies.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="what-we-do-box margin-bottom0">
                            <div class="what-we-do-icon">
                                <i class="fa fa-pagelines" aria-hidden="true"></i>
                            </div>
                            <h3>Cemetery</h3>
                            <p>Dorem Ipsum is simply dummy text of the printing and typesetting indusIpsum has been theyery industry's scenturies.</p>
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
                            <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse
                                molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.
                            </p>
                            <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse
                                molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About us Area End Here -->
        <!-- Our Services Area Start Here -->
        <div class="services-area section-space">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="section-title-area">
                            <div class="section-title-area-top">
                                <span>What We Offer</span>
                                <h2>Our Services</h2>
                            </div>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mol</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="services-carousel">
                        <div class="services-box">
                            <div class="services-box-on-hover">
                                <h3><a href="#">Plan Ahead</a></h3>
                                <p>Dorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                            </div>
                            <img src="img/services/1.jpg" alt="services1">
                            <h3>Plan Ahead</h3>
                        </div>
                        <div class="services-box">
                            <div class="services-box-on-hover">
                                <h3><a href="#"> Flower & Gift</a></h3>
                                <p>Dorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                            </div>
                            <img src="img/services/2.jpg" alt="services2">
                            <h3>Flower & Gift</h3>
                        </div>
                        <div class="services-box">
                            <div class="services-box-on-hover">
                                <h3><a href="#">Grief & Healing</a></h3>
                                <p>Dorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                            </div>
                            <img src="{{ asset('front-end/img/services/3.jpg') }}" alt="services3">
                            <h3>Grief & Healing</h3>
                        </div>
                        <div class="services-box">
                            <div class="services-box-on-hover">
                                <h3><a href="#">Plan Ahead</a></h3>
                                <p>Dorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                            </div>
                            <img src="{{ asset('front-end/img/services/1.jpg') }}" alt="services1">
                            <h3>Plan Ahead</h3>
                        </div>
                        <div class="services-box">
                            <div class="services-box-on-hover">
                                <h3><a href="#"> Flower & Gift</a></h3>
                                <p>Dorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                            </div>
                            <img src="{{ asset('front-end/img/services/2.jpg') }}" alt="services2">
                            <h3>Flower & Gift</h3>
                        </div>
                        <div class="services-box">
                            <div class="services-box-on-hover">
                                <h3><a href="#">Grief & Healing</a></h3>
                                <p>Dorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                            </div>
                            <img src="{{ asset('front-end/img/services/3.jpg') }}" alt="services3">
                            <h3>Grief & Healing</h3>
                        </div>
                        <div class="services-box">
                            <div class="services-box-on-hover">
                                <h3><a href="#">Plan Ahead</a></h3>
                                <p>Dorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                            </div>
                            <img src="img/services/1.jpg" alt="services1">
                            <h3>Plan Ahead</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Services Area End Here -->
        <!-- Expertise Area Start Here -->
        <div class="expertise-area section-space-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="expertise-left">
                            <h2>We are Expert in <br/><span class="primary-color">Funeral Service</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nib.Sed ut perspiciatis unde omnis iste natus.</p>
                            <a href="#" class="btn buy-btn">Buy This Theme<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="expertise-right">
                            <img src="{{ asset('front-end/img/experties.png') }}" class="img-responsive" alt="experties">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Expertise Area End Here -->
        <!-- Staff Area Start Here -->
        <div class="staff-area section-space">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5 col-sm-5">
                        <div class="staff-left">
                            <h2>Our Staff</h2>
                            <p>Quisque nulla. Vestibulum libero nisl, portlesuada at, neque. Vivamus eget nibh Etiam cursus leo ve rtyuil metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsums et ultrices.</p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 col-sm-7">
                        <div class="staff-right">
                            <div class="staff-right-box">
                                <div class="overlay-box">
                                    <a href="#"><img src="{{ asset('front-end/img/staff/1.png') }}" alt="Staff1"></a>
                                </div>
                                <h3><a href="#">Jessy Roy</a></h3>
                                <p class="designation">Manager</p>
                            </div>
                            <div class="staff-right-box">
                                <div class="overlay-box">
                                    <a href="#"><img src="{{ asset('front-end/img/staff/2.png') }}" alt="Staff2"></a>
                                </div>
                                <h3><a href="#">Kazi Fahim</a></h3>
                                <p class="designation">Director</p>
                            </div>
                            <div class="staff-right-box">
                                <div class="overlay-box">
                                    <a href="#"><img src="{{ asset('front-end/img/staff/3.png') }}" alt="Staff3"></a>
                                </div>
                                <h3><a href="#">Daizy Neo</a></h3>
                                <p class="designation">Team Leader</p>
                            </div>

                            <div class="staff-right-box">
                                <div class="overlay-box">
                                    <a href="#"><img src="{{ asset('front-end/img/staff/1.png') }}" alt="Staff1"></a>
                                </div>
                                <h3><a href="#">Jessy Roy</a></h3>
                                <p class="designation">Manager</p>
                            </div>
                            <div class="staff-right-box">
                                <div class="overlay-box">
                                    <a href="#"><img src="{{ asset('front-end/img/staff/2.png') }}" alt="Staff2"></a>
                                </div>
                                <h3><a href="#">Kazi Fahim</a></h3>
                                <p class="designation">Director</p>
                            </div>
                            <div class="staff-right-box">
                                <div class="overlay-box">
                                    <a href="#"><img src="{{ asset('front-end/img/staff/3.png') }}" alt="Staff3"></a>
                                </div>
                                <h3><a href="#">Daizy Neo</a></h3>
                                <p class="designation">Team Leader</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Staff Area End Here -->
        <!-- Talk About Area Start Here -->
        <div class="talk-about-area section-space">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="section-title-area">
                            <div class="section-title-area-top">
                                <span>Our Clients</span>
                                <h2>Talk About Us</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="talk-about-carousel">
                        <div class="talk-about-carousel-box">
                            <p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do. If you haven't found it yet, keep
                                Peopeative are the luckiest people.</p>
                            <h5>Kazi Warner, CEO it</h5>
                        </div>
                        <div class="talk-about-carousel-box">
                            <p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do. If you haven't found it yet, keep
                                Peopeative are the luckiest people.</p>
                            <h5>Kazi Warner, CEO it</h5>
                        </div>
                        <div class="talk-about-carousel-box">
                            <p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do. If you haven't found it yet, keep
                                Peopeative are the luckiest people.</p>
                            <h5>Kazi Warner, CEO it</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Talk About Area End Here -->
        <!-- Partner Area Start Here -->
        <div class="partner-area">
            <div class="container">
                <div class="row">
                    <div class="partner-carousel">
                        <h4><a href="#">Envato</a></h4>
                        <h4><a href="#">ThemeForest</a></h4>
                        <h4><a href="#">Codecanyon</a></h4>
                        <h4><a href="#">Graphicriver</a></h4>
                        <h4><a href="#">Envato</a></h4>
                        <h4><a href="#">ThemeForest</a></h4>
                        <h4><a href="#">Codecanyon</a></h4>
                        <h4><a href="#">Graphicriver</a></h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- Partner Area End Here -->
        <!-- Contact Area Start Here -->
        <div class="contact-area section-space">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="contact-top">
                            <ul>
                                <li><a href="#address" data-toggle="tab" aria-expanded="false"><i class="fa fa-paper-plane" aria-hidden="true"></i></a>
                                </li>
                                <li class="active"><a href="#message" data-toggle="tab" aria-expanded="false"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#phone" data-toggle="tab" aria-expanded="false"><i class="fa fa-phone" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade" id="address">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="cotact-heading">
                                    <h3>Contact Address</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-offset-4 col-lg-8 col-md-offset-4
							 col-md-8 col-sm-offset-3 col-sm-9 col-xs-offset-2 col-xs-10">
                                <ul class="contact-address">
                                    <li><i aria-hidden="true" class="fa fa-map-marker"></i>44 New Design Street, rne 005</li>
                                    <li><i aria-hidden="true" class="fa fa-phone"></i>(01) 800 433 633</li>
                                    <li><i aria-hidden="true" class="fa fa-envelope-o"></i>info@gtbuilders.com</li>
                                    <li><i aria-hidden="true" class="fa fa-fax"></i>(123) 123 005040</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade active in" id="message">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="cotact-heading">
                                    <h3>Contact Message</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <form>
                                <fieldset>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <input type="text" placeholder="Name*" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <input type="email" placeholder="Email*" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <textarea placeholder="Message*" class="textarea form-control" rows="10" cols="20"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn send-btn">Send Message</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="phone">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="cotact-heading">
                                    <h3>Contact Phone</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <ul class="contact-phone-left">
                                    <li><i aria-hidden="true" class="fa fa-phone"></i>(01) 800 433 633</li>
                                    <li><i aria-hidden="true" class="fa fa-phone"></i>(01) 800 433 633</li>
                                    <li><i aria-hidden="true" class="fa fa-phone"></i>(01) 800 433 633</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <ul class="contact-phone-right">
                                    <li><i aria-hidden="true" class="fa fa-phone"></i>(01) 800 433 633</li>
                                    <li><i aria-hidden="true" class="fa fa-phone"></i>(01) 800 433 633</li>
                                    <li><i aria-hidden="true" class="fa fa-phone"></i>(01) 800 433 633</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Area End Here -->
        <!-- Google Map Integrate Start Here -->
        <div class="google-map-area">
            <div id="googleMap" style="width:100%;height:380px;"></div>
        </div>
        <!-- Google Map Integrate End Here -->
@endsection
