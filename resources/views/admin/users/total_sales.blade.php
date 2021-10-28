@extends('layouts.admin_default')
@section('content')
<div class="content-wrapper">
<section class="content">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Total Sales') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card-body row">
                        {{$total_token}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</div>


@endsection