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
                <div class="row p-3">
                
                <form action="{{route('create-city')}}" method="post">
                <h2>Create a new City</h2>
                @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name of city</label>
                        <input type="text" class="form-control" id="" name="name" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        @if ($errors->has('name'))  <p style="color:red;">{{$errors->first('name')}}</p> @endif

                    </div>
                    <div class="form-group">
                       <select name="countries" class="form-control">
                            <option value="">Choose country</option>
                            @foreach($countries as $cs)
                                <option value="{{$cs->id}}">{{$cs->name_country}}</option>
                            @endforeach
                       </select>
                       @if ($errors->has('countries'))  <p style="color:red;">{{$errors->first('countries')}}</p> @endif
                    </div>
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Submit"><br>
                    <button type="button" class="btn btn-warning text-white mt-2" onclick="goBack()">
                    <i class="fa fa-arrow-left"></i> Back
                    </button>
                    </form>
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
