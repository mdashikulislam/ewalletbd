@extends('frontend.layouts.app')
@section('content')
    <div class="banner-col">
        <div class="container">
            <div class="overlay"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="banner">
                        <h2>FAQ</h2>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--banner End-->
    <!--Faq Start-->
    <div class="home-faq-col">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="advert" style="margin-top: 30px;">
                        <img style="height: auto;width: 100%" src="img/970x90.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="heading-col" style="margin-top: 30px;">
                        <h2>Frequently Asked Questions</h2>
                        <div class="border"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="home-faq">
                        <div class="panel-group" id="accordion1">
                            <div class="panel panel-default">
                                <div class="panel-heading active">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse1">
                                            Lorem ipsum dolor sit amet
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse2">
                                            Lorem ipsum dolor sit amet
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse3">
                                            Lorem ipsum dolor sit amet
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse4">
                                            Lorem ipsum dolor sit amet
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
