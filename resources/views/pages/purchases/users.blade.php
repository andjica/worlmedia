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
    <div class="row shadow bg-white p-2 mb-4">
      @include('components.admin.admin-manager')
    </div>

    <div class="row bg-white p-2">
  
        <div class="col-md-3 col-xl-3 mt-2">
       
            @include('components.admin.admin-sidebar')
        </div>
        <div class="col-md-9 col-xl-9">
                <div class="row">
                    @include('components.admin.table-users')
                    <ul class="list-group">
                        <li class="list-group">  {{$users->links()}}</li>
                    </ul>
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
