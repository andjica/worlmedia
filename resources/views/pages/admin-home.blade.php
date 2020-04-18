@include('components.head')
@include('components.nav-dashboard')
<div class="container p-0">

    <h1 class="h3 mb-3" style="color: transparent;">Settings</h1>
    <div class="row main-row">
    <div class="col-lg-12">
    @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
                @endif
    </div>
    </div>
    <div class="row">
  
        <div class="col-md-5 col-xl-4">
       
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Profile Settings</h5>
                </div>

                <div class="list-group list-group-flush" role="tablist">
                    <a class="list-group-item list-group-item-action active" data-toggle="list" href="#biography" role="tab">
                        Users administration
                      
                    </a>
                  
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#information" role="tab">
                        Purchases administration
                    </a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#password" role="tab">
                        Manage City
                    </a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#contact" role="tab">
                       Manage Country 
                    </a>
                   
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#data" role="tab">
                      Manage Category
                    </a>
                    
                </div>
            </div>
        </div>
       
    </div>

</div>

<style>

body{
    
    background:#F0F8FF;
}

</style>
@include('components.footer')
