@extends('layouts.web')

@section('content')
<section class="bg-img pt-100" data-overlay="7" style="background-image: url({{asset('assets/img/banner_small.JPG')}});color: white;margin-bottom: 40px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">                       
                        <h2 class="page-title text-white">Complaints/Tikets</h2>
                        <ol class="breadcrumb bg-transparent justify-content-center">
                            <li class="breadcrumb-item"><a href="{{url('/home')}}" class="text-white-50"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Complaints/Tikets</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="pt-130 pb-50">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 sign-in-page" style="margin: auto;float: none;">
            <div class="card">
                <!-- <div class="card-header">{{ __('Withdraw Request Form') }}</div> -->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('complaint.store')}}" method="POST"> 
                    @csrf
                        <div class="card-body row">

                            <div class="col-md-8">
                                <label>Select Subject</label>
                                <select class="form-control" name="subject" id="subject_id" required="">
                                    <option value="coupon">Coupon</option>
                                    <option value="deposite">Deposite</option>
                                    <option value="payments">Payments</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Complaint Description</label>
                                <textarea name="complaint"></textarea>
                            </div>  
                            
                        </div>  
                        <div class="row">
                            <div class="col-lg-12">
                                <button class="btn btn-success float-right" style="margin-left: 400px;">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection