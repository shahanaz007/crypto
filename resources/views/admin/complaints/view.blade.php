@extends('layouts.admin_default')

@section('content')
<style type="text/css">
    
    .col-md-6 {
        padding-bottom: 15px;
    }

    .no_bg {
            border: none !important;
            background: none !important;
    }
    hr {
        border-top-color:rgb(116 119 124 / 38%);
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

                    <form action="{{route('complaints.update',$complaint->id)}}" method="POST"> 
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
                                <label><b>Description</b></label>
                                <p>{{$complaint->complaints}}</p>
                            </div>
                            <div class="col-md-12">
                                <b><hr></b>
                            </div>
                            @if(count($solutions) > 0) 
                                <div class="col-md-12">
                                    <label><b>{{$number}} Responses</label>
                                    <hr>
                                </div>
                                
                                <?php $slno=1; ?>
                                @foreach($solutions as $solution)
                                    <div class="col-md-12">
                                        <h4><label><b>{{$solution->user->name}}</b></label></h4>
                                        <p>{{$solution->solution}}</p>    
                                    </div>
                                    <?php $slno++; ?>
                                @endforeach

                            @endif

                            


                            
	                	</div>

                        <div class="col-md-12">
                                    
                                    <hr>
                                </div>
                         <div class="col-md-12">
                                <label style="margin-top: 10px;">Solution</label>
                                <textarea name="solution" class="form-control" rows="6" cols="70"></textarea>
                            </div> 
                            <div class="col-md-12">
                                <label class="p-2">Status</label>
                                <select class="form-control" name="status" id="status_id" required="">
                                    <option value="{{$complaint->status }}" <?php if($complaint->status){ echo "selected"; } ?>>{{$complaint->status }}</option>
                                    <option value="open">Open</option>
                                    <option value="processing">Processing</option>
                                    <option value="closed">Closed</option>
                                    <option value="deffered">Deffered</option>
                                    
                                </select>
                            </div>
                                        
                        <div class="row">
                            <div class="col-lg-12">
                                <button class="btn btn-secondary float-right">Submit</button>
                            </div>
                        </div>
                        </form>
                                

	                		<div class="row">
							    <div class="col-lg-12">
                                    
                                    <a href="{{route('complaints.index') }}">
                                    <button class="btn btn-danger " onclick=""><< Back</button></a>


                                    
                                    
                                    
							    </div>

							</div>
						
	                		
                	
                    

                </div>
            </div>
        </div>
    </div>
</div>
</section>
</div>
@endsection