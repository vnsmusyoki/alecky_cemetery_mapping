@extends('pages.layout')
@section('title', 'Contact us')
@section('content')
        <!-- Contact Area Start Here -->
        <div class="contact-area section-space">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="contact-top">
                            <ul>

                                <li class="active"><a href="#message" data-toggle="tab" aria-expanded="false"><i
                                            class="fa fa-envelope-o" aria-hidden="true"></i></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content">

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
                                            <textarea placeholder="Message*" class="textarea form-control" rows="10"
                                                cols="20"></textarea>
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
                     
                </div>
            </div>
        </div>
        <!-- Contact Area End Here -->
@endsection
