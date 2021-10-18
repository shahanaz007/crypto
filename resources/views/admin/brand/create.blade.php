@extends('layouts.default')

@section('content')

<section class="pt-130 pb-50">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Brand Form') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('brand.store')}}" method="POST" enctype="multipart/form-data"> 
                    @csrf
                        <div class="card-body row">

                            <div class="col-md-6">
                                <label>Name</label>
                                <input type="text" class="form-control"  id="name_id"  name="name"  required="" placeholder="Brand Name">
                            </div>
                            <div class="col-md-6">
                                <label>Logo</label>
                                <input class="form-control" name="logo" value="" type="file" placeholder="Upload Logo">
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


@endsection