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

                    <form action="{{route('complaint.update',$complaint->id)}}" method="POST"> 
                    @method('put')
                    @csrf
                        <div class="card-body row">

                            <div class="col-md-6">
                                <label>Username</label>
                                <input type="text" class="form-control no_bg"  id="name_id"  name="name"  value="{{$complaint->user->name}}" readonly="" disabled="">
                            </div>
                            <div class="col-md-6">
                                <label>Subject</label>
                                <input type="text" class="form-control no_bg"  id="subject_id"  name="subject"  value="{{$complaint->subject}}" readonly="" disabled="">
                            </div>
                            <div class="col-md-12">
                                <label><u><b>Description</b></u></label>
                                <p>{{$complaint->complaints}}</p>
                            </div>
                            
                            <div class="col-md-12">
                                <br>
                            </div>


                        </div>
                            @if(count($solutions) > 0) 
                                <div class="col-md-12">
                                    <label><b> - {{$number}} Responses - </b></label>
                                    <hr>
                                </div>
                                
                                <?php $slno=1; ?>
                                @foreach($solutions as $solution)
                                <?php
                                    $styles = "";
                                    if($solution->user->id == Auth::user()->id)
                                    {
                                        $styles = "text-align: right;";
                                    }
                                ?>
                                    <div class="col-md-12" style="{{$styles}}">
                                        <h4 ><label><b>{{$solution->user->name}}</b></label></h4>
                                        <p>{{$solution->solution}}</p> 
                                        <hr>   
                                    </div>
                                    <?php $slno++; ?>
                                @endforeach

                            @else    
                                <div class="col-md-12"> 
                                    <hr>
                                </div>
                            @endif
                         <div class="col-md-12">
                                <label style="margin-top: 10px;">Respond to Compaint / Ticket</label>
                                <textarea name="solution" class="form-control" rows="6" cols="70"></textarea>
                            </div> 
                            
                                        
                        <div class="row">
                            <div class="col-lg-12">
                                <button class="btn btn-secondary float-right" style="margin-left: 450px; margin-top: 50px;">Submit</button>
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