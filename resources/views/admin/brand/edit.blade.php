@extends('layouts.admin_default')

@section('content')

<div class="content-wrapper">
<section class="content">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Brand Edit Form') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('brand.update',$brands->id)}}" method="POST" enctype="multipart/form-data"> 
                    @method('put')
                    @csrf
                        <div class="card-body row">

                            <div class="col-md-6">
                                <label>Name</label>
                                <input type="text" class="form-control"  id="name_id"  name="name"  required="" value="{{$brands->name}}">
                            </div>
                            <div class="col-md-6">
                                <label>Logo</label>
                                <input class="form-control" name="logo"  type="file" placeholder="Upload Logo">
                                <input type="hidden" name="old_logo" value="{{$brands->logo}}">
                                <img src="{{$brands->logo}}" width="75">

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