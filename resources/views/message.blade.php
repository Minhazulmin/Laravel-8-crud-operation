@if (Session::has('success'))
<div class="container">
    <div class="row justify-content-center">  
        <div class="alert alert-primary" style="margin-top:14px!important;padding:7px!important;color:red;background-color: #ffffff!important;font-weight:800;">
            {{ Session::get('success') }}
        </div>   
    </div>
</div>

@endif