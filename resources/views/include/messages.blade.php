

@if (session('status'))
<section>
<div class="row col-md-10 justify-content-center" style="margin: auto;float: none;width:89%">
    <div class="alert alert-info" role="alert">
        {{ session('status') }}
    </div>
</div>   
</section> 
@endif

@if (session('success'))
<section>
<div class="row col-md-10 justify-content-center" style="margin: auto;float: none;width:89%">
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
</div>   
</section> 
@endif

@if (session('error'))
<section>
<div class="row col-md-11 justify-content-center" style="margin: auto;float: none;width:89%">
    <div class="alert alert-danger" role="alert">
        {{ session('error') }}
    </div>
</div>
</section>
@endif  