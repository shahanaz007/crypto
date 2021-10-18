@extends('layouts.default')
@section('content')
<section class="pt-130 pb-50">
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


@endsection