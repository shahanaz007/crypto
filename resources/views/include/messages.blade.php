

@if (session('status'))
<section>
<div class="content">
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
</div>   
</section> 
@endif
@if (session('error'))
<section>
<div class="row col-md-10 justify-content-center" style="margin: auto;float: none;width:85%">
    <div class="alert alert-danger" role="alert">
        {{ session('error') }}
    </div>
</div>
</section>
@endif  