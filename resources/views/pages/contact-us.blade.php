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
                                <li><a href="#address" data-toggle="tab" aria-expanded="false"><i class="fa fa-paper-plane"
                                            aria-hidden="true"></i></a>
                                </li>
                                <li class="active"><a href="#message" data-toggle="tab" aria-expanded="false"><i
                                            class="fa fa-envelope-o" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#phone" data-toggle="tab" aria-expanded="false"><i class="fa fa-phone"
                                            aria-hidden="true"></i></a>
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
                            <div
                                class="col-lg-offset-4 col-lg-8 col-md-offset-4
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
@endsection
