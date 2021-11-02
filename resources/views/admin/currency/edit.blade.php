@extends('layouts.admin_default')

@section('content')

<div class="content-wrapper">
<section class="content">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Currency') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('currency.update',$currency->id)}}" method="POST"> 
                    @method('put')
                    @csrf
                        <div class="card-body row">

                            <div class="col-md-8">
                                <label>Currency Name</label>
                                <input type="text" class="form-control"  id="currency_name_id"  name="currency_name"  required="" value="{{$currency->currency_name}}">
                            </div>
                            <div class="col-md-8">
                                <label>Currency Code</label>
                                <input type="text" class="form-control"  id="currency_code_id"  name="currency_code"  required="" value="{{$currency->currency_code}}">
                            </div>

                        </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <button class="btn btn-secondary float-right">Submit</button>
                                </div>
                            </div>
                        
                            
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</section>
</div>


@endsection