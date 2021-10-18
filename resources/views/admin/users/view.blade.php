@extends('layouts.default')
@section('content')
<section class="pt-130 pb-50">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card-body row">

                        <div class="col-md-6">
                            <label>Name</label>
                            <input type="text" class="form-control"  id="name_id"  name="name"  required="" value="{{$user->name}}">
                        </div>
                        <div class="col-md-6">
                            <label>Email</label>
                            <input type="email" class="form-control"  id="email_id"  name="email"  required="" value="{{$user->email}}">
                        </div>
                        <div class="col-md-6">
                            <label>Referral Code</label>
                            <input type="text" class="form-control"  id="code_id"  name="code"  required="" value="{{$user->myrefercode }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="{{url('users/add_token',$user->id)}}">
                                <button class="btn btn-secondary " style="margin-left: 400px;">Add token/usdt </button>
                            </a>
                            <a href="{{ url('view_sales',$user->id) }}">   
                                <button class="btn btn-secondary float-right">View Sales</button>
                            </a>   
                            <!-- <a href="{{ url('users/debit_token') }}">   
                                <button class="btn btn-secondary float-right">Debit token/usdt</button>
                            </a>    --> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>


@endsection