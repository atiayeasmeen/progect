@extends('layouts.master')

@section('title', 'Packages')


@section('content')

    <section class="pricing py-5">
        <div class="container">
            <div class="row">

    <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
            <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Basic Jobs</h5>
                <h6 class="card-price text-center">$10.00<span class="period"></span></h6>
                <hr>
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>1 job posting</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>0 featured job</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Job displayed for 20 days</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Premium Support 24/7</li>
                </ul>
                <a href="#" class="btn btn-block btn-primary text-uppercase">ADD TO CART</a>
            </div>
        </div>
    </div>
    <!-- Plus Tier -->
    <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
            <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Standard Jobs</h5>
                <h6 class="card-price text-center">$45.00<span class="period"></span></h6>
                <hr>
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>45 job posting</strong></li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>30 featured job</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Job displayed for 45 days</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Premium Support 24/7</li>
                </ul>
                <a href="#" class="btn btn-block btn-primary text-uppercase">ADD TO CART</a>
            </div>
        </div>
    </div>
    <!-- Pro Tier -->
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Golden Jobs</h5>
                <h6 class="card-price text-center">$80.00<span class="period"></span></h6>
                <hr>
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>90 job posting</strong></li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span> 35 featured job</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Job displayed for 60 days</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Premium Support 24/7</li>
                </ul>
                <a href="#" class="btn btn-block btn-primary text-uppercase">ADD TO CART</a>
            </div>
        </div>
      </div>
            </div>
        </div>
    </section>
@stop