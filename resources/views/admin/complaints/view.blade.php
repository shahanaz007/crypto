@extends('layouts.admin_default')

@section('content')
<style type="text/css">
    
    .col-md-6 {
        padding-bottom: 15px;
    }
</style>
<div class="content-wrapper">
<section class="content">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Complaints\Tikets') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('complaints.update',$complaint->id)}}" id="update_form" method="POST"> 
                    @method('put')
                    @csrf
	                	<div class="card-body row">

	                		<div class="col-md-6">
	                			<label>Username</label>
	                			<input type="text" class="form-control"  id="name_id"  name="name"  value="{{$complaint->user->name}}" readonly="" disabled="">
	                		</div>
                            <div class="col-md-6">
                                <label>Subject</label>
                                <input type="text" class="form-control"  id="subject_id"  name="subject"  value="{{$complaint->subject}}" readonly="" disabled="">
                            </div>
                            <div class="col-md-6">
                                <label>Description</label>
                                <input type="text" class="form-control"  id="description_id"  name="description"  value="{{$complaint->complaints}}" readonly="" disabled="">
                            </div>
                            
	                	</div>
                        </form>


	                		<div class="row">
							    <div class="col-lg-12">
                                    
                                    <a href="{{route('complaints.index') }}">
                                    <button class="btn btn-danger " onclick=""><< Back</button></a>

                                   
                                    <button onclick="submit_form()" class="btn btn-success float-right" style="margin-left: 470px;">Update</button>

                                    
                                    
                                    
							    </div>

							</div>
						
	                		
                	
                    

                </div>
            </div>
        </div>
    </div>
</div>
</section>
</div>
<script type="text/javascript">
    
    function submit_form(){
        $('#update_form').submit();
    }
</script>

@endsection