<div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Profile Settings</h5>
                </div>

                <div class="list-group list-group-flush">
                    <a href="{{route('admin-home')}}" class="list-group-item list-group-item-action active bg-dark text-white">
                        Users administration
                        <i class="fa fa-users text-orange"></i>
                    </a>
                  
                    <a class="list-group-item list-group-item-action"  href="#information">
                        Purchases administration
                        
                    </a>
                    <a class="list-group-item list-group-item-action"  href="{{route('admin-cities')}}">
                        Manage City <i class="fa fa-building text-orange"></i>
                    </a>
                    <a class="list-group-item list-group-item-action"  href="{{route('admin-countries')}}">
                       Manage Country <i class="fa fa-globe text-orange"></i>
                    </a>
                   
                    <a class="list-group-item list-group-item-action"  href="{{route('admin-categories')}}">
                      Manage Category
                      <i class="fa fa-sort text-orange"></i>
                    </a>
                    
                </div>
            </div>