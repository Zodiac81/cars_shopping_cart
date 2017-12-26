@if(Session::has('success'))
    <br>
    <div class="alert alert-success timer" role="alert">
        <span> <strong>Success:</strong> {{ Session::get('success') }} &nbsp; <i class="fa fa-check-circle fa-2x pull-right" style="margin-top: -0.13em;" aria-hidden="true"></i></span>
    </div>

@endif

@if(Session::has('error'))
    <br>
    <div class="alert alert-danger timer" role="alert">
        <span> <strong>Error:</strong> {{ Session::get('error') }} &nbsp; <i class="fa fa-times-circle fa-2x pull-right" style="margin-top: -0.13em;" aria-hidden="true"></i></span>
    </div>

@endif


<script>
    setTimeout(function() {
        $(".timer").hide('slow')
    }, 3000);
</script>