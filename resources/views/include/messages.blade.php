

@if (session('status'))
<section class="msg">
<div class="row col-md-6 justify-content-center" style="margin:10px 0px 0px 10%;position: fixed;float: none;z-index: 1;">
    <div class="alert alert-info" role="alert">
        {{ session('status') }}
    </div>
</div>   
</section> 
@endif

@if (session('success'))
<section  class="msg">
<div class="row col-md-6 justify-content-center" style="margin: 10px 0px 0px 10%;float: none;position: fixed;z-index: 1;">
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
</div>   
</section> 
@endif

@if (session('error'))
<section  class="msg">
<div class="row col-md-6 justify-content-center" style="margin: 10px 0px 0px 10%;float: none;position: fixed;z-index: 1;">
    <div class="alert alert-danger" role="alert">
        {{ session('error') }}
    </div>
</div>
</section>

@endif  

<script type="text/javascript">
     setTimeout(function() {
        $(".msg").hide('blind', {}, 500)
    }, 5000);
</script>