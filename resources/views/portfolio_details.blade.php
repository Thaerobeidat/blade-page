@extends('layout.master' , ['title'=> ' Portfolio Details'])

@section('content')
<!-- Breadcrumbs -->
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>Portfolio Details</h2>
                    <ul class="bread-list">
                        <li><a href="index.html">Home</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active">Portfolio Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Portfolio Details Area -->
<section class="pf-details section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="inner-content">
                    <div class="image-slider">
                        <div class="pf-details-slider">
                            <img src="img/call-bg.jpg" alt="#">
                            <img src="img/call-bg.jpg" alt="#">
                            <img src="img/call-bg.jpg" alt="#">
                        </div>
                    </div>
                    <div class="date">
                        <ul>
                            <li><span>Category :</span> Heart Surgery</li>
                            <li><span>Date :</span> April 20, 2019</li>
                            <li><span>Client :</span> Suke Agency</li>
                            <li><span>Ags :</span> Typo</li>
                        </ul>
                    </div>
                    <div class="body-text">
                        <h3>Here is the name of this project here</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor a ti incididunt ut labore et dolore to in magna aliqua. Ut enim ad minim veniam, quis to the in nostrud.abore et dolore magna aliqua uis nostrud.Lorem ipsum dolor sit amet, in a in to in a consectetur.ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis to the in nostrud.abore et dolore magna in a aliqua uis nostrud.Lorem ipsum dolor sit amet, in aed do eiusmod</p>
                        <p>ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis to the in nostrud.abore et dolore magna to in aliqua uis nostrud.Lorem ipsum dolor sit amet, in aed do eiusmod.ncididunt ut labore et dolore magna aliqua. </p>
                        <p>ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis to the in nostrud.abore et dolore magna a aliqua uis nostrud.Lorem ipsum dolor sit amet, in aed do eiusmod.ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis to the in nostrud.abore et dolore magna aliqua uis nostrud.Lorem ipsum dolor sit amet, in aed do eiusmod. dolor sit amet, in aed do eiusmod.ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis to the in nostrud.abore et dolore magna aliqua uis nostrud.</p>
                        <div class="share">
                            <h4>Share Now -</h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Portfolio Details Area -->
@endsection
